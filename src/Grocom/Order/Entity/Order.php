<?php

namespace Grocom\Order\Entity;

use Doctrine\ORM\Mapping as ORM;
use Generic\EAV\Entity\Instance as BaseInstance;
use Doctrine\Common\Collections\ArrayCollection
/**
 * @author Soufian Antoine SALIM <soufi@nsal.im>
 * 
 * @ORM\Entity
 * @ORM\Table(name="grocom_order_order")
 */
class Order extends BaseInstance
{
    /**
     * @var ArrayCollection
     * 
     * @ORM\ManyToMany(targetEntity="Generic\User\Entity\User", inversedBy="orders")
     * @ORM\JoinTable(name="grocom_order_orders_users")
     */
    protected $users;

    /**
     * @var ArrayCollection
     * 
     * @ORM\ManyToMany(targetEntity="Grocom\Product\Entity\Product", inversedBy="orders")
     * @ORM\JoinTable(name="grocom_order_orders_products")
     */
    protected $products;

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();

		$this->users    = new ArrayCollection();
		$this->products = new ArrayCollection();
    }

    /**
     * Set users
     *
     * @param  array $users
     * @return \Grocom\Order\Entity\Order
     */
    public function setUsers(array $users)
    {
        foreach ($users as $user) {
            $this->addUser($user);
        }

        return $this;
    }

    /**
     * Add user
     *
     * @param  \Generic\User\Entity\User $user
     * @return \Grocom\Order\Entity\Order
     */
    public function addUser(\Generic\User\Entity\User $user)
    {
        $this->users[] = $user;

        return $this;
    }

    /**
     * Remove user
     *
     * @param  \Generic\User\Entity\User $user
     * @return \Grocom\Order\Entity\Order
     */
    public function removeUser(\Generic\User\Entity\User $user)
    {
        $this->users->removeElement($user);

        return $this;
    }

    /**
     * Get users
     *
     * @return Doctrine\Common\Collections\Collection
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * Set product
     *
     * @param  array $products
     * @return \Grocom\Product\Entity\Product
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
     * @param  \Generic\Product\Entity\Product $product
     * @return \Grocom\Order\Entity\Order
     */
    public function addProduct(\Generic\Product\Entity\Product $product)
    {
        $this->products[] = $product;

        return $this;
    }

    /**
     * Remove product
     *
     * @param  \Generic\Product\Entity\Product $product
     * @return \Grocom\Order\Entity\Order
     */
    public function removeProduct(\Generic\Product\Entity\Product $product)
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
