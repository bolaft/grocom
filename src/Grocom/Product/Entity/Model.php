<?php

namespace Grocom\Product\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @author Soufian Antoine SALIM <soufi@nsal.im>
 * 
 * @ORM\Entity
 * @ORM\Table(name="grocom_product_model")
 */
class Model
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
     * @ORM\Column(type="string", length=50)
     */
    protected $name;

    /**
     * @var Make
     * 
     * @ORM\ManyToOne(targetEntity="Grocom\Product\Entity\Make", inversedBy="models")
     */
    protected $make;

    /**
     * @var ArrayCollection
     * 
     * @ORM\ManyToMany(targetEntity="Grocom\Product\Entity\Product", inversedBy="models")
     * @ORM\JoinTable(name="grocom_product_models_products")
     */
    protected $products;

    /**
     * Constructor
     */
    public function __construct()
    {
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
     * @return Model
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
     * Set make
     *
     * @param  Make $make
     * @return Instance
     */
    public function setMake(Make $make = null)
    {
        $this->make = $make;

        return $this;
    }

    /**
     * Get make
     *
     * @return Make
     */
    public function getMake()
    {
        return $this->make;
    }

    /**
     * Set products
     *
     * @param  array $products
     * @return Model
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
     * @return Model
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
     * @return Model
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
