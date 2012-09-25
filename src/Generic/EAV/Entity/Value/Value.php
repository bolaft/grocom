<?php

namespace Generic\EAV\Entity\Value;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="generic_eav_value")
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="discriminator", type="string")
 * @ORM\DiscriminatorMap({
 *      "string"  = "Generic\EAV\Entity\Value\StringValue",
 *      "text"    = "Generic\EAV\Entity\Value\TextValue",
 *      "integer" = "Generic\EAV\Entity\Value\IntegerValue",
 *      "float"   = "Generic\EAV\Entity\Value\FloatValue",
 *      "boolean" = "Generic\EAV\Entity\Value\BooleanValue",
 *      "date"    = "Generic\EAV\Entity\Value\DateValue",
 * })
 */
class Value
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Generic\EAV\Entity\Instance", inversedBy="values")
     */
    protected $instance;
    
    /**
     * @ORM\ManyToOne(targetEntity="Generic\EAV\Entity\Attribute", inversedBy="values")
     */
    protected $attribute;

    /**
     * Set instance
     *
     * @param  Generic\EAV\Entity\Instance $instance
     * @return Value
     */
    public function setInstance(\Generic\EAV\Entity\Instance $instance)
    {
        $instance->addValue($this);
        $this->instance = $instance;

        return $this;
    }

    /**
     * Get instance
     *
     * @return Generic\EAV\Entity\Instance
     */
    public function getInstance()
    {
        return $this->instance;
    }

    /**
     * Set attribute
     *
     * @param  Generic\EAV\Entity\Attribute $attribute
     * @return Value
     */
    public function setAttribute(\Generic\EAV\Entity\Attribute $attribute)
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
