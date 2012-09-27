<?php

namespace Grocom\Order\Entity;

use Doctrine\ORM\Mapping as ORM;
use Generic\EAV\Entity\Type;

/**
 * @author Soufian Antoine SALIM <soufi@nsal.im>
 * 
 * @ORM\Entity
 */
class OrderType extends Type
{
	/**
	 * {@inheritDoc}
	 */
    public function getInstanceClass()
    {
        return '\Grocom\Order\Entity\Order';
    }
}