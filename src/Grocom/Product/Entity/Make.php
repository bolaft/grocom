<?php

namespace Grocom\Product\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @author Soufian Antoine SALIM <soufi@nsal.im>
 * 
 * @ORM\Entity
 * @ORM\Table(name="grocom_product_make")
 */
class Make
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
     * @ORM\OneToMany(targetEntity="Grocom\Product\Entity\Model", mappedBy="make");
     */
    protected $models;

    /**
     * @var ArrayCollection
     * 
     * @ORM\ManyToMany(targetEntity="Grocom\Product\Entity\Product", inversedBy="makes")
     * @ORM\JoinTable(name="grocom_product_makes_products")
     */
    protected $products;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->models   = new \Doctrine\Common\Collections\ArrayCollection();
        $this->products = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Make
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
     * Set models
     *
     * @param  array $models
     * @return Make
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
     * @return Make
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
     * @return Make
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

    /**
     * Set products
     *
     * @param  array $products
     * @return Make
     */
    public function setProducts(array $products)
    {
        foreach ($products as $product) {
            $this->addProduct($product);
        }

        return $this;
    }

    /**
     * Add product
     *
     * @param  Product $product
     * @return Make
     */
    public function addProduct(Product $product)
    {
        $this->products[] = $product;

        return $this;
    }

    /**
     * Remove product
     *
     * @param  Product $product
     * @return Make
     */
    public function removeProduct(Product $product)
    {
        $this->products->removeElement($product);

        return $this;
    }

    /**
     * Get products
     *
     * @return Doctrine\Common\Collections\Collection
     */
    public function getProducts()
    {
        return $this->products;
    }
}
