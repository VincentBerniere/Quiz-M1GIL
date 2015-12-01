<?php

namespace GIL\QueazyBundle\Controller\Visitor;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AccueilController extends Controller
{
    public function accueilAction()
    {
        // Affichage des quiz les plus récents


        return $this->render('GILQueazyBundle:Visitor:accueil.html.twig');
    }
}
