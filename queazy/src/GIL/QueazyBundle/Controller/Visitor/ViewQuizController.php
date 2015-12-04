<?php

namespace GIL\QueazyBundle\Controller\Visitor;

use GIL\QueazyBundle\Entity\Quiz;
use GIL\QueazyBundle\Entity\Question;
use GIL\QueazyBundle\Entity\Reponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ViewQuizController extends Controller
{

    public function viewAction($quiz_id) {
        $em = $this->getDoctrine()->getManager();

        $quiz = null;
        $quiz = $em->getRepository('GILQueazyBundle:Quiz')->find($quiz_id);
        $questions = $em->getRepository('GILQueazyBundle:Question')->findBy(
            array('quiz' => $quiz)
        );

        return $this->render('GILQueazyBundle:Visitor:viewQuiz.html.twig', array(
            'quiz' => $quiz,
            'questions' => $questions
        ));
    }

    public function viewQuestionAction($quiz_id, $question_id, Request $request) {
        $em = $this->getDoctrine()->getManager();

        if ($request->isMethod('POST')) {
            $data = $request->request->get('reponse');
            $choix_reponse = $em->getRepository('GILQueazyBundle:Reponse')->find($data);
            echo 'Id de la reponse choisi: '.$data.'<br/>';
            if ($choix_reponse->getCorrecte() == true) {
                echo 'reponse true';
            }
            echo 'reponse false';
        }

        $quiz = $em->getRepository('GILQueazyBundle:Quiz')->find($quiz_id);
        $question = $em->getRepository('GILQueazyBundle:Question')->find($question_id);
        $reponses = $em->getRepository('GILQueazyBundle:Reponse')->findBy(
            array('question' => $question)
        );

        $q_suivante = null;
        $prochaine = false;
        $listQuestions = null;
        $listQuestions = $em->getRepository('GILQueazyBundle:Question')->findBy(
            array('quiz' => $quiz)
        );
        foreach($listQuestions as $q) {
            if ($prochaine) {
                $q_suivante = $q;
                $prochaine = false;
            }
            if ($q->getId() == $question_id) {
                $prochaine = true;
            }
        }

        return $this->render('GILQueazyBundle:Visitor:viewQuizQuestion.html.twig', array(
            'quiz' => $quiz,
            'question' => $question,
            'reponses' => $reponses,
            'q_suivante' => $q_suivante
        ));
    }
}
