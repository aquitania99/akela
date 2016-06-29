<?php
/**
 * @package    AkelaApp
 *
 * @copyright  Copyright (C) 2016 Akela Solutions Pty Ltd.  All Rights Reserved
 * @License    PROPRIETARY
 */

namespace Akela\Bundle\PublicBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\BrowserKit\Response;
use Symfony\Component\HttpFoundation\Request;

class PublicController  extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $users = $em->getRepository('CoreBundle:User')->findAll();
        
        $user = $this->getUser();
        dump($users, $user);
        return $this->render('::home.html.twig', array( 'user' => $user->getFirstName().' '.$user->getLastName() ));
    }
}