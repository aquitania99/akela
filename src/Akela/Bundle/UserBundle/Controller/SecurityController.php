<?php

namespace Akela\Bundle\UserBundle\Controller;

use Akela\Bundle\UserBundle\Form\LoginForm;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Config\Definition\Exception\Exception;

class SecurityController extends Controller
{
    public function loginAction()
    {
        $authenticationUtils = $this->get('security.authentication_utils');

        $error = $authenticationUtils->getLastAuthenticationError();

        $lastUsername = $authenticationUtils->getLastUsername();

        $form = $this->createForm(LoginForm::class, [
            '_username' => $lastUsername
        ]);

        return $this->render(
            'UserBundle::auth/login.html.twig', 
            array(
                'form' => $form->createView(), 
                'error' => $error 
            ) 
        );
    }
    /**
     * @Route("/login_check", name="security_login_check")
     */
    public function loginCheckAction()
    {
        // will never be executed
    }

    public function logoutAction()
    {
        throw new Exception('this should not be reach');
    }
}


