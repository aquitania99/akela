<?php
/**
 * @package    AkelaApp
 *
 * @copyright  Copyright (C) 2016 Akela Solutions Pty Ltd.  All Rights Reserved
 * @License    PROPRIETARY
 */

namespace Akela\Bundle\CoreBundle\DataFixtures;

use Akela\Bundle\CoreBundle\Entity\User;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use \Nelmio\Alice\Fixtures;

class LoadFixtures implements FixtureInterface, ContainerAwareInterface
{
    private $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager)
    {
        Fixtures::load(
            [
                __DIR__.'/fixtures.yml'
            ],
            $manager,
            [
                'providers' => [$this],
                'locale' => 'en_AU'
            ]
        );
    }

    public function getOrder()
    {
        return 1; // number in which order to load fixtures
    }

    public function created()
    {
        $now = new \DateTime();

        return $now;
    }

    public function officeCity()
    {
        $package = [
            'Sydney',
            'Brisbane',
            'Melbourne',
            'Bogota'
        ];

        $key = array_rand($package);
        return $package[$key];
    }

    public function language()
    {
        $language = [
            'Spanish',
            'Portuguese',
            'English',
            'Russian'
        ];

        $key = array_rand($language);
        return $language[$key];
    }

//    public function password($userPassword)
//    {
//        $user = new User();
//        $user->getUsername();
//        $user->getSalt();
//        $encoder = $this->container->get('security.password_encoder');
//        $password = $encoder->encodePassword( $user, $userPassword );
//        return $password;
//    }
}