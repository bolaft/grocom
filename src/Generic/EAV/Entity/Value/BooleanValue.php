<?php

namespace Generic\EAV\Entity\Value;

use Doctrine\ORM\Mapping as ORM;

use Generic\EAV\Entity\Value\Value as BaseValue;

/**
 * @ORM\Entity
 */
class BooleanValue extends BaseValue
{
    /**
     * @ORM\Column(type="boolean")
     */
    protected $boolean;

    public function setValue($value)
    {
        $this->boolean = $value;
    }

    public function getValue()
    {
        return $this->boolean;
    }
}
