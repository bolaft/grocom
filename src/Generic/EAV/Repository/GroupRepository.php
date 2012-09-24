<?php

namespace Generic\EAV\Repository;

use Gedmo\Tree\Entity\Repository\NestedTreeRepository;
use Doctrine\ORM\Query;

class GroupRepository extends NestedTreeRepository
{

    public function getGroupsIncludingRootAsArray($root_node, \Generic\EAV\Entity\Instance $with_values = null)
    {
        // Inclure les colonnes de métadata
        $qb = $this->childrenQueryBuilder($root_node);

        // Jointure avec les liens vers les attributs
        $select = array('node', 'link', 'attribute', 'domain');
        $qb->leftJoin('node.link', 'link')
           ->leftJoin('link.attribute', 'attribute')
           ->leftJoin('attribute.domain', 'domain');

        if (null !== $with_values) {
            $select[] = 'values';
            $qb->leftJoin('attribute.values', 'values')
               ->andWhere('values.instance = :instance')
               ->setParameter(':instance', $with_values);
        }
        // Changement du select
        $qb->select($select);

        $query = $qb->getQuery()->setHint(Query::HINT_INCLUDE_META_COLUMNS, true);

        return array_merge(
            array($root_node->toArray()), $query->getArrayResult()
        );
    }

    public function getTreeArray(\Generic\EAV\Entity\Type $type, \Generic\EAV\Entity\Instance $instance = null)
    {
        $root_node = $type->getRootGroup();
        $groups = $this->getGroupsIncludingRootAsArray($root_node, $instance);

        $tree = array();
        $l = 0;

        if (count($groups) > 0) {
            $stack = array();
            foreach ($groups as $group) {
                // Récupérer les informations nécessaires
                $node = $group;
                $node['__children'] = array();
                // Gérer les feuilles

                if (!isset($group['link'])) {
                    $node['link'] = null;
                }

                if (null === $instance || !$node['link'] || !empty($node['link']['attribute']['values'])) {
                    // Taille de la pile (= profondeur dans l'arbre)
                    $l = count($stack);
                    // On vérifie si on est à un niveau différent
                    while ($l > 0 && $stack[$l - 1]['lvl'] >= $node['lvl']) {
                        array_pop($stack);
                        $l--;
                    }
                    // La pile est vide, on est à la racine
                    if (0 === $l) {
                        $i = count($tree);
                        $tree[$i] = $node;
                        $stack[] = &$tree[$i];
                    } else {
                        // On ajoute les enfants au parent
                        $i = count($stack[$l - 1]['__children']);
                        $stack[$l - 1]['__children'][$i] = $node;
                        $stack[] = &$stack[$l - 1]['__children'][$i];
                    }
                }
            }
        }
        return count($tree) > 0 ? $tree[0] : array();
    }

    public function hasGroups($type)
    {
        $qb = $this->childrenQueryBuilder($type->getRootGroup());
        $qb->andWhere($qb->expr()->isNull('node.link'));

        return count($qb->getQuery()->getResult()) > 0;
    }

}
