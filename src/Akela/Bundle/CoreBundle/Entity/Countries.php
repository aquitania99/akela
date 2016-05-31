<?php

namespace Akela\Bundle\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Countries
 *
 * @ORM\Table(name="countries")
 * @ORM\Entity
 */
class Countries
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
     * @ORM\Column(name="nice_name", type="string", length=255, nullable=false)
     */
    private $niceName;

    /**
     * @var string
     *
     * @ORM\Column(name="iso3", type="string", length=255, nullable=false)
     */
    private $iso3;

    /**
     * @var integer
     *
     * @ORM\Column(name="numcode", type="integer", nullable=false)
     */
    private $numcode;

    /**
     * @var integer
     *
     * @ORM\Column(name="phonecode", type="integer", nullable=false)
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


}

