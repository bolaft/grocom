<?php

namespace Generic\EAV\Entity\Value;

use Doctrine\ORM\Mapping as ORM;

use Generic\EAV\Entity\Value\Value as BaseValue;

/**
 * @author Soufian Salim <soufi@nsal.im>
 *
 * @ORM\Entity
 */
class FloatValue extends BaseValue
{
    /**
     * @var int
     * 
     * @ORM\Column(type="float")
     */
    protected $float;

    public function setValue($value)
    {
        $this->float = $value;
    }

    public function getValue()
    {
        return $this->float;
    }
}
