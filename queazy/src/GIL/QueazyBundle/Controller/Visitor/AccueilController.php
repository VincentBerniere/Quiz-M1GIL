<?php

namespace GIL\QueazyBundle\Controller\Visitor;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AccueilController extends Controller
{
    public function accueilAction()
    {
        // Affichage des quiz les plus récents
        $em = $this->getDoctrine()->getManager();
        $quizs = $em->getRepository('GILQueazyBundle:Quiz')->findAll();
        $listeQuiz = array();

        foreach ($quizs as $quiz) {
            $nbQuestions = count($em->getRepository('GILQueazyBundle:Question')->findBy(
                array('quiz' => $quiz )));

            array_push($listeQuiz, array(
                'quiz' => $quiz,
                'nb_questions' => $nbQuestions
            ));
        }

        return $this->render('GILQueazyBundle:Visitor:accueil.html.twig',
            array( 'quizs' => $listeQuiz )
        );
    }
}
