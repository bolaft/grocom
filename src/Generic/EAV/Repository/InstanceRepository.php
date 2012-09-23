<?php
namespace Generic\EAV\Repository;

use Doctrine\ORM\EntityRepository;
use Generic\EAV\Tools\EntityHelper;

class InstanceRepository extends EntityRepository
{
    public function persistInstance($type, $data)
    {
        $em = $this->getEntityManager();

        return $em->transactional(function($em) use ($type, $data) {
            // Création d'une nouvelle instance du type
            $instance_class = $type->getInstanceClass();
            $instance = new $instance_class();
            $instance->setName($data['name']);
            $instance->setType($type);
            
            if (array_key_exists('__properties', $data)) {
                foreach ($data['__properties'] as $property => $value) {
                    call_user_func(array($instance, 'set' . ucfirst($property)), $value);
                }
            }
            $em->persist($instance);
            $em->flush();

            // Création des instances des attributs
            foreach ($type->getAttributeLinks() as $link) {
                $a = $link->getAttribute();
                $data_value = InstanceRepository::extractDataValue($a->getName(), $data);

                if (!$link->getRequired() && 'boolean' === $a->getRawType() && !$data_value) {
                    continue;
                }

                if (null !== $data_value && "" !== $data_value) {
                    $value_class = 'Generic\EAV\Entity\Value\\' . ucfirst($a->getRawType()) . 'Value';
                    $value = new $value_class();
                    // Affecter la valeur
                    if ('join' == $a->getRawType()) {
                        foreach ($a->getDomain() as $domain_value) {
                            if ($data_value == $domain_value->getId()) {
                                $value->setValue($domain_value);
                                break;
                            } elseif($data_value == $domain_value->getValue()) {
                                $value->setValue($domain_value);
                                break;
                                
                            }
                        }

                        // On n'enregistre pas les valeurs vides
                        if (null === $value->getValue()) {
                            continue;
                        }
                    } else {
                        $value->setValue($data_value);
                    }

                    $value->setType($type);
                    $value->setInstance($instance);
                    $value->setAttribute($a);
                    $value->setLink($link);

                    $em->persist($value);
                }
            }
            $em->flush();

            return $instance;
        });
    }
    
    public function editInstance($instance, $data)
    {
        $em = $this->getEntityManager();
        
        return $em->transactional(function($em) use ($instance, $data) {
            // Edition de l'instance
            $instance->setName($data['name']);
            
            if (array_key_exists('__properties', $data)) {
                foreach ($data['__properties'] as $property => $value) {
                    call_user_func(array($instance, 'set' . ucfirst($property)), $value);
                }
            }
            $em->persist($instance);
            $em->flush();
            
            // Edition des valeurs
            $er = $em->getRepository('Generic\EAV\Entity\Instance');
            foreach ($instance->getType()->getAttributeLinks() as $link) {
                $attribute = $link->getAttribute();
                $data_value = InstanceRepository::extractDataValue($attribute->getName(), $data);
                
                if (!$link->getRequired() && 'boolean' === $attribute->getRawType() && !$data_value) {
                    continue;
                }
                
                // Récupération de la valeur
                $value = $er->getValue($instance, $attribute);

                // Une valeur existait précédement
                if (null !== $value) {
                    // La valeur n'a pas changé
                    if ( $value->getValue() === $data_value ) {
                        continue;
                    }
                    // La nouvelle valeur est vide
                    if ( null === $data_value && '' === $data_value ) {
                        $em->remove($value);
                        continue;
                    }

                // Aucune valeur n'existait auparavant pour cet attribut
                } elseif (null !== $data_value && '' !== $data_value) {
                    $value_class = 'Generic\EAV\Entity\Value\\' . ucfirst($attribute->getRawType()) . 'Value';
                    $value = new $value_class();
                    $value->setType($instance->getType());
                    $value->setInstance($instance);
                    $value->setAttribute($attribute);
                    $value->setLink($link);
                } else {
                    continue;
                }

                // Affecter la nouvelle valeur
                if ('join' == $attribute->getRawType()) {
                    foreach ($attribute->getDomain() as $domain_value) {
                        if ($data_value == $domain_value->getId()) {
                            $value->setValue($domain_value);
                            break;
                        }
                    }

                    // On n'enregistre pas les valeurs vides
                    if (null === $value->getValue()) {
                        continue;
                    }
                } else {
                    $value->setValue($data_value);
                }

                $em->persist($value);
            }
            $em->flush();

            return $instance;
        });
    }

    public static function extractDataValue($full_name, array $data)
    {
        if (array_key_exists($full_name, $data)) {
            return $data[$full_name];
        } else {
            $short_name = EntityHelper::shortName($full_name);
            if (array_key_exists($short_name, $data)) {
                return $data[$short_name];
            }
        }

        return null;
    }

    public function removeInstance(\Generic\EAV\Entity\Instance $instance)
    {
        $em = $this->getEntityManager();

        $em->transactional(function($em) use ($instance) {
            // Suppression des valeurs de l'instance
            $em->createQuery('
                DELETE Generic\EAV\Entity\Value\Value v
                WHERE v.instance = :instance
            ')->setParameter('instance', $instance)
            ->getResult();

            $em->remove($instance);
            $em->flush();
        });
    }

    public function getValues(\Generic\EAV\Entity\Instance $instance, $group = null)
    {
        return $this->getEntityManager()
            ->createQueryBuilder()
            ->select('value', 'attribute')
            ->from('Generic\EAV\Entity\Value\Value', 'value')
            ->leftJoin('value.attribute', 'attribute')
            ->where('value.instance = :instance')
            ->setParameters(array(
                'instance'  => $instance,
            ))
            ->getQuery()
            ->getResult();
    }

    public function getValuesArray(\Generic\EAV\Entity\Instance $instance, $group = null)
    {
         $data = $this->getValues($instance, $group);
         $result = array();
         foreach ($data as $value) {
             $result[EntityHelper::shortName($value->getAttribute()->getName())] = $value->getValue();
         }

         return $result;
    }
    
    public function getTreeKeys(\Generic\EAV\Entity\Instance $instance, $node_name)
    {
        $kids = $this->getEntityManager()
            ->getRepository('Generic\EAV\Entity\Group')
                ->findOneByName($node_name)
                ->getChildren();
        
        $keys = array();
        foreach($kids as $kid) {
            $keys[] = EntityHelper::shortName($kid->getName());
        }
        
        return $keys;
    }

    public function getValueTree(\Generic\EAV\Entity\Instance $instance)
    {
        return $this->getEntityManager()
            ->getRepository('Generic\EAV\Entity\Group')
            ->getTreeArray($instance->getType(), $instance);
    }
    
    public function getValue(\Generic\EAV\Entity\Instance $instance, \Generic\EAV\Entity\Attribute $attribute)
    {
        return $this->getEntityManager()
            ->createQueryBuilder()
            ->select('value')
            ->from('Generic\EAV\Entity\Value\Value', 'value')
            ->leftJoin('value.instance', 'instance')
            ->leftJoin('value.attribute', 'attribute')
            ->where('value.instance = :instance')
            ->andWhere('value.attribute = :attribute')
            ->setParameters(array(
                'instance'  => $instance,
                'attribute' => $attribute,
            ))
            ->getQuery()
            ->getOneOrNullResult();
    }
    
    public function setValue(\Generic\EAV\Entity\Instance $instance, $attribute_label, $value_text)
    {
        $results = $this->getEntityManager()
            ->createQueryBuilder()
            ->select('value')
            ->from('Generic\EAV\Entity\Value\Value', 'value')
            ->leftJoin('value.instance', 'instance')
            ->leftJoin('value.attribute', 'attribute')
            ->where('value.instance = :instance')
            ->setParameters(array(
                'instance'  => $instance,
            ))
            ->getQuery()
            ->getResult();
        
        $instance_type = $instance->getType()->getName(); // Le nom du type de l'instance doit être formé comme ceci: product->manual_car

        foreach ($results as $result)
        {
            $attribute = $result->getAttribute();
            $attribute_name = $attribute->getName(); // Le nom de l'attribut doit être formé comme ceci: product_manual_car->title
            $attribute_make = str_replace('->', '_', $instance_type) . '->' . strtolower($attribute_label);
             
            if ($attribute_name == $attribute_make)
            {
                $value = $this->getValue($instance, $attribute);
                $value->setValue($value_text);
                $this->getEntityManager()->persist($value);
                $this->getEntityManager()->flush();
                
            }
        }
    }
}
