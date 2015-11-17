<?php

namespace GIL\QuizBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('GILQuizBundle:Default:index.html.twig', array('name' => $name));
    }
}
