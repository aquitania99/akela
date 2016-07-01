<?php
/**
 * @package    AkelaApp
 *
 * @copyright  Copyright (C) 2016 Akela Solutions Pty Ltd.  All Rights Reserved
 * @License    PROPRIETARY
 */

namespace Akela\Bundle\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Symfony\Component\HttpFoundation\Request;

class UserController extends Controller
{
    public function indexAction()
    {
        $user = $this->getUser();
        dump($user);die;
        return $this->render('UserBundle:Security:login.html.twig');
    }
}