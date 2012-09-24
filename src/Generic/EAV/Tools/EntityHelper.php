<?php

namespace Generic\EAV\Tools;

class EntityHelper
{
    /**
     * EntityManager
     */
    protected $_em;

    protected $_group_repo;

    protected $_shared_attributes = array();

    public function __construct()
    {
        $this->_em = \Zend_Registry::get('em');
        $this->_group_repo = $this->_em->getRepository('Generic\EAV\Entity\Group');
    }

    public function createEntity($class, array $data)
    {
        $entity = new $class;

        foreach ($data as $property => $value) {
            call_user_func(array($entity, $this->toSetter($property)), $value);
        }

        return $entity;
    }

    public function persistTypeFixture(array $data, $key, $class, $prefix)
    {
        $product_types = array();
        foreach ($data[$key] as $name => $pt_data) {
            $product_type = new $class($this->makeName($prefix, $name, false));
            $this->_em->persist($product_type);
            foreach ($pt_data['__elements'] as $element) {
                $this->_linkAttributes($prefix, $product_type, $product_type->getRootGroup(), $element, $data);
            }

            $this->_em->persist($product_type);
            $product_types[$product_type->getName()] = $product_type;
        }

        return $product_types;
    }

    private function _linkAttributes($prefix, $product_type, $root_group, $node, $data)
    {
        // Si il existe des éléments pour le noeud il s'agit d'un groupe
        if (isset($node['__elements'])) {
            $group = $this->createEntity('\Generic\EAV\Entity\Group', array(
                'name'  => $node['name'],
                'label' => $node['label'],
                'parent'=> $root_group,
            ));
            $this->_em->persist($group);
            foreach ($node['__elements'] as $child) {
                $this->_linkAttributes($prefix, $product_type, $group, $child, $data);
            }
        } else {
            $count = $node['__count']; unset($node['__count']);

            for ($i = 1; $i <= $count; $i++) {
                if (isset($node['__ref'])) {
                    $attribute = $this->_getAttribute($prefix, $node['__ref'], $i, $data);
                } else {
                    $attribute = $this->_createAttribute(
                        $this->makeName(str_replace('->', '_', $product_type->getName()), $node['name'], false, $i),
                        $this->makeLabel($node['label'], $i),
                        $node,
                        $data
                    );
                }

                $link = $product_type->addAttribute($attribute, $node['required']);
                $link_group = $this->createEntity('\Generic\EAV\Entity\Group', array(
                    'name'  => $attribute->getName(),
                    'label' => $attribute->getName(),
                ));
                $link->setDisplayGroup($link_group);
                $this->_group_repo->persistAsLastChildOf($link_group, $root_group);
                $this->_em->persist($link);
            }
        }
    }

    private function _getAttribute($prefix, $ref, $i, $data)
    {
        $name = $this->makeName($prefix, $ref, true, $i);
        if (array_key_exists($name, $this->_shared_attributes)) {
            return $this->_shared_attributes[$name];
        } else {
            return $this->_createAttribute(
                $name,
                $this->makeLabel($data['shared_attributes'][$ref]['label'], $i),
                $data['shared_attributes'][$ref],
                $data
            );
        }
    }

    private function _createAttribute($name, $label, $node, $data)
    {
        if (isset($node['required'])) {
             unset($node['required']);
        }

        $node['name'] = $name;
        $node['label'] = $label;

        $this->_shared_attributes[$node['name']] = $this->createEntity('\Generic\EAV\Entity\Attribute', $node);
        $this->_em->persist($this->_shared_attributes[$node['name']]);

        return $this->_shared_attributes[$node['name']];
    }

    private function toSetter($key)
    {
        return 'set' . ucfirst(
            preg_replace_callback('/_([a-z])/', function($c) {
                return strtoupper($c[1]);
            },
            $key
        ));
    }

    private function toUndercase($name)
    {
        return strtolower(implode('_', explode(' ', $name)));
    }

    public function makeName($prefix, $name, $is_shared, $index = -1)
    {
        return $this->toUndercase($prefix) . ($is_shared ? '__shared__' : '') . '->' . $this->toUndercase($name) . ($index > 1 ? '-' . $index : '');
    }

    public function makeLabel($label, $i)
    {
        return $i > 1 ? $label . ' ' . $i : $label;
    }

    public static function shortName($name)
    {
        return array_pop(explode('->', $name));
    }
}
