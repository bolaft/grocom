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
     * @var string
     * 
     * @ORM\Column(type="string", length=255)
     */
    protected $string;

    public function setValue($value)
    {
        $this->string = $value;
    }

    public function getValue()
    {
        return $this->string;
    }
}
