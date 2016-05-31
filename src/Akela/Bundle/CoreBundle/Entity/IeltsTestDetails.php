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


}

