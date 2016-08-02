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

        return $this->render('UserBundle:Student:list-students.html.twig', array(
            'user' => $counsellor,
            'page' => 'Students',
            'users' => $data )
        );
    }
    
    public function editAction(Request $request, User $user)
    {
        $this->user = $this->getUser();

        $form = $this->createForm(AddUserForm::class, $user);
        
        $em = $this->getDoctrine()->getManager();

        $userData = $em->getRepository('CoreBundle:User')->find($request->get('id'));
//        $office = $em->getRepository('CoreBundle:Office')->find( $this->getUser()->getOffice()->getId() );

        return $this->render('UserBundle:Student:user-profile.html.twig', [
            'form' => $form->createView(),
            'user' => $this->getUser()->getFirstName().' '.$this->getUser()->getLastName(),
            'counsellor' => $this->getUser()->getId(),
            'title' => 'Edit new user',
            'page' => 'Clients / Edit'
        ] );
    }
    
    public function addAction(Request $request)
    {
//        dump($this->getUser(), $this->getUser()->getOffice()->getId());
        $form = $this->createForm(AddUserForm::class);
        $form->handleRequest($request);

//        if ($form->isSubmitted() && $form->isValid()) {

        if (isset( $request ) && $request->getMethod() == 'PUT' ){
            $em = $this->getDoctrine()->getManager();
            /** @var User $user */
//            $user = $form->getData();
            $user = new User();
            $user->setFirstname($request->get('add_user_form')['firstname']);
            $user->setLastname($request->get('add_user_form')['lastname']);
            $user->setUsername($request->get('add_user_form')['username']);
            $user->setEmail($request->get('add_user_form')['email']);
            $user->setPlainPassword('randomStuff...');
            $user->setMobile($request->get('add_user_form')['mobile']);
            $user->setGender($request->get('add_user_form')['gender']);
            $user->setRoles(['ROLE_USER']);
            $user->setCounsellor($request->get('add_user_form')['counsellor']);

            $office = $em->getRepository('CoreBundle:Office')->find( $request->get('add_user_form')['office'] );

            $user->setOffice($office);

            $em->persist($user);
            $em->flush();

            $this->addFlash('success', $user->getFirstname().' '.$user->getLastname(). ' Has been added!!');

            return $this->redirectToRoute('akela_user_show');

//            return $this->get('security.authentication.guard_handler')
//                ->authenticateUserAndHandleSuccess(
//                    $user,
//                    $request,
//                    $this->get('akela.security.login_form_authenticator'),
//                    'main'
//                );
        }

        return $this->render('UserBundle:Student:adduser.html.twig', [
            'form' => $form->createView(),
            'user' => $this->getUser()->getFirstName().' '.$this->getUser()->getLastName(),
            'counsellor' => $this->getUser()->getId(),
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