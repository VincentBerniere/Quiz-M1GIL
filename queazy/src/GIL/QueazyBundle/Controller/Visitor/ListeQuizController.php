<?php

namespace GIL\QueazyBundle\Controller\Visitor;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ListeQuizController extends Controller
{
    public function listeAction()
    {
        return $this->render('GILQueazyBundle:Visitor:liste.html.twig');
    }
}
