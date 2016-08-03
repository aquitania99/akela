<?php
/**
 * @package    AkelaApp
 *
 * @copyright  Copyright (C) 2016 Akela Solutions Pty Ltd.  All Rights Reserved
 * @License    PROPRIETARY
 */

namespace Akela\Bundle\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Profile
 *
 * @package Akela\Bundle\CoreBundle\Entity
 * @ORM\Entity
 * @ORM\Table(name="profile")
 */
class Profile
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="mobile", type="integer", nullable=false)
     */
    private $mobile;

    /**
     * @var string
     *
     * @ORM\Column(name="gender", type="string", length=2, nullable=false)
     */
    private $gender;

    /**
     * @var string
     *
     * @ORM\Column(name="nationality", type="string", length=255, nullable=true)
     */
    private $nationality;

    /**
     * var string
     *
     * @ORM\Column(name="passport", type="string", nullable=false)
     *
     */
    private $passport;

    /**
     * @var string
     *
     * @ORM\Column(name="language", type="string", length=255, nullable=true)
     */
    private $language;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dob", type="date", nullable=true)
     */
    private $dob;

    /**
     * @var string
     *
     * @ORM\Column(name="birth_country", type="string", length=255, nullable=true)
     */
    private $birthCountry;

    /**
     * @var string
     *
     * @ORM\Column(name="birth_city", type="string", length=255, nullable=true)
     */
    private $birthCity;

    /**
     * @var integer
     *
     * @ORM\Column(name="counsellor_id", type="integer", nullable=true)
     */
    private $counsellor;

    /**
     * @ORM\ManyToOne(targetEntity="Office")
     * @ORM\JoinColumn(nullable=true)
     */
    private $office;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Users
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * @return mixed
     */
    public function getCounsellor()
    {
        return $this->counsellor;
    }

    /**
     * @param mixed $counsellor
     */
    public function setCounsellor($counsellor)
    {
        $this->counsellor = $counsellor;
    }
    /**
     * Set mobile
     *
     * @param integer $mobile
     *
     * @return $this
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * Get mobile
     *
     * @return integer
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Set gender
     *
     * @param string $gender
     *
     * @return $this
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set nationality
     *
     * @param string $nationality
     *
     * @return $this
     */
    public function setNationality($nationality)
    {
        $this->nationality = $nationality;

        return $this;
    }

    /**
     * Get nationality
     *
     * @return string
     */
    public function getNationality()
    {
        return $this->nationality;
    }

    /**
     * Set dob
     *
     * @param \DateTime $dob
     *
     * @return $this
     */
    public function setDob($dob)
    {
        $this->dob = $dob;

        return $this;
    }

    /**
     * Get dob
     *
     * @return \DateTime
     */
    public function getDob()
    {
        return $this->dob;
    }

    /**
     * Set birthCountry
     *
     * @param string $birthCountry
     *
     * @return $this
     */
    public function setBirthCountry($birthCountry)
    {
        $this->birthCountry = $birthCountry;

        return $this;
    }

    /**
     * Get birthCountry
     *
     * @return string
     */
    public function getBirthCountry()
    {
        return $this->birthCountry;
    }

    /**
     * Set birthCity
     *
     * @param string $birthCity
     *
     * @return $this
     */
    public function setBirthCity($birthCity)
    {
        $this->birthCity = $birthCity;

        return $this;
    }

    /**
     * Get birthCity
     *
     * @return string
     */
    public function getBirthCity()
    {
        return $this->birthCity;
    }
    /**
     * @return mixed
     */
    public function getOffice()
    {
        return $this->office;
    }

    /**
     * @param mixed $office
     */
    public function setOffice(Office $office)
    {
        $this->office = $office;
    }

    /**
     * Set language
     *
     * @param string $language
     *
     * @return string
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @return mixed
     */
    public function getPassport()
    {
        return $this->passport;
    }

    /**
     * @param mixed $passport
     */
    public function setPassport($passport)
    {
        $this->passport = $passport;
    }
}