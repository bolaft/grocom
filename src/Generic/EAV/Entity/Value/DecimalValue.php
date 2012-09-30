<?php

namespace Generic\EAV\Entity\Value;

use Doctrine\ORM\Mapping as ORM;
use Generic\EAV\Entity\Value\Value;

/**
 * @author Soufian Salim <soufi@nsal.im>
 *
 * @ORM\Entity
 */
class DecimalValue extends Value
{
    /**
     * @var double
     * 
     * @ORM\Column(type="decimal")
     */
    protected $decimal;

    /**
     * Set value
     * 
     * @param  double $value
     * @return DecimalValue
     */
    public function setValue($value)
    {
        $this->decimal = $value;
    }

    /**
     * Get value
     * 
     * @return double
     */
    public function getValue()
    {
        return $this->decimal;
    }
}
