<?php

namespace GIL\QueazyBundle\Controller\Visitor;

use GIL\QueazyBundle\Controller\AppController;

class AccueilController extends AppController
{
    public function accueilAction()
    {
        // Affichage des quiz les plus récents
        $em = $this->getDoctrine()->getManager();
        $quizs = $em->getRepository('GILQueazyBundle:Quiz')->findBy(
            array(),
            array(),
            5
        );
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
