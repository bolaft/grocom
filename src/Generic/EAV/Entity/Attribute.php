<?php

namespace Generic\EAV\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @author Soufian Salim <soufi@nsal.im>
 * 
 * @Gedmo\TranslationEntity(class="Generic\EAV\Entity\Translation")
 * @ORM\Entity
 * @ORM\Table(name="generic_eav_attribute")
 */
class Attribute
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
     * @ORM\Column(type="string", length=255, unique=true)
     */
    protected $name;

    /**
     * @var Type
     * 
     * @ORM\ManyToOne(targetEntity="Generic\EAV\Entity\Type", inversedBy="attributes")
     */
    protected $type;

    /**
     * @var ArrayCollection
     * 
     * @ORM\OneToMany(targetEntity="Generic\EAV\Entity\Value\Value", mappedBy="attribute")
     */
    protected $values;


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
        $this->values = new ArrayCollection();
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
     * @return Attribute
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
     * Set type
     *
     * @param  Generic\EAV\Entity\Type $type
     * @return Attribute
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
     * Add value
     *
     * @param  Generic\EAV\Entity\Value\Value $value
     * @return Attribute
     */
    public function addValue(\Generic\EAV\Entity\Value\Value $value)
    {
        $this->values[] = $value;

        return $this;
    }

    /**
     * Get values
     *
     * @return Doctrine\Common\Collections\Collection
     */
    public function getValues()
    {
        return $this->values;
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
}
