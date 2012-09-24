<?php

namespace Generic\EAV\Entity\Value;

use Doctrine\ORM\Mapping as ORM;

use Generic\EAV\Entity\Value\Value as BaseValue;

/**
 * @ORM\Entity
 */
class TypeValue extends BaseValue
{
    /**
     * @ORM\OneToOne(targetEntity="Generic\EAV\Entity\Type")
     */
    protected $type_value;

    public function setValue(\Generic\EAV\Entity\Type $value)
    {
        $this->type_value = $value;
    }

    public function getValue()
    {
        return $this->type_value;
    }
}
