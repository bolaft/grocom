<?php

namespace Generic\EAV\Entity\Value;

use Doctrine\ORM\Mapping as ORM;

use Generic\EAV\Entity\Value\Value as BaseValue;

/**
 * @ORM\Entity
 */
class IntegerValue extends BaseValue
{
    /**
     * @ORM\Column(type="integer")
     */
    protected $integer;

    public function setValue($value)
    {
        $this->integer = $value;
    }

    public function getValue()
    {
        return $this->integer;
    }
}
