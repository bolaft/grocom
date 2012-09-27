<?php

namespace Generic\EAV\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Classe abstraite mappant les types d'instances.
 * 
 * @author   Soufian Salim <soufi@nsal.im>
 * @abstract
 * 
 * @ORM\Entity
 * @ORM\Table(name="generic_eav_type")
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="discriminator", type="string")
 * @ORM\DiscriminatorMap({
 *      "product" = "Grocom\Product\Entity\ProductType",
 *      "order"   = "Grocom\Order\Entity\OrderType"
 * })
 */
abstract class TypeAbstract
{
    /**
     * @var int
     * 
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @var string
     * 
     * @ORM\Column(type="string", length=50, unique=true, nullable=false)
     */
    protected $name;

    /**
     * @var ArrayCollection
     * 
     * @ORM\OneToMany(targetEntity="Generic\EAV\Entity\InstanceAbstract", mappedBy="type");
     */
    protected $instances;

    /**
     * @var ArrayCollection
     * 
     * @ORM\OneToMany(targetEntity="Generic\EAV\Entity\Attribute", mappedBy="type");
     */
    protected $attributes;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->instances  = new ArrayCollection();
        $this->attributes = new ArrayCollection();
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

    /**
     * Add attribute
     *
     * @param  Generic\EAV\Entity\Attribute $attribute
     * @return Type
     */
    public function addAttribute(\Generic\EAV\Entity\Attribute $attribute)
    {
        $this->attributes[] = $attribute;

        return $this;
    }

    /**
     * Get attributes
     *
     * @return Doctrine\Common\Collections\Collection
     */
    public function getAttributes()
    {
        return $this->attributes;
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
        return $this->instances;
    }

    /**
     * Get the class of this type's instances
     * 
     * @abstract
     * @return   String
     */
    abstract public function getInstanceClass()
}
