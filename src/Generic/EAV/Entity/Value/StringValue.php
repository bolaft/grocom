<?php

namespace Generic\EAV\Entity\Value;

use Doctrine\ORM\Mapping as ORM;

use Generic\EAV\Entity\Value\Value as BaseValue;

/**
 * @ORM\Entity
 */
class StringValue extends BaseValue
{
    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $string_value;

    public function setValue($value)
    {
        $this->string_value = $value;
    }

    public function getValue()
    {
        return $this->string_value;
    }
}
