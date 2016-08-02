<?php

namespace Akela\Bundle\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Invoice
 *
 * @ORM\Table(name="invoice")
 * @ORM\Entity(repositoryClass="Akela\Bundle\CoreBundle\Repository\InvoiceRepository")
 */
class Invoice
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
     * @var string
     *
     * @ORM\Column(name="user", type="string", length=255)
     */
    private $user;

    /**
     * @var string
     *
     * @ORM\Column(name="provider", type="string", length=255)
     */
    private $provider;

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
     * @var string
     *
     * @ORM\Column(name="paymentFee", type="string", length=255)
     */
    private $paymentFee;

    /**
     * @var float
     *
     * @ORM\Column(name="commissionRate", type="float")
     */
    private $commissionRate;

    /**
     * @var float
     *
     * @ORM\Column(name="commissionTotal", type="float")
     */
    private $commissionTotal;

    /**
     * @var float
     *
     * @ORM\Column(name="comissionGst", type="float")
     */
    private $comissionGst;

    /**
     * @var float
     *
     * @ORM\Column(name="commissionGstIncluded", type="float")
     */
    private $commissionGstIncluded;

    /**
     * @ORM\Column(name="invoice_number", type="string")
     */
    private $invoiceNumber;

    /**
     * @ORM\Column(name="commission_deducted", type="boolean")
     */
    private $commissionDeducted;

    /**
     * @ORM\Column(type="string")
     */
    private $marketingIncentive;

    /**
     * @ORM\Column(name="total_incetive", type="float")
     */
    private $totalIncetive;

    /**
     * @ORM\Column(name="created", type="datetime")
     */
    private $created;

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
     * @param string $user
     *
     * @return Invoice
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set provider
     *
     * @param string $provider
     *
     * @return Invoice
     */
    public function setProvider($provider)
    {
        $this->provider = $provider;

        return $this;
    }

    /**
     * Get provider
     *
     * @return string
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * Set orderId
     *
     * @param string $orderId
     *
     * @return Invoice
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
     * @return Invoice
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
     * Set paymentFee
     *
     * @param string $paymentFee
     *
     * @return Invoice
     */
    public function setPaymentFee($paymentFee)
    {
        $this->paymentFee = $paymentFee;

        return $this;
    }

    /**
     * Get paymentFee
     *
     * @return string
     */
    public function getPaymentFee()
    {
        return $this->paymentFee;
    }

    /**
     * Set commissionRate
     *
     * @param float $commissionRate
     *
     * @return Invoice
     */
    public function setCommissionRate($commissionRate)
    {
        $this->commissionRate = $commissionRate;

        return $this;
    }

    /**
     * Get commissionRate
     *
     * @return float
     */
    public function getCommissionRate()
    {
        return $this->commissionRate;
    }

    /**
     * Set commissionTotal
     *
     * @param float $commissionTotal
     *
     * @return Invoice
     */
    public function setCommissionTotal($commissionTotal)
    {
        $this->commissionTotal = $commissionTotal;

        return $this;
    }

    /**
     * Get commissionTotal
     *
     * @return float
     */
    public function getCommissionTotal()
    {
        return $this->commissionTotal;
    }

    /**
     * Set comissionGst
     *
     * @param float $comissionGst
     *
     * @return Invoice
     */
    public function setComissionGst($comissionGst)
    {
        $this->comissionGst = $comissionGst;

        return $this;
    }

    /**
     * Get comissionGst
     *
     * @return float
     */
    public function getComissionGst()
    {
        return $this->comissionGst;
    }

    /**
     * Set commissionGstIncluded
     *
     * @param float $commissionGstIncluded
     *
     * @return Invoice
     */
    public function setCommissionGstIncluded($commissionGstIncluded)
    {
        $this->commissionGstIncluded = $commissionGstIncluded;

        return $this;
    }

    /**
     * Get commissionGstIncluded
     *
     * @return float
     */
    public function getCommissionGstIncluded()
    {
        return $this->commissionGstIncluded;
    }

    /**
     * @return mixed
     */
    public function getInvoiceNumber()
    {
        return $this->invoiceNumber;
    }

    /**
     * @param mixed $invoiceNumber
     */
    public function setInvoiceNumber($invoiceNumber)
    {
        $this->invoiceNumber = $invoiceNumber;
    }

    /**
     * @return mixed
     */
    public function getCommissionDeducted()
    {
        return $this->commissionDeducted;
    }

    /**
     * @param mixed $commissionDeducted
     */
    public function setCommissionDeducted($commissionDeducted)
    {
        $this->commissionDeducted = $commissionDeducted;
    }

    /**
     * @return mixed
     */
    public function getMarketingIncentive()
    {
        return $this->marketingIncentive;
    }

    /**
     * @param mixed $marketingIncentive
     */
    public function setMarketingIncentive($marketingIncentive)
    {
        $this->marketingIncentive = $marketingIncentive;
    }

    /**
     * @return mixed
     */
    public function getTotalIncetive()
    {
        return $this->totalIncetive;
    }

    /**
     * @param mixed $totalIncetive
     */
    public function setTotalIncetive($totalIncetive)
    {
        $this->totalIncetive = $totalIncetive;
    }

    /**
     * @return mixed
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param mixed $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }
}

