<?php

namespace Grocom\Product\Entity;

use Doctrine\ORM\Mapping as ORM;
use Generic\EAV\Entity\Instance;

/**
 * @author Soufian Antoine SALIM <soufi@nsal.im>
 * 
 * @ORM\Entity
 * @ORM\Table(name="grocom_product_product")
 */
class Product extends Instance
{
    /**
     * @var boolean
     * 
     * @ORM\Column(type="boolean")
     */
    protected $published = false;

    /**
     * @var string
     * 
     * @ORM\Column(type="text")
     */
    protected $description;

    /**
     * @var double
     * 
     * @ORM\Column(type="decimal")
     */
    protected $price;
    
    /**
     * @var ArrayCollection
     * 
     * @ORM\ManyToMany(targetEntity="Grocom\Order\Entity\Order", mappedBy="products")
     */
    protected $orders;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->orders = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set published
     *
     * @param  boolean $published
     * @return Product
     */
    public function setPublished($published)
    {
        $this->published = $published;

        return $this;
    }

    /**
     * Get published
     *
     * @return boolean
     */
    public function getPublished()
    {
        return $this->published;
    }
    
    /**
     * Set description
     *
     * @param  string $description
     * @return Product
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
    
    /**
     * Set price
     *
     * @param  double $price
     * @return Product
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return double
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set orders
     *
     * @param  array $orders
     * @return \Grocom\Product\Entity\Product
     */
    public function setOrders(array $orders)
    {
        foreach ($orders as $order) {
            $this->addOrder($order);
        }

        return $this;
    }

    /**
     * Add order
     *
     * @param  \Grocom\Order\Entity\Order $order
     * @return \Grocom\Product\Entity\Product
     */
    public function addOrder(\Grocom\Order\Entity\Order $order)
    {
        $this->orders[] = $order;

        return $this;
    }

    /**
     * Remove order
     *
     * @param  \Grocom\Order\Entity\Order $order
     * @return \Grocom\Product\Entity\Product
     */
    public function removeOrder(\Grocom\Order\Entity\Order $order)
    {
        $this->orders->removeElement($order);

        return $this;
    }

    /**
     * Get orders
     *
     * @return Doctrine\Common\Collections\Collection
     */
    public function getOrders()
    {
        return $this->orders;
    }
}
