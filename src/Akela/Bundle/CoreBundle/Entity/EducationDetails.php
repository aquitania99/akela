<?php

namespace Akela\Bundle\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EducationDetails
 *
 * @ORM\Table(name="education_details")
 * @ORM\Entity
 */
class EducationDetails
{
    /**
     * @var integer
     *
     * @ORM\Column(name="country_id", type="integer", nullable=false)
     */
    private $countryId;

    /**
     * @var string
     *
     * @ORM\Column(name="study_type", type="string", length=255, nullable=false)
     */
    private $studyType;

    /**
     * @var string
     *
     * @ORM\Column(name="study_name", type="string", length=255, nullable=false)
     */
    private $studyName;

    /**
     * @var integer
     *
     * @ORM\Column(name="from_month", type="integer", nullable=false)
     */
    private $fromMonth;

    /**
     * @var integer
     *
     * @ORM\Column(name="from_year", type="integer", nullable=false)
     */
    private $fromYear;

    /**
     * @var integer
     *
     * @ORM\Column(name="to_month", type="integer", nullable=false)
     */
    private $toMonth;

    /**
     * @var integer
     *
     * @ORM\Column(name="to_year", type="integer", nullable=false)
     */
    private $toYear;

    /**
     * @var string
     *
     * @ORM\Column(name="degree_awarded", type="string", length=255, nullable=false)
     */
    private $degreeAwarded;

    /**
     * @var string
     *
     * @ORM\Column(name="education_language", type="string", length=255, nullable=false)
     */
    private $educationLanguage;

    /**
     * @var string
     *
     * @ORM\Column(name="institution_name", type="string", length=255, nullable=false)
     */
    private $institutionName;

    /**
     * @var string
     *
     * @ORM\Column(name="institution_address", type="string", length=255, nullable=false)
     */
    private $institutionAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="institution_url", type="string", length=255, nullable=false)
     */
    private $institutionUrl;

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

