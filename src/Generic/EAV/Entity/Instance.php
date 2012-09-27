<?php

namespace Generic\EAV\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Classe abstraite mappant les instances.
 *
 * @author   Soufian Salim <soufi@nsal.im>
 * @abstract
 * 
 * @ORM\Entity
 * @ORM\Table(name="generic_eav_instance")
 * @ORM\InheritanceType("JOINED")
 * @ORM\DiscriminatorColumn(name="discriminator", type="string")
 * @ORM\DiscriminatorMap({
 *      "product" = "Grocom\Product\Entity\Product",
 *      "order"   = "Grocom\Order\Entity\Order"
 * })
 */
abstract class InstanceAbstract
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
     * @var Type
     * 
     * @ORM\ManyToOne(targetEntity="Generic\EAV\Entity\TypeAbstract", inversedBy="instances")
     */
    protected $type;

    /**
     * @var ArrayCollection
     * 
     * @ORM\OneToMany(targetEntity="Generic\EAV\Entity\Value\Value", mappedBy="instance")
     */
    protected $values;

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
     * Set type
     *
     * @param  Generic\EAV\Entity\Type $type
     * @return Instance
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
     * @return Instance
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
}
