<?php
/**
 * @package    AkelaApp
 *
 * @copyright  Copyright (C) 2016 Akela Solutions Pty Ltd.  All Rights Reserved
 * @License    PROPRIETARY
 */

namespace Akela\Bundle\CoreBundle\DataFixtures;

use Akela\Bundle\CoreBundle\Entity\Users;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use \Nelmio\Alice\Fixtures;

class LoadFixtures implements FixtureInterface
{

    public function load(ObjectManager $manager)
    {

        Fixtures::load(
            __DIR__ . '/fixtures.yml',
            $manager
        );
    }
}