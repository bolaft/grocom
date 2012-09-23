<?php

namespace Generic\EAV\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass="Generic\EAV\Repository\InstanceRepository")
 * @ORM\Table(name="generic_eav_instance")
 * @ORM\InheritanceType("JOINED")
 * @ORM\DiscriminatorColumn(name="instance_type", type="string")
 * @ORM\DiscriminatorMap({
 *      "product" = "Grocom\Product\Entity\Product",
 *      "order"   = "Grocom\Order\Entity\Order"
 * })
 */
class Instance
{
    private static $children = array(
        'Grocom\Product\Entity\Product' => 'Product',
        'Grocom\Order\Entity\Order'     => 'Order',
    );

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * The name of this instance
     *
     * @ORM\Column(type="string", length=100)
     */
    protected $name;

    /**
     * The type of this instance
     *
     * @ORM\ManyToOne(targetEntity="Generic\EAV\Entity\Type", inversedBy="instances")
     */
    protected $type;

    /**
     * The values of this instance
     *
     * @ORM\OneToMany(targetEntity="Generic\EAV\Entity\Value\Value", mappedBy="instance", cascade={"remove"})
     */
    protected $values;

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
     * @param  string   $name
     * @return Instance
     */
    public function setName($name = null)
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
     * @return Instance
     */
    public function setType(\Generic\EAV\Entity\Type $type = null)
    {
        $type->addInstance($this);
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

    public function addValue(\Generic\EAV\Entity\Value\Value $value = null)
    {
        $this->values[] = $value;

        return $this;
    }

    public function getValues()
    {
        return $this->values;
    }

    public static function children()
    {
        return self::$children;
    }
}
