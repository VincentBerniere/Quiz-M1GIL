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

        // Calcul de l'offset en fonction du nombre de

        $listeQuiz = $bdd->getRepository('GILQueazyBundle:Quiz')->findBy(
            null,
            array('date' => 'asc'),
            array('limit' => $this->limit),
            array('offset' => $offset)
        );

        // 2. Choisir le nombre de quiz à afficher par pages
        // 3. retourner les quiz correspondant à la page en cours.
        return $this->render('GILQueazyBundle:Visitor:accueil.html.twig', array(
            "listeQuiz" => $listeQuiz
        ));
    }
}
