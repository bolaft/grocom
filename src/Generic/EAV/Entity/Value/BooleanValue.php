<?php

namespace Generic\EAV\Entity\Value;

use Doctrine\ORM\Mapping as ORM;

use Generic\EAV\Entity\Value\Value as BaseValue;

/**
 * @author Soufian Salim <soufi@nsal.im>
 *
 * @ORM\Entity
 */
class BooleanValue extends BaseValue
{
    /**
     * @var boolean
     * 
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
