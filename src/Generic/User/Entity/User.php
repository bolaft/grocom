<?php
/*
 * This file is part of the Grocom package.
 *
 * (c) 2012 grocom
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Generic\User\Entity;

use FOS\UserBundle\Entity\User as FOSUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @author Soufian Antoine SALIM <soufi@nsal.im>
 * 
 * @ORM\Entity
 * @ORM\Table(name="generic_user_user")
 */
class User extends FOSUser
{
    /**
     * @var int
     * 
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @var ArrayCollection
     * 
     * @ORM\ManyToMany(targetEntity="Grocom\Order\Entity\Order", mappedBy="users")
     */
    protected $orders;

    /**
     * Constructor
     */
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