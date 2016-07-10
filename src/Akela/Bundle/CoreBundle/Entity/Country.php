<?php

namespace Akela\Bundle\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Country
 *
 * @ORM\Table(name="country")
 * @ORM\Entity(repositoryClass="Akela\Bundle\CoreBundle\Repository\CountryRepository")
 */
class Country
{
    /**
     * @var string
     *
     * @ORM\Column(name="iso", type="string", length=255, nullable=false)
     */
    private $iso;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="nicename", type="string", length=255, nullable=false)
     */
    private $niceName;

    /**
     * @var string
     *
     * @ORM\Column(name="iso3", type="string", length=255, nullable=true)
     */
    private $iso3;

    /**
     * @var integer
     *
     * @ORM\Column(name="numcode", type="integer", nullable=true)
     */
    private $numcode;

    /**
     * @var integer
     *
     * @ORM\Column(name="phonecode", type="integer", nullable=true)
     */
    private $phonecode;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set iso
     *
     * @param string $iso
     *
     * @return Countries
     */
    public function setIso($iso)
    {
        $this->iso = $iso;

        return $this;
    }

    /**
     * Get iso
     *
     * @return string
     */
    public function getIso()
    {
        return $this->iso;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Countries
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set niceName
     *
     * @param string $niceName
     *
     * @return Countries
     */
    public function setNiceName($niceName)
    {
        $this->niceName = $niceName;

        return $this;
    }

    /**
     * Get niceName
     *
     * @return string
     */
    public function getNiceName()
    {
        return $this->niceName;
    }

    /**
     * Set iso3
     *
     * @param string $iso3
     *
     * @return Countries
     */
    public function setIso3($iso3)
    {
        $this->iso3 = $iso3;

        return $this;
    }

    /**
     * Get iso3
     *
     * @return string
     */
    public function getIso3()
    {
        return $this->iso3;
    }

    /**
     * Set numcode
     *
     * @param integer $numcode
     *
     * @return Countries
     */
    public function setNumcode($numcode)
    {
        $this->numcode = $numcode;

        return $this;
    }

    /**
     * Get numcode
     *
     * @return integer
     */
    public function getNumcode()
    {
        return $this->numcode;
    }

    /**
     * Set phonecode
     *
     * @param integer $phonecode
     *
     * @return Countries
     */
    public function setPhonecode($phonecode)
    {
        $this->phonecode = $phonecode;

        return $this;
    }

    /**
     * Get phonecode
     *
     * @return integer
     */
    public function getPhonecode()
    {
        return $this->phonecode;
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
