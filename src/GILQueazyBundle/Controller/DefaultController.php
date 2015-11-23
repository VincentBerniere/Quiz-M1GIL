<?php

namespace GILQueazyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('GILQueazyBundle:Default:index.html.twig', array('name' => $name));
    }
}
