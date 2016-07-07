<?php

namespace Akela\Bundle\PublicBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class ScratchController
 *
 * @package Akela\Bundle\PublicBundle\Controller
 * @Security("is_granted('ROLE_ADMIN')")
 */
class ScratchController extends Controller
{
    public function indexAction()
    {
//        if( !$this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')) {
//            throw $this->createAccessDeniedException('GO AWAY!');
//        }
//        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        $scratch = "BLAH";
        return $this->render( '::scratch.html.twig', array( 'scratch' => $scratch ) );
    }
}
