<?php
namespace Generic\EAV\Repository;

use Doctrine\ORM\EntityRepository;

class TypeRepository extends EntityRepository
{
    public function getLinkedAttributes($type)
    {
        // Données brutes
        $data = $this->getEntityManager()
        ->createQuery('
            SELECT t, l, a, d
            FROM Generic\EAV\Entity\Type t
                LEFT JOIN t.attribute_links l
                LEFT JOIN l.attribute a
                LEFT JOIN a.domain d
            WHERE t.id = :type_id
        ')->setParameter('type_id', $type->getId())
        ->getArrayResult();

        // Transformation du résultat (réindexation des liens par id)
        $result = array();
        foreach ($data[0]['attribute_links'] as $id => $link) {
            $result[$link['id']] = $link;
        }

        return $result;
    }

    public function deleteType($type)
    {
        $em = $this->getEntityManager();

        $em->transactional(function($em) use ($type) {
            // Suppression des valeurs du type
            $em->createQuery('
                DELETE Generic\EAV\Entity\Value\Value v
                WHERE v.type = :type
            ')->setParameter('type', $type)
            ->getResult();

            // Suppression des instances du Type
            $em->createQuery('
                DELETE Generic\EAV\Entity\Instance i
                WHERE i.type = :type
            ')->setParameter('type', $type)
            ->getResult();

            // Suppressions des liens vers les attributs
            $em->createQuery('
                DELETE Generic\EAV\Entity\Link tal
                WHERE tal.type = :type
            ')->setParameter('type', $type)
            ->getResult();

            // Suppression du Type lui-même
            $em->remove($type);
            $em->flush();
        });
    }
}
