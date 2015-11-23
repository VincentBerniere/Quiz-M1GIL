<?php

namespace GIL\QueazyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AccueilController extends Controller
{
    public function accueilAction()
    {
        return $this->render('GILQueazyBundle:Visitor:accueil.html.twig');
    }
}
