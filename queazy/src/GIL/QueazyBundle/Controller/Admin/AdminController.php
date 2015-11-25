<?php

namespace GIL\QueazyBundle\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminController extends Controller
{

    /**
     * Affiche la liste des uilisateurs actuellements
     * enregistrés sur la plateforme.
     * @return Response
     */
    public function indexAction()
    {
        return $this->render('GILQueazyBundle:Admin:index.html.twig');
    }
}