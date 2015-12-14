<?php

namespace GIL\QueazyBundle\Controller\Admin;

use GIL\QueazyBundle\Controller\AppController;

class AdminController extends AppController
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