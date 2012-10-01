<?php

namespace Generic\EAV\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Classe abstraite mappant les types d'instances.
 * 
 * @author   Soufian Salim <soufi@nsal.im>
 * @abstract
 * 
 * @Gedmo\TranslationEntity(class="Generic\EAV\Entity\Translation")
 * @ORM\Entity
 * @ORM\Table(name="generic_eav_type")
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="discriminator", type="string")
 * @ORM\DiscriminatorMap({
 *      "product" = "Grocom\Product\Entity\ProductType",
 *      "order"   = "Grocom\Order\Entity\OrderType"
 * })
 */
abstract class Type
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
     * @Gedmo\Translatable
     * @ORM\Column(type="string", length=50, unique=true, nullable=false)
     */
    protected $name;

    /**
     * @var ArrayCollection
     * 
     * @ORM\OneToMany(targetEntity="Generic\EAV\Entity\Instance", mappedBy="type");
     */
    protected $instances;

    /**
     * @var ArrayCollection
     * 
     * @ORM\OneToMany(targetEntity="Generic\EAV\Entity\Attribute", mappedBy="type");
     */
    protected $attributes;

    /**
     * @var string
     * 
     * @Gedmo\Locale
     */
    protected $locale;

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
     * @param  Attribute $attribute
     * @return Type
     */
    public function addAttribute(Attribute $attribute)
    {
        $this->attributes[] = $attribute;

        return $this;
    }

    /**
     * Get attributes
     *
     * @return Collection
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * Add instance
     *
     * @param  Instance $instance
     * @return Type
     */
    public function addInstance(Instance $instance)
    {
        $this->instances[] = $instance;

        return $this;
    }

    /**
     * Get instances
     *
     * @return Collection
     */
    public function getInstances()
    {
        return $this->instances;
    }

    /**
     * Set locale
     *
     * @param  string $locale
     * @return Attribute
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;

        return $this;
    }

    /**
     * Get the class of this type's instances
     * 
     * @abstract
     * @return   string
     */
    abstract public function getInstanceClass();
}
