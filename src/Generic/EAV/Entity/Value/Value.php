<?php

namespace Generic\EAV\Entity\Value;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="generic_eav_value")
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="concrete_type", type="integer")
 * @ORM\DiscriminatorMap({
 *      0 = "Generic\EAV\Entity\Value\StringValue",
 *      1 = "Generic\EAV\Entity\Value\TextValue",
 *      2 = "Generic\EAV\Entity\Value\IntegerValue",
 *      3 = "Generic\EAV\Entity\Value\FloatValue",
 *      4 = "Generic\EAV\Entity\Value\BooleanValue",
 *      5 = "Generic\EAV\Entity\Value\JoinValue",
 *      6 = "Generic\EAV\Entity\Value\DateValue",
 *      7 = "Generic\EAV\Entity\Value\TypeValue",
 *      8 = "Generic\EAV\Entity\Value\FileValue"
 * })
 */
class Value
{
    /**
     * The instance this value is attached to
     *
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Generic\EAV\Entity\Instance", fetch="EAGER")
     */
    protected $instance;

    /**
     * The actual attribute-value link this value represents
     *
     * @ORM\Id
     * @ORM\OneToOne(targetEntity="Generic\EAV\Entity\Link", fetch="EAGER")
     */
    protected $link;

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
     * Set type
     *
     * @param  Generic\EAV\Entity\Type $type
     * @return Value
     */
    public function setType(\Generic\EAV\Entity\Type $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return Generic\EAV\Entity\Type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set attribute
     *
     * @param  Generic\EAV\Entity\Attribute $attribute
     * @return Value
     */
    public function setAttribute(\Generic\EAV\Entity\Attribute $attribute)
    {
        $attribute->addValue($this);
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

    /**
     * Set link
     *
     * @param  Generic\EAV\Entity\Link $link
     * @return Value
     */
    public function setLink(\Generic\EAV\Entity\Link $link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get link
     *
     * @return Generic\EAV\Entity\Link
     */
    public function getLink()
    {
        return $this->link;
    }
}
