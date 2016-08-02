<?php

namespace Akela\Bundle\PackBundle\Controller;

use Akela\Bundle\PackBundle\Form\LoginForm;
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

        if ($error) {
            $this->addFlash('error', 'Please check that your Username and Password are valid!!');
        }
        return $this->render(
            'UserBundle::auth/login.html.twig', 
            array(
                'form' => $form->createView()
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


