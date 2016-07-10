<?php
/**
 * @package    AkelaApp
 *
 * @copyright  Copyright (C) 2016 Akela Solutions Pty Ltd.  All Rights Reserved
 * @License    PROPRIETARY
 */

namespace Akela\Bundle\CoreBundle\Repository;

use Doctrine\ORM\EntityRepository;

class CountryRepository extends EntityRepository
{
    public function createAlphabeticalQueryBuilder()
    {
        return $this->createQueryBuilder('CountryRepository')
            ->orderBy('CountryRepository.niceName', 'ASC');
    }
}