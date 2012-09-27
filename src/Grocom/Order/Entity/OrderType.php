<?php

namespace Grocom\Order\Entity;

use Doctrine\ORM\Mapping as ORM;
use Generic\EAV\Entity\Type as BaseType;

/**
 * @author Soufian Antoine SALIM <soufi@nsal.im>
 * 
 * @ORM\Entity
 */
class OrderType extends BaseType
{
	/**
	 * {@inheritDoc}
	 */
    public function getInstanceClass()
    {
        return '\Grocom\Order\Entity\Order';
    }
}