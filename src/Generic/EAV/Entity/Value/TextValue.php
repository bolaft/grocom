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
     * @var string
     * 
     * @ORM\Column(type="text")
     */
    protected $text;

    public function setValue($value)
    {
        $this->text = $value;
    }

    public function getValue()
    {
        return $this->text;
    }
}
