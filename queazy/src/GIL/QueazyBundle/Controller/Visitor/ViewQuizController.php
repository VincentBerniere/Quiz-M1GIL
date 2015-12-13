<?php

namespace GIL\QueazyBundle\Controller\Visitor;

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

        $quiz = $em->getRepository('GILQueazyBundle:Quiz')->find($quiz_id);
        $question = $em->getRepository('GILQueazyBundle:Question')->find($question_id);

        if ($request->isMethod('POST')) {
            $data = $request->request->get('reponse');
            $choix_reponse = $em->getRepository('GILQueazyBundle:Reponse')->find($data);
            echo 'Id de la reponse choisi: '.$data.'<br/>';
            if ($choix_reponse->getCorrecte() == true) {
                echo 'reponse true';
                if(!isset($_COOKIE[$quiz_id])) {
                    echo "Cookie named '" . $quiz_id . "' is not set!";
                } else {
                    echo "Cookie '" . $quiz_id . "' is set!<br>";
                    setcookie($quiz_id, ++$_COOKIE[$quiz_id], time() + (86400 * 1), "/"); // 86400 = 1 day
                    echo "Value is: " . $_COOKIE[$quiz_id];
                }
            } else {
                echo 'reponse false';
            }
        } else {
            $cookie_name = $quiz_id;
            $cookie_value = 0;
            setcookie($cookie_name, $cookie_value, time() + (86400 * 1), "/"); // 86400 = 1 day
        }

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

    public function resultatAction($quiz_id, Request $request) {
        $em = $this->getDoctrine()->getManager();

        if ($request->isMethod('POST')) {
            $data = $request->request->get('reponse');
            $choix_reponse = $em->getRepository('GILQueazyBundle:Reponse')->find($data);
            echo 'Id de la reponse choisi: '.$data.'<br/>';
            if ($choix_reponse->getCorrecte() == true) {
                echo 'reponse true';
                if(!isset($_COOKIE[$quiz_id])) {
                    echo "Cookie named '" . $quiz_id . "' is not set!";
                } else {
                    echo "Cookie '" . $quiz_id . "' is set!<br>";
                    setcookie($quiz_id, ++$_COOKIE[$quiz_id], time() + (86400 * 1), "/"); // 86400 = 1 day
                    echo "Value is: " . $_COOKIE[$quiz_id];
                }
            } else {
                echo 'reponse false';
            }
        }


        $quiz = $em->getRepository('GILQueazyBundle:Quiz')->find($quiz_id);
        $questions = $em->getRepository('GILQueazyBundle:Question')->findBy(
            array('quiz' => $quiz)
        );
        $reponses = null;
        foreach($questions as $question) {
            $reponses[$question->getId()] = $em->getRepository('GILQueazyBundle:Reponse')->findBy(
                array('question' => $question)
            );
        }

        return $this->render('GILQueazyBundle:Visitor:resultat.html.twig', array(
            'quiz' => $quiz,
            'question' => $questions,
            'reponses' => $reponses,
            'nbReponseCorrecte' => $_COOKIE[$quiz_id]
        ));
    }
}
