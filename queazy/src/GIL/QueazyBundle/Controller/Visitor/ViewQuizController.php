<?php

namespace GIL\QueazyBundle\Controller\Visitor;

use GIL\QueazyBundle\Entity\Quiz;
use GIL\QueazyBundle\Entity\Question;
use GIL\QueazyBundle\Entity\Reponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ViewQuizController extends Controller
{
    public function viewAction($quiz_id) {
        $em = $this->getDoctrine()->getManager();

        $quiz = $em->getRepository('GILQueazyBundle:Quiz')->find($quiz_id);
        $questions = $em->getRepository('GILQueazyBundle:Question')->findBy(
            array('quiz' => $quiz)
        );

        return $this->render('GILQueazyBundle:Visitor:viewQuiz.html.twig', array(
            'quiz' => $quiz,
            'questions' => $questions
        ));
    }

    public function viewQuestionAction($quiz_id, $question_id) {
        $em = $this->getDoctrine()->getManager();

        $quiz = $em->getRepository('GILQueazyBundle:Quiz')->find($quiz_id);
        $question = $em->getRepository('GILQueazyBundle:Question')->find($question_id);
        $reponses = $em->getRepository('GILQueazyBundle:Reponse')->findBy(
            array('question' => $question)
        );

        $q_suivante = null;
        $prochaine = false;
        $listQuestions = $em->getRepository('GILQueazyBundle:Question')->findAll();
        foreach($listQuestions as $question) {
            if ($prochaine) {
                $q_suivante = $question;
                $prochaine = false;
            }
            if ($question->getId() == $question_id) {
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
