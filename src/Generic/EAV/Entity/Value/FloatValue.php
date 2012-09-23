<?php

namespace Generic\EAV\Entity\Value;

use Doctrine\ORM\Mapping as ORM;

use Generic\EAV\Entity\Value\Value as BaseValue;

/**
 * @ORM\Entity
 */
class FloatValue extends BaseValue
{
    /**
     * @ORM\Column(type="float")
     */
    protected $float_value;

    public function setValue($value)
    {
        $this->float_value = $value;
    }

    public function getValue()
    {
        return $this->float_value;
    }
}
