<?php

namespace Generic\EAV\Entity\Value;

use Doctrine\ORM\Mapping as ORM;

use Generic\EAV\Entity\Value\Value as BaseValue;

/**
 * @ORM\Entity
 */
class DateValue extends BaseValue
{
    /**
     * @ORM\Column(type="date")
     */
    protected $date;

    public function setValue($value)
    {
        $this->date = $value;
    }

    public function getValue()
    {
        return $this->date;
    }
}
