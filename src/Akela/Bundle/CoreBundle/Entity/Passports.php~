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


}

