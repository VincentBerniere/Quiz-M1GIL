<?php

namespace GIL\QueazyBundle\Controller\Visitor;

use GIL\QueazyBundle\Controller\AppController;

class ListeQuizController extends AppController
{
    private $limit = 10;

    public function listeAction($page = 1)
    {
        // Calcul de l'offset en fonction du nombre de quiz
        $offset = 0;

        $listeQuiz = $this->getRepo('Quiz')->findAll();

        // 2. Choisir le nombre de quiz à afficher par pages
        // 3. retourner les quiz correspondant à la page en cours.
        return $this->render('GILQueazyBundle:Visitor:liste.html.twig', array(
            'listeQuiz' => $listeQuiz
        ));
    }
}
