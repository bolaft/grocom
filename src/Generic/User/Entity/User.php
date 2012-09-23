<?php

namespace Generic\User\Entity;

use FOS\UserBundle\Entity\User as FOSUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="generic_user_user")
 */
class User extends FOSUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\ManyToMany(targetEntity="Grocom\Order\Entity\Order", mappedBy="users")
     */
    protected $orders;

    public function __construct()
    {
        parent::__construct();

        $this->orders = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set orders
     *
     * @param  array $orders
     * @return \Generic\User\Entity\User
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
     * @return \Generic\User\Entity\User
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
     * @return \Generic\User\Entity\User
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