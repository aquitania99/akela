<?php
/**
 * @package    AkelaApp
 *
 * @copyright  Copyright (C) 2016 Akela Solutions Pty Ltd.  All Rights Reserved
 * @License    PROPRIETARY
 */

namespace Akela\Bundle\UserBundle\Controller;

use Akela\Bundle\CoreBundle\Entity\User;
use Akela\Bundle\UserBundle\Form\AddUserForm;
use Akela\Bundle\UserBundle\Form\UserRegistrationForm;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

//use Symfony\Component\HttpFoundation\Request;

class UserController extends Controller
{
    protected $user;


    public function indexAction()
    {
        $user = $this->getUser();
        dump($user);
        return $this->render('UserBundle:Security:login.html.twig');
    }

    /**
     * @return \Symfony\Component\DependencyInjection\ContainerInterface
     */
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

        $form = $this->createForm(UserRegistrationForm::class, $user);
        
        $em = $this->getDoctrine()->getManager();

        $userData = $em->getRepository('CoreBundle:User')->find($request->get('id'));

        return $this->render('UserBundle:Student:user-profile.html.twig', array(
            'user' => $this->user->getFirstName().' '.$this->user->getLastName(),
            'page' => 'Students',
            'form' => $form->createView(),    
            'Data' => $userData)
        );
    }
    
    public function addAction(Request $request)
    {
        dump($this->getUser(), $this->getUser()->getOffice()->getId());
        $form = $this->createForm(AddUserForm::class);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            /** @var User $user */
            $user = $form->getData();
            $user->setRoles(['ROLE_USER']);
            $em = $this->getDoctrine()->getManager();
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
            'counsellor' => $this->getUser()->getId(),
            'office' => $this->getUser()->getOffice()->getId()
        ]);
    }

    public function searchAction(Request $request)
    {
        dump($request);
    }
}