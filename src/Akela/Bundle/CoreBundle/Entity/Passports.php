<?php

namespace Akela\Bundle\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Passports
 *
 * @ORM\Table(name="passports")
 * @ORM\Entity
 */
class Passports
{
    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="passport_number", type="string", length=255, nullable=false)
     */
    private $passportNumber;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="passport_issue_date", type="date", nullable=false)
     */
    private $passportIssueDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="passport_expiry_date", type="date", nullable=false)
     */
    private $passportExpiryDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="passport_issuing_authority", type="integer", nullable=false)
     */
    private $passportIssuingAuthority;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return Passports
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set passportNumber
     *
     * @param string $passportNumber
     *
     * @return Passports
     */
    public function setPassportNumber($passportNumber)
    {
        $this->passportNumber = $passportNumber;

        return $this;
    }

    /**
     * Get passportNumber
     *
     * @return string
     */
    public function getPassportNumber()
    {
        return $this->passportNumber;
    }

    /**
     * Set passportIssueDate
     *
     * @param \DateTime $passportIssueDate
     *
     * @return Passports
     */
    public function setPassportIssueDate($passportIssueDate)
    {
        $this->passportIssueDate = $passportIssueDate;

        return $this;
    }

    /**
     * Get passportIssueDate
     *
     * @return \DateTime
     */
    public function getPassportIssueDate()
    {
        return $this->passportIssueDate;
    }

    /**
     * Set passportExpiryDate
     *
     * @param \DateTime $passportExpiryDate
     *
     * @return Passports
     */
    public function setPassportExpiryDate($passportExpiryDate)
    {
        $this->passportExpiryDate = $passportExpiryDate;

        return $this;
    }

    /**
     * Get passportExpiryDate
     *
     * @return \DateTime
     */
    public function getPassportExpiryDate()
    {
        return $this->passportExpiryDate;
    }

    /**
     * Set passportIssuingAuthority
     *
     * @param integer $passportIssuingAuthority
     *
     * @return Passports
     */
    public function setPassportIssuingAuthority($passportIssuingAuthority)
    {
        $this->passportIssuingAuthority = $passportIssuingAuthority;

        return $this;
    }

    /**
     * Get passportIssuingAuthority
     *
     * @return integer
     */
    public function getPassportIssuingAuthority()
    {
        return $this->passportIssuingAuthority;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Passports
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Passports
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
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
}
