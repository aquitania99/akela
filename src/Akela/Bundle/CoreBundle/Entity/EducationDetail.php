<?php

namespace Akela\Bundle\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EducationDetail
 *
 * @ORM\Table(name="education_detail")
 * @ORM\Entity
 */
class EducationDetail
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



    /**
     * Set countryId
     *
     * @param integer $countryId
     *
     * @return EducationDetails
     */
    public function setCountryId($countryId)
    {
        $this->countryId = $countryId;

        return $this;
    }

    /**
     * Get countryId
     *
     * @return integer
     */
    public function getCountryId()
    {
        return $this->countryId;
    }

    /**
     * Set studyType
     *
     * @param string $studyType
     *
     * @return EducationDetails
     */
    public function setStudyType($studyType)
    {
        $this->studyType = $studyType;

        return $this;
    }

    /**
     * Get studyType
     *
     * @return string
     */
    public function getStudyType()
    {
        return $this->studyType;
    }

    /**
     * Set studyName
     *
     * @param string $studyName
     *
     * @return EducationDetails
     */
    public function setStudyName($studyName)
    {
        $this->studyName = $studyName;

        return $this;
    }

    /**
     * Get studyName
     *
     * @return string
     */
    public function getStudyName()
    {
        return $this->studyName;
    }

    /**
     * Set fromMonth
     *
     * @param integer $fromMonth
     *
     * @return EducationDetails
     */
    public function setFromMonth($fromMonth)
    {
        $this->fromMonth = $fromMonth;

        return $this;
    }

    /**
     * Get fromMonth
     *
     * @return integer
     */
    public function getFromMonth()
    {
        return $this->fromMonth;
    }

    /**
     * Set fromYear
     *
     * @param integer $fromYear
     *
     * @return EducationDetails
     */
    public function setFromYear($fromYear)
    {
        $this->fromYear = $fromYear;

        return $this;
    }

    /**
     * Get fromYear
     *
     * @return integer
     */
    public function getFromYear()
    {
        return $this->fromYear;
    }

    /**
     * Set toMonth
     *
     * @param integer $toMonth
     *
     * @return EducationDetails
     */
    public function setToMonth($toMonth)
    {
        $this->toMonth = $toMonth;

        return $this;
    }

    /**
     * Get toMonth
     *
     * @return integer
     */
    public function getToMonth()
    {
        return $this->toMonth;
    }

    /**
     * Set toYear
     *
     * @param integer $toYear
     *
     * @return EducationDetails
     */
    public function setToYear($toYear)
    {
        $this->toYear = $toYear;

        return $this;
    }

    /**
     * Get toYear
     *
     * @return integer
     */
    public function getToYear()
    {
        return $this->toYear;
    }

    /**
     * Set degreeAwarded
     *
     * @param string $degreeAwarded
     *
     * @return EducationDetails
     */
    public function setDegreeAwarded($degreeAwarded)
    {
        $this->degreeAwarded = $degreeAwarded;

        return $this;
    }

    /**
     * Get degreeAwarded
     *
     * @return string
     */
    public function getDegreeAwarded()
    {
        return $this->degreeAwarded;
    }

    /**
     * Set educationLanguage
     *
     * @param string $educationLanguage
     *
     * @return EducationDetails
     */
    public function setEducationLanguage($educationLanguage)
    {
        $this->educationLanguage = $educationLanguage;

        return $this;
    }

    /**
     * Get educationLanguage
     *
     * @return string
     */
    public function getEducationLanguage()
    {
        return $this->educationLanguage;
    }

    /**
     * Set institutionName
     *
     * @param string $institutionName
     *
     * @return EducationDetails
     */
    public function setInstitutionName($institutionName)
    {
        $this->institutionName = $institutionName;

        return $this;
    }

    /**
     * Get institutionName
     *
     * @return string
     */
    public function getInstitutionName()
    {
        return $this->institutionName;
    }

    /**
     * Set institutionAddress
     *
     * @param string $institutionAddress
     *
     * @return EducationDetails
     */
    public function setInstitutionAddress($institutionAddress)
    {
        $this->institutionAddress = $institutionAddress;

        return $this;
    }

    /**
     * Get institutionAddress
     *
     * @return string
     */
    public function getInstitutionAddress()
    {
        return $this->institutionAddress;
    }

    /**
     * Set institutionUrl
     *
     * @param string $institutionUrl
     *
     * @return EducationDetails
     */
    public function setInstitutionUrl($institutionUrl)
    {
        $this->institutionUrl = $institutionUrl;

        return $this;
    }

    /**
     * Get institutionUrl
     *
     * @return string
     */
    public function getInstitutionUrl()
    {
        return $this->institutionUrl;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return EducationDetails
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
     * @return EducationDetails
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
