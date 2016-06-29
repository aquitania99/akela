<?php

namespace Akela\Bundle\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $name = "Condorito";
        dump($name);
        return $this->render(':layouts:akela-dashboard.html.twig', array('name' => $name));
    }
    
    public function InvoiceAction()
    {
        return json_encode('LALALA!');
    }
}
