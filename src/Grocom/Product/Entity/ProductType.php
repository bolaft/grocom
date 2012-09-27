<?php

namespace Grocom\Product\Entity;

use Doctrine\ORM\Mapping as ORM;
use Generic\EAV\Entity\Type;

/**
 * @author Soufian Antoine SALIM <soufi@nsal.im>
 * 
 * @ORM\Entity
 */
class ProductType extends Type
{
	/**
	 * {@inheritDoc}
	 */
    public function getInstanceClass()
    {
        return '\Grocom\Product\Entity\Product';
    }
}