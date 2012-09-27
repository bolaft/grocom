<?php

namespace Grocom\Product\Entity;

use Doctrine\ORM\Mapping as ORM;
use Generic\EAV\Entity\Type as BaseType;

/**
 * @ORM\Entity
 */
class ProductType extends BaseType
{
	/**
	 * Retourne '\Grocom\Product\Entity\Product';
	 * 
	 * @return string
	 */
    public function getInstanceClass()
    {
        return '\Grocom\Product\Entity\Product';
    }
}