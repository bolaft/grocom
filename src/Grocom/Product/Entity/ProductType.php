<?php

namespace Grocom\Product\Entity;

use Doctrine\ORM\Mapping as ORM;
use Generic\EAV\Entity\Type as BaseType;

/**
 * @ORM\Entity
 */
class ProductType extends BaseType
{
    public function getInstanceClass()
    {
        return '\Grocom\Product\Entity\Product';
    }
}