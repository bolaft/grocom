<?php

namespace Generic\EAV\Entity\Value;

use Doctrine\ORM\Mapping as ORM;
use Generic\EAV\Entity\Value\Value;

/**
 * @author Soufian Salim <soufi@nsal.im>
 *
 * @ORM\Entity
 */
class IntegerValue extends Value
{
    /**
     * @var int
     * 
     * @ORM\Column(type="integer")
     */
    protected $integer;

    /**
     * Set value
     * 
     * @param  int $value
     * @return IntegerValue
     */
    public function setValue($value)
    {
        $this->integer = $value;
    }

    /**
     * Get value
     * 
     * @return int
     */
    public function getValue()
    {
        return $this->integer;
    }
}
