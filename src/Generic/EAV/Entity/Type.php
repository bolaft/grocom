<?php

namespace Generic\EAV\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass="Generic\EAV\Repository\TypeRepository")
 * @ORM\Table(name="generic_eav_type")
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="concrete_type", type="string")
 * @ORM\DiscriminatorMap({
 *      "product" = "Grocom\Product\Entity\ProductType",
 *      "order"   = "Grocom\Order\Entity\OrderType"
 * })
 */
class Type
{
    private static $children = array(
        'Grocom\Product\Entity\ProductType' => 'Product Type',
        'Grocom\Order\Entity\OrderType'     => 'Order Type',
    );

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * The entity type name (which has to be unique)
     *
     * @ORM\Column(type="string", length=50, unique=true, nullable=false)
     */
    protected $name;

    /**
     * The root node of this type's display hierarchy
     *
     * @ORM\OneToOne(targetEntity="Generic\EAV\Entity\Group", cascade={"persist", "remove"}, fetch="EAGER")
     */
    protected $root_group;

    /**
     * The entity is linked to one or several attributes, through an association class
     *
     * @ORM\OneToMany(targetEntity="Generic\EAV\Entity\Link", mappedBy="type", cascade={"persist"})
     */
    protected $attribute_links;

    /**
     * The instances of this type
     *
     * @ORM\OneToMany(targetEntity="Generic\EAV\Entity\Instance", mappedBy="type");
     */
    protected $instances;

    private $attributes = null;

    public function __construct($name = null)
    {
        $this->attribute_links = new ArrayCollection();
        $this->setName($name);
        $this->setRootGroup(new Group($name . ' [root]'));
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
     * Set name
     *
     * @param  string $name
     * @return Type
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    public function addAttribute(\Generic\EAV\Entity\Attribute $attribute, $required = false)
    {
        $link = new Link();
        $link->setAttribute($attribute);
        $link->setRequired($required);
        $this->addLink($link);

        return $link;
    }

    public function getAttributes()
    {
        if (null === $this->attributes) {
            $this->attributes = array();
            foreach ($this->attribute_links as $link) {
                $this->attributes[$link->getDisplayGroup()->getLft()] = $link->getAttribute();
            }
            ksort($this->attributes);
        }

        return $this->attributes;
    }

    /**
     * Add attribute_links
     *
     * @param  Generic\EAV\Entity\Link $attributeLinks
     * @return Type
     */
    public function addLink(\Generic\EAV\Entity\Link $attributeLinks)
    {
        $attributeLinks->setType($this);
        $this->attribute_links[] = $attributeLinks;

        return $this;
    }

    /**
     * Get attribute_links
     *
     * @return Doctrine\Common\Collections\Collection
     */
    public function getAttributeLinks()
    {
        $links = array();
        foreach ($this->attribute_links as $link) {
            $links[$link->getId()] = $link;
        }

        return $links;
    }

    /**
     * Add instance
     *
     * @param  Generic\EAV\Entity\Instance $instance
     * @return Type
     */
    public function addInstance(\Generic\EAV\Entity\Instance $instance)
    {
        $this->instances[] = $instance;

        return $this;
    }

    /**
     * Get instances
     *
     * @return Doctrine\Common\Collections\Collection
     */
    public function getInstances()
    {
        $instances = array();
        foreach ($this->instances as $instance) {
            $instances[$instance->getId()] = $instance;
        }

        return $instances;
    }

    public function setRootGroup(\Generic\EAV\Entity\Group $root)
    {
        $this->root_group = $root;
    }

    public function getRootGroup()
    {
        return $this->root_group;
    }

    public static function children()
    {
        return self::$children;
    }
}
