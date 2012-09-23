<?php

namespace Generic\EAV\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="generic_eav_link")
 */
class Link
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * The entity type this link is attached to
     *
     * @ORM\ManyToOne(targetEntity="Generic\EAV\Entity\Type", inversedBy="attribute_links")
     */
    protected $type;

    /**
     * The attribute this link points to
     *
     * @ORM\ManyToOne(targetEntity="Generic\EAV\Entity\Attribute", fetch="EAGER")
     */
    protected $attribute;

    /**
     * Is this attribute required for this entity type
     *
     * @ORM\Column(type="boolean")
     */
    protected $required;

    /**
     * The group this attribute will be displayed in
     *
     * @ORM\OneToOne(targetEntity="Generic\EAV\Entity\Group", mappedBy="link", fetch="EAGER")
     */
    protected $display_group;

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
     * Set required
     *
     * @param  boolean           $required
     * @return Link
     */
    public function setRequired($required)
    {
        $this->required = $required;

        return $this;
    }

    /**
     * Get required
     *
     * @return boolean
     */
    public function getRequired()
    {
        return $this->required;
    }

    /**
     * Set group
     *
     * @param  string            $display_group
     * @return Link
     */
    public function setDisplayGroup(\Generic\EAV\Entity\Group $group)
    {
        $group->setLink($this);
        $this->display_group = $group;

        return $this;
    }

    /**
     * Get grouping
     *
     * @return string
     */
    public function getDisplayGroup()
    {
        return $this->display_group;
    }

    /**
     * Set type
     *
     * @param  Generic\EAV\Entity\Type   $type
     * @return Link
     */
    public function setType(\Generic\EAV\Entity\Type $type = null)
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
     * @return Link
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
