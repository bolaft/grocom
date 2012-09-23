<?php

namespace Grocom\Order\Entity;

use Doctrine\ORM\Mapping as ORM;
use Generic\EAV\Entity\Type as BaseType;

/**
 * @ORM\Entity
 */
class OrderType extends BaseType
{
    public function getInstanceClass()
    {
        return '\Order\Product\Entity\Order';
    }

    public function getFormClass()
    {
        return '\Order\Product\Form\Order';
    }
}