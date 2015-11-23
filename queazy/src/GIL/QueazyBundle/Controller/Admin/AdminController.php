<?php

namespace GIL\QueazyBundle\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminController extends Controller
{
    public function indexAction()
    {
        return $this->render('GILQueazyBundle:Admin:index.html.twig');
    }
}