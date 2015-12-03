<?php

namespace GIL\QueazyBundle\Controller\Visitor;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ListeQuizController extends Controller
{
    private $limit = 10;

    public function listeAction($page = 1)
    {
        // 1. Aller chercher les quiz dans la BDD
        $bdd = $this->getDoctrine()->getManager();

        // Calcul de l'offset en fonction du nombre de quiz
        $offset = 0;

        $listeQuiz = $bdd->getRepository('GILQueazyBundle:Quiz')->findAll();

        // 2. Choisir le nombre de quiz à afficher par pages
        // 3. retourner les quiz correspondant à la page en cours.
        return $this->render('GILQueazyBundle:Visitor:liste.html.twig', array(
            'listeQuiz' => $listeQuiz
        ));
    }
}
