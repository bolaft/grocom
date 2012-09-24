<?php

namespace Generic\EAV\Entity\Value;

use Doctrine\ORM\Mapping as ORM;

use Generic\EAV\Entity\Value\Value as BaseValue;

/**
 * @ORM\Entity
 */
class JoinValue extends BaseValue
{
    /**
     * @ORM\OneToOne(targetEntity="Generic\EAV\Entity\DomainValue")
     */
    protected $domain_value;

    public function setValue(\Generic\EAV\Entity\DomainValue $value)
    {
        $this->domain_value = $value;
    }

    public function getValue()
    {
        return null !== $this->domain_value ? $this->domain_value->getValue() : null;
    }
}
