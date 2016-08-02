<?php

namespace Akela\Bundle\PackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ProductController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('', array('name' => $name));
    }

    public function listProductAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $em->getRepository('CoreBundle:Products');
    }
}
