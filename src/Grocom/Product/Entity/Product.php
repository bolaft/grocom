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
     * @var ArrayCollection
     * 
     * @ORM\ManyToMany(targetEntity="Grocom\Product\Entity\Make", mappedBy="products")
     */
    protected $makes;
    
    /**
     * @var ArrayCollection
     * 
     * @ORM\ManyToMany(targetEntity="Grocom\Product\Entity\Make", mappedBy="products")
     */
    protected $models;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->orders = new \Doctrine\Common\Collections\ArrayCollection();
        $this->makes  = new \Doctrine\Common\Collections\ArrayCollection();
        $this->models = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Product
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
     * @return Product
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
     * @return Product
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

    /**
     * Set makes
     *
     * @param  array $makes
     * @return Product
     */
    public function setMakes(array $makes)
    {
        foreach ($makes as $make) {
            $this->addMake($make);
        }

        return $this;
    }

    /**
     * Add make
     *
     * @param  Make $make
     * @return Product
     */
    public function addMake(Make $make)
    {
        $this->makes[] = $make;

        return $this;
    }

    /**
     * Remove make
     *
     * @param  Make $make
     * @return Product
     */
    public function removeMake(Make $make)
    {
        $this->makes->removeElement($make);

        return $this;
    }

    /**
     * Get makes
     *
     * @return Doctrine\Common\Collections\Collection
     */
    public function getMakes()
    {
        return $this->makes;
    }

    /**
     * Set models
     *
     * @param  array $models
     * @return Product
     */
    public function setModels(array $models)
    {
        foreach ($models as $model) {
            $this->addModel($model);
        }

        return $this;
    }

    /**
     * Add model
     *
     * @param  Model $model
     * @return Product
     */
    public function addModel(Model $model)
    {
        $this->models[] = $model;

        return $this;
    }

    /**
     * Remove model
     *
     * @param  Model $model
     * @return Product
     */
    public function removeModel(Model $model)
    {
        $this->models->removeElement($model);

        return $this;
    }

    /**
     * Get models
     *
     * @return Doctrine\Common\Collections\Collection
     */
    public function getModels()
    {
        return $this->models;
    }
}
