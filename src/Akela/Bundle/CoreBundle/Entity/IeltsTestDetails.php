<?php

namespace Akela\Bundle\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IeltsTestDetails
 *
 * @ORM\Table(name="ielts_test_details")
 * @ORM\Entity
 */
class IeltsTestDetails
{
    /**
     * @var integer
     *
     * @ORM\Column(name="profile_id", type="integer", nullable=false)
     */
    private $profileId;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=255, nullable=false)
     */
    private $country;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="test_date", type="date", nullable=false)
     */
    private $testDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="test_report_no", type="integer", nullable=false)
     */
    private $testReportNo;

    /**
     * @var float
     *
     * @ORM\Column(name="overall_score", type="float", precision=10, scale=0, nullable=false)
     */
    private $overallScore;

    /**
     * @var float
     *
     * @ORM\Column(name="listening", type="float", precision=10, scale=0, nullable=false)
     */
    private $listening;

    /**
     * @var float
     *
     * @ORM\Column(name="reading", type="float", precision=10, scale=0, nullable=false)
     */
    private $reading;

    /**
     * @var float
     *
     * @ORM\Column(name="writing", type="float", precision=10, scale=0, nullable=false)
     */
    private $writing;

    /**
     * @var float
     *
     * @ORM\Column(name="speaking", type="float", precision=10, scale=0, nullable=false)
     */
    private $speaking;

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
     * Set profileId
     *
     * @param integer $profileId
     *
     * @return IeltsTestDetails
     */
    public function setProfileId($profileId)
    {
        $this->profileId = $profileId;

        return $this;
    }

    /**
     * Get profileId
     *
     * @return integer
     */
    public function getProfileId()
    {
        return $this->profileId;
    }

    /**
     * Set country
     *
     * @param string $country
     *
     * @return IeltsTestDetails
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set testDate
     *
     * @param \DateTime $testDate
     *
     * @return IeltsTestDetails
     */
    public function setTestDate($testDate)
    {
        $this->testDate = $testDate;

        return $this;
    }

    /**
     * Get testDate
     *
     * @return \DateTime
     */
    public function getTestDate()
    {
        return $this->testDate;
    }

    /**
     * Set testReportNo
     *
     * @param integer $testReportNo
     *
     * @return IeltsTestDetails
     */
    public function setTestReportNo($testReportNo)
    {
        $this->testReportNo = $testReportNo;

        return $this;
    }

    /**
     * Get testReportNo
     *
     * @return integer
     */
    public function getTestReportNo()
    {
        return $this->testReportNo;
    }

    /**
     * Set overallScore
     *
     * @param float $overallScore
     *
     * @return IeltsTestDetails
     */
    public function setOverallScore($overallScore)
    {
        $this->overallScore = $overallScore;

        return $this;
    }

    /**
     * Get overallScore
     *
     * @return float
     */
    public function getOverallScore()
    {
        return $this->overallScore;
    }

    /**
     * Set listening
     *
     * @param float $listening
     *
     * @return IeltsTestDetails
     */
    public function setListening($listening)
    {
        $this->listening = $listening;

        return $this;
    }

    /**
     * Get listening
     *
     * @return float
     */
    public function getListening()
    {
        return $this->listening;
    }

    /**
     * Set reading
     *
     * @param float $reading
     *
     * @return IeltsTestDetails
     */
    public function setReading($reading)
    {
        $this->reading = $reading;

        return $this;
    }

    /**
     * Get reading
     *
     * @return float
     */
    public function getReading()
    {
        return $this->reading;
    }

    /**
     * Set writing
     *
     * @param float $writing
     *
     * @return IeltsTestDetails
     */
    public function setWriting($writing)
    {
        $this->writing = $writing;

        return $this;
    }

    /**
     * Get writing
     *
     * @return float
     */
    public function getWriting()
    {
        return $this->writing;
    }

    /**
     * Set speaking
     *
     * @param float $speaking
     *
     * @return IeltsTestDetails
     */
    public function setSpeaking($speaking)
    {
        $this->speaking = $speaking;

        return $this;
    }

    /**
     * Get speaking
     *
     * @return float
     */
    public function getSpeaking()
    {
        return $this->speaking;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return IeltsTestDetails
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
     * @return IeltsTestDetails
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
