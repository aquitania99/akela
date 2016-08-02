<?php

namespace Akela\Bundle\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Instalments
 *
 * @ORM\Table(name="instalments")
 * @ORM\Entity(repositoryClass="Akela\Bundle\CoreBundle\Repository\InstalmentsRepository")
 */
class Instalments
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="user", type="integer")
     */
    private $user;

    /**
     * @var string
     *
     * @ORM\Column(name="orderId", type="string", length=255)
     */
    private $orderId;

    /**
     * @var string
     *
     * @ORM\Column(name="orderItem", type="string", length=255)
     */
    private $orderItem;

    /**
     * @var float
     *
     * @ORM\Column(name="total", type="float")
     */
    private $total;

    /**
     * @var float
     *
     * @ORM\Column(name="addons", type="float")
     */
    private $addons;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dueDate", type="datetime")
     */
    private $dueDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="paidDate", type="datetime")
     */
    private $paidDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime")
     */
    private $created;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated", type="datetime")
     */
    private $updated;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set user
     *
     * @param integer $user
     *
     * @return Instalments
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return int
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set orderId
     *
     * @param string $orderId
     *
     * @return Instalments
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;

        return $this;
    }

    /**
     * Get orderId
     *
     * @return string
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * Set orderItem
     *
     * @param string $orderItem
     *
     * @return Instalments
     */
    public function setOrderItem($orderItem)
    {
        $this->orderItem = $orderItem;

        return $this;
    }

    /**
     * Get orderItem
     *
     * @return string
     */
    public function getOrderItem()
    {
        return $this->orderItem;
    }

    /**
     * Set total
     *
     * @param float $total
     *
     * @return Instalments
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total
     *
     * @return float
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Set addons
     *
     * @param float $addons
     *
     * @return Instalments
     */
    public function setAddons($addons)
    {
        $this->addons = $addons;

        return $this;
    }

    /**
     * Get addons
     *
     * @return float
     */
    public function getAddons()
    {
        return $this->addons;
    }

    /**
     * Set dueDate
     *
     * @param \DateTime $dueDate
     *
     * @return Instalments
     */
    public function setDueDate($dueDate)
    {
        $this->dueDate = $dueDate;

        return $this;
    }

    /**
     * Get dueDate
     *
     * @return \DateTime
     */
    public function getDueDate()
    {
        return $this->dueDate;
    }

    /**
     * Set paidDate
     *
     * @param \DateTime $paidDate
     *
     * @return Instalments
     */
    public function setPaidDate($paidDate)
    {
        $this->paidDate = $paidDate;

        return $this;
    }

    /**
     * Get paidDate
     *
     * @return \DateTime
     */
    public function getPaidDate()
    {
        return $this->paidDate;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return Instalments
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set updated
     *
     * @param \DateTime $updated
     *
     * @return Instalments
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated
     *
     * @return \DateTime
     */
    public function getUpdated()
    {
        return $this->updated;
    }
}

