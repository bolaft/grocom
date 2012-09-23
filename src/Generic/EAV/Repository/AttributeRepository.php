<?php
namespace Generic\EAV\Repository;

use Doctrine\ORM\EntityRepository;

class AttributeRepository extends EntityRepository
{
    public function findLinkedTypes($attribute)
    {
        return $this->getEntityManager()
            ->createQuery('
                SELECT t
                FROM Generic\EAV\Entity\Type t
                    JOIN t.attribute_links l WITH l.attribute = :attribute
            ')->setParameter('attribute', $attribute)
            ->getResult();
    }
}
