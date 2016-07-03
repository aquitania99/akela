<?php
/**
 * @package    AkelaApp
 *
 * @copyright  Copyright (C) 2016 Akela Solutions Pty Ltd.  All Rights Reserved
 * @License    PROPRIETARY
 */

namespace Akela\Bundle\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

//use Symfony\Component\HttpFoundation\Request;

class UserController extends Controller
{
    public function indexAction()
    {
        $user = $this->getUser();
        dump($user);die;
        return $this->render('UserBundle:Security:login.html.twig');
    }

    /**
     * @return \Symfony\Component\DependencyInjection\ContainerInterface
     */
    public function showAction()
    {
        $em = $this->getDoctrine()->getManager();

        $users = $em->getRepository('CoreBundle:User')->findAll();

        $data = array();

        foreach ($users as $user => $val ) {
            $data[] = $val;
        }

        $user = $this->getUser();
//        dump($users, $data);
//        return $this->render('::home.html.twig', array( 'user' => $user->getFirstName().' '.$user->getLastName() ));
        return $this->render('UserBundle:Student:list-students.html.twig', array( 'user' => $user->getFirstName().' '.$user->getLastName(), 'page' => 'Students', 'users' => $users ));
    }
    
    public function editAction($userId)
    {
        dump($userId);
    }
    
    public function addAction(Request $request)
    {
        dump( $request );
    }

    public function searchAction(Request $request)
    {
        dump($request);
    }
}