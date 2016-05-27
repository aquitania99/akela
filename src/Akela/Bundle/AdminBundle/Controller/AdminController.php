<?php
/**
 * @package    AkelaApp
 *
 * @copyright  Copyright (C) 2016 Akela Solutions Pty Ltd.  All Rights Reserved
 * @License    PROPRIETARY
 */

namespace Akela\Bundle\AdminBundle\Controller;

use Symfony\Component\DependencyInjection\ContainerInterface;

use Akela\Bundle\CoreBundle\Controller\BaseController;

////////////////////////////////////////////////////////////////////
// - CLASS DECLARATION - ///////////////////////////////////////////
////////////////////////////////////////////////////////////////////
/**
 * AdminController Class
 *
 * DESCRIPTION
 *
 * @package     AkelaApp
 * @version     1.0
 */
abstract class AdminController extends BaseController
{
    ////////////////////////////////////////////////////////////////
    // - CLASS PROPERTIES - ////////////////////////////////////////
    ////////////////////////////////////////////////////////////////
    protected $context = 'admin';
    ////////////////////////////////////////////////////////////////
    // - PUBLIC MEMBER METHODS - ///////////////////////////////////
    ////////////////////////////////////////////////////////////////
    /**
     * @param   ContainerInterface|null     $container
     */
    public function setContainer( ContainerInterface $container = null )
    {
        parent::setContainer( $container );

        $this->checkPermissions();
    }
    ////////////////////////////////////////////////////////////////
    // - PROTECTED MEMBER METHODS - ////////////////////////////////
    ////////////////////////////////////////////////////////////////
    /**
     * @return  void
     */
    protected function checkPermissions()
    {
        /** @var \Veromo\Bundle\CoreBundle\Entity\Repository\AccountRepository $repository */
        $repository = $this->getDoctrine()->getManager()->getRepository('CoreBundle:Account');

        if( !( $akela = $repository->find( 1 ) ) )
        {
            throw $this->createNotFoundException('WHERE THE FUCK IS OUR MASTER ACCOUNT?!!?');
        }

        $this->denyAccessUnlessGranted( 'ROLE_ADMIN', $akela );
    }
}
////////////////////////////////////////////////////////////////////
// - END CLASS - ///////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////