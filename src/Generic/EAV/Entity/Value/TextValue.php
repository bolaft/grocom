<?php

namespace Generic\EAV\Entity\Value;

use Doctrine\ORM\Mapping as ORM;

use Generic\EAV\Entity\Value\Value as BaseValue;

/**
 * @ORM\Entity
 */
class TextValue extends BaseValue
{
    /**
     * @ORM\Column(type="text")
     */
    protected $text_value;

    public function setValue($value)
    {
        $this->text_value = $value;
    }

    public function getValue()
    {
        return $this->text_value;
    }
}
