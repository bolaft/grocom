<?php

namespace Generic\EAV\Entity\Value;

use Doctrine\ORM\Mapping as ORM;
use Generic\EAV\Entity\Value\Value;

/**
 * @author Soufian Salim <soufi@nsal.im>
 *
 * @ORM\Entity
 */
class BooleanValue extends Value
{
    /**
     * @var boolean
     * 
     * @ORM\Column(type="boolean")
     */
    protected $boolean;

    /**
     * Set value
     * 
     * @param  boolean $value
     * @return BooleanValue
     */
    public function setValue($value)
    {
        $this->boolean = $value;
    }

    /**
     * Get value
     * 
     * @return boolean
     */
    public function getValue()
    {
        return $this->boolean;
    }
}
