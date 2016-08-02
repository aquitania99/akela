<?php

namespace Akela\Bundle\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Payment
 *
 * @ORM\Table(name="payment")
 * @ORM\Entity(repositoryClass="Akela\Bundle\CoreBundle\Repository\PaymentRepository")
 */
class Payment
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
     * @var int
     *
     * @ORM\Column(name="receiptNumber", type="integer")
     */
    private $receiptNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="orderItem", type="string", length=255)
     */
    private $orderItem;

    /**
     * @var string
     *
     * @ORM\Column(name="instalment", type="string", length=255)
     */
    private $instalment;

    /**
     * @var float
     *
     * @ORM\Column(name="amountDue", type="float")
     */
    private $amountDue;

    /**
     * @var string
     *
     * @ORM\Column(name="amountPaid", type="string", length=255)
     */
    private $amountPaid;

    /**
     * @var string
     *
     * @ORM\Column(name="amountOustanding", type="string", length=255)
     */
    private $amountOustanding;

    /**
     * @var string
     *
     * @ORM\Column(name="paymentComments", type="text")
     */
    private $paymentComments;

    /**
     * @var string
     *
     * @ORM\Column(name="receivedBy", type="string", length=255)
     */
    private $receivedBy;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="paidDate", type="datetime")
     */
    private $paidDate;


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
     * @return Payment
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
     * Set receiptNumber
     *
     * @param integer $receiptNumber
     *
     * @return Payment
     */
    public function setReceiptNumber($receiptNumber)
    {
        $this->receiptNumber = $receiptNumber;

        return $this;
    }

    /**
     * Get receiptNumber
     *
     * @return int
     */
    public function getReceiptNumber()
    {
        return $this->receiptNumber;
    }

    /**
     * Set orderItem
     *
     * @param string $orderItem
     *
     * @return Payment
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
     * Set instalment
     *
     * @param string $instalment
     *
     * @return Payment
     */
    public function setInstalment($instalment)
    {
        $this->instalment = $instalment;

        return $this;
    }

    /**
     * Get instalment
     *
     * @return string
     */
    public function getInstalment()
    {
        return $this->instalment;
    }

    /**
     * Set amountDue
     *
     * @param float $amountDue
     *
     * @return Payment
     */
    public function setAmountDue($amountDue)
    {
        $this->amountDue = $amountDue;

        return $this;
    }

    /**
     * Get amountDue
     *
     * @return float
     */
    public function getAmountDue()
    {
        return $this->amountDue;
    }

    /**
     * Set amountPaid
     *
     * @param string $amountPaid
     *
     * @return Payment
     */
    public function setAmountPaid($amountPaid)
    {
        $this->amountPaid = $amountPaid;

        return $this;
    }

    /**
     * Get amountPaid
     *
     * @return string
     */
    public function getAmountPaid()
    {
        return $this->amountPaid;
    }

    /**
     * Set amountOustanding
     *
     * @param string $amountOustanding
     *
     * @return Payment
     */
    public function setAmountOustanding($amountOustanding)
    {
        $this->amountOustanding = $amountOustanding;

        return $this;
    }

    /**
     * Get amountOustanding
     *
     * @return string
     */
    public function getAmountOustanding()
    {
        return $this->amountOustanding;
    }

    /**
     * Set paymentComments
     *
     * @param string $paymentComments
     *
     * @return Payment
     */
    public function setPaymentComments($paymentComments)
    {
        $this->paymentComments = $paymentComments;

        return $this;
    }

    /**
     * Get paymentComments
     *
     * @return string
     */
    public function getPaymentComments()
    {
        return $this->paymentComments;
    }

    /**
     * Set receivedBy
     *
     * @param string $receivedBy
     *
     * @return Payment
     */
    public function setReceivedBy($receivedBy)
    {
        $this->receivedBy = $receivedBy;

        return $this;
    }

    /**
     * Get receivedBy
     *
     * @return string
     */
    public function getReceivedBy()
    {
        return $this->receivedBy;
    }

    /**
     * Set paidDate
     *
     * @param \DateTime $paidDate
     *
     * @return Payment
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
}

