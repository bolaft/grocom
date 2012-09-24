<?php

namespace Generic\EAV\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="generic_eav_domain_value")
 */
class DomainValue
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * The attribute this domain value is attached to
     *
     * @ORM\ManyToOne(targetEntity="Generic\EAV\Entity\Attribute", inversedBy="domain")
     */
    protected $attribute;

    /**
     * The value
     *
     * @ORM\Column(type="string", length=255)
     */
    protected $value;

    public function __construct($value)
    {
       $this->setValue($value);
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set value
     *
     * @param  string      $value
     * @return DomainValue
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set attribute
     *
     * @param  Generic\EAV\Entity\Attribute $attribute
     * @return DomainValue
     */
    public function setAttribute(\Generic\EAV\Entity\Attribute $attribute = null)
    {
        $this->attribute = $attribute;

        return $this;
    }

    /**
     * Get attribute
     *
     * @return Generic\EAV\Entity\Attribute
     */
    public function getAttribute()
    {
        return $this->attribute;
    }
}
