<?php

namespace Grocom\Order\Entity;

use Doctrine\ORM\Mapping as ORM;
use Generic\EAV\Entity\Type as BaseType;

/**
 * @ORM\Entity
 */
class OrderType extends BaseType
{
	/**
	 * Retourne '\Order\Product\Entity\Order';
	 * 
	 * @return string
	 */
    public function getInstanceClass()
    {
        return '\Grocom\Order\Entity\Order';
    }
}