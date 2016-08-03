<?php
/**
 * @package    AkelaApp
 *
 * @copyright  Copyright (C) 2016 Akela Solutions Pty Ltd.  All Rights Reserved
 * @License    PROPRIETARY
 */

namespace Akela\Bundle\PackBundle\Controller;

use Akela\Bundle\CoreBundle\Entity\Office;
use Akela\Bundle\CoreBundle\Entity\User;
use Akela\Bundle\PackBundle\Form\AddUserForm;
use Akela\Bundle\PackBundle\Form\UserRegistrationForm;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

//use Symfony\Component\HttpFoundation\Request;

class UserController extends Controller
{
    protected $user;


    public function indexAction()
    {
        $user = $this->getUser();
        dump($user);
        return $this->render('PackBundle:Security:login.html.twig');
    }

    public function showAction()
    {
        $this->user = $this->getUser();

        $counsellor = $this->user->getFirstName().' '.$this->user->getLastName();
        
        $em = $this->getDoctrine()->getManager();

        $users = $em->getRepository('CoreBundle:User')->findAll();

        $data = array();

        foreach ($users as $user => $val ) {
            if (!in_array( "ROLE_COUNSELLOR", $val->getRoles() ) ) {
                $data[] = $val;
            }
        }

        return $this->render('PackBundle:Student:list-students.html.twig', array(
            'user' => $counsellor,
            'page' => 'Students',
            'users' => $data )
        );
    }

    public function editAction(Request $request, User $user)
    {
        $form = $this->createForm(AddUserForm::class, $user);

        // only handles data on POST
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user = $form->getData();
            $user->setRoles(['ROLE_USER']);
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            $this->addFlash('Awesome!', $user->getFirstname().' '.$user->getLastname(). ' Has been updated!!');

            return $this->redirectToRoute('akela_user_show');

//            $em = $this->getDoctrine()->getManager();
//            /** @var User $user */
//            $user = $form->getData();
//            $user = new User();
//            $user->setFirstname($request->get('add_user_form')['firstname']);
//            $user->setLastname($request->get('add_user_form')['lastname']);
//            $user->setUsername($request->get('add_user_form')['username']);
//            $user->setEmail($request->get('add_user_form')['email']);
//            $user->setPlainPassword('randomStuff...');
//            $user->setRoles(['ROLE_USER']);
//
//            $em->persist($user);
//            $em->flush();
//
//            $this->addFlash('success', $user->getFirstname().' '.$user->getLastname(). ' Has been added!!');
//
//            return $this->redirectToRoute('akela_user_show');

//            return $this->get('security.authentication.guard_handler')
//                ->authenticateUserAndHandleSuccess(
//                    $user,
//                    $request,
//                    $this->get('akela.security.login_form_authenticator'),
//                    'main'
//                );
        }

        return $this->render('PackBundle:Student:edituser.html.twig', [
            'addUserForm' => $form->createView(),
            'user' => $this->getUser()->getFirstName().' '.$this->getUser()->getLastName(),
//            'counsellor' => $this->getUser()->getId(),
            'title' => 'Add new user',
            'page' => 'Clients / Add'
        ]);
    }
    
    public function addAction(Request $request)
    {
//        dump($this->getUser(), $this->getUser()->getOffice()->getId());
        $form = $this->createForm(AddUserForm::class);

        // only handles data on POST
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user = $form->getData();
            $user->setRoles(['ROLE_USER']);
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            $this->addFlash('success', $user->getFirstname().' '.$user->getLastname(). ' Has been added!!');

            return $this->redirectToRoute('akela_user_show');

//            $em = $this->getDoctrine()->getManager();
//            /** @var User $user */
//            $user = $form->getData();
//            $user = new User();
//            $user->setFirstname($request->get('add_user_form')['firstname']);
//            $user->setLastname($request->get('add_user_form')['lastname']);
//            $user->setUsername($request->get('add_user_form')['username']);
//            $user->setEmail($request->get('add_user_form')['email']);
//            $user->setPlainPassword('randomStuff...');
//            $user->setRoles(['ROLE_USER']);
//
//            $em->persist($user);
//            $em->flush();
//
//            $this->addFlash('success', $user->getFirstname().' '.$user->getLastname(). ' Has been added!!');
//
//            return $this->redirectToRoute('akela_user_show');

//            return $this->get('security.authentication.guard_handler')
//                ->authenticateUserAndHandleSuccess(
//                    $user,
//                    $request,
//                    $this->get('akela.security.login_form_authenticator'),
//                    'main'
//                );
        }

        return $this->render('PackBundle:Student:adduser.html.twig', [
            'addUserForm' => $form->createView(),
            'user' => $this->getUser()->getFirstName().' '.$this->getUser()->getLastName(),
//            'counsellor' => $this->getUser()->getId(),
            'title' => 'Add new user',
            'page' => 'Clients / Add'
        ]);
    }

    public function searchAction(Request $request)
    {
        dump($request);

        return $this->render('::home.html.twig', array('user' => $this->getUser()->getId(), 'page' => 'search'));
    }
}