<?php

namespace GIL\QueazyBundle\Controller\User;

use GIL\QueazyBundle\Entity\Utilisateur;
use GIL\QueazyBundle\Entity\Quiz;
use GIL\QueazyBundle\Form\AddQuizType;
use GIL\QueazyBundle\Form\QuizType;
use GIL\QueazyBundle\Entity\Question;
use GIL\QueazyBundle\Form\AddQuestionType;
use GIL\QueazyBundle\Entity\Reponse;
use GIL\QueazyBundle\Form\AddReponseType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class AddQuizController extends Controller
{
    public function addQuizAction($id, Request $request) {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('GILQueazyBundle:Utilisateur')->find($id);
        $quiz = new Quiz();
        $quiz->setUtilisateur($user);

        $question = new Question();
        $question->setQuiz($quiz);
        $form = $this->createForm(new QuizType(), $question);

        $reponse1 = new Reponse();
        $reponse2 = new Reponse();
        $reponse3 = new Reponse();
        $reponse4 = new Reponse();
        $form_r1 = $this->createForm(new AddReponseType(), $reponse1);
        $form_r2 = $this->createForm(new AddReponseType(), $reponse2);
        $form_r3 = $this->createForm(new AddReponseType(), $reponse3);
        $form_r4 = $this->createForm(new AddReponseType(), $reponse4);

        $form->handleRequest($request);
        $form_r1->handleRequest($request);
        $form_r2->handleRequest($request);
        $form_r3->handleRequest($request);
        $form_r4->handleRequest($request);

        // On vérifie que les valeurs entrées sont correctes
        if ($form->isValid()) {

            $reponse1->setQuestion($question);
            $em->persist($reponse1);
            $reponse2->setQuestion($question);
            $em->persist($reponse2);
            $reponse3->setQuestion($question);
            $em->persist($reponse3);
            $reponse4->setQuestion($question);
            $em->persist($reponse4);

            $em->persist($question);
            $em->persist($quiz);
            $em->flush();

            $listQuestion = $em->getRepository('GILQueazyBundle:Question')->findBy(
                array('quiz' => $quiz)
            );

            return $this->render('GILQueazyBundle:User:addQuiz.html.twig', array(
                'quiz' => $quiz,
                'user' => $user,
                'listQuestion' => $listQuestion
            ));
        }
        return $this->render('GILQueazyBundle:User:add.html.twig', array(
            'user' => $user,
            'form' => $form->createView(),
            'form1' => $form_r1->createView(),
            'form2' => $form_r2->createView(),
            'form3' => $form_r3->createView(),
            'form4' => $form_r4->createView(),
        ));
    }
    public function addAction($id, $quiz_id)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('GILQueazyBundle:Utilisateur')->find($id);
        $quiz = $em->getRepository('GILQueazyBundle:Quiz')->find($quiz_id);

        $listQuestion = $em->getRepository('GILQueazyBundle:Question')->findBy(
            array('quiz' => $quiz)
        );

        return $this->render('GILQueazyBundle:User:addQuiz.html.twig', array(
            'quiz' => $quiz,
            'user' => $user,
            'listQuestion' => $listQuestion
        ));
    }

    public function addAnswerAction($id, $quiz_id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('GILQueazyBundle:Utilisateur')->find($id);
        $quiz = $em->getRepository('GILQueazyBundle:Quiz')->find($quiz_id);

        $question = new Question();
        $question->setQuiz($quiz);

        $reponse1 = new Reponse();
        $reponse2 = new Reponse();
        $reponse3 = new Reponse();
        $reponse4 = new Reponse();
        
        // Formulaire
        $form_q = $this->createForm(new AddQuestionType(), $question);

        $form_r1 = $this->createForm(new AddReponseType(), $reponse1);
        $form_r2 = $this->createForm(new AddReponseType(), $reponse2);
        $form_r3 = $this->createForm(new AddReponseType(), $reponse3);
        $form_r4 = $this->createForm(new AddReponseType(), $reponse4);
        
        // On fait le lien Requête <-> Formulaire
        $form_q->handleRequest($request);
        $form_r1->handleRequest($request);
        $form_r2->handleRequest($request);
        $form_r3->handleRequest($request);
        $form_r4->handleRequest($request);

        // On vérifie que les valeurs entrées sont correctes
        if ($form_q->isValid()) {
            $reponse1->setQuestion($question);
            $em->persist($reponse1);
            $reponse2->setQuestion($question);
            $em->persist($reponse2);
            $reponse3->setQuestion($question);
            $em->persist($reponse3);
            $reponse4->setQuestion($question);
            $em->persist($reponse4);
            $question->setQuiz($quiz);
                
            // On l'enregistre notre objet dans la base de données            
            $em->persist($question);
            $em->flush();

            $listQuestion = $em->getRepository('GILQueazyBundle:Question')->findBy(
                array('quiz' => $quiz)
            );

            // On redirige vers la page de visualisation du quiz créée
            return $this->render('GILQueazyBundle:User:addQuiz.html.twig', array(
                'quiz' => $quiz,
                'listQuestion' => $listQuestion,
                'user' => $user
            ));
        }
        
        return $this->render('GILQueazyBundle:User:addQuestion.html.twig', array(
            'form' => $form_q->createView(),
            'form1' => $form_r1->createView(),
            'form2' => $form_r2->createView(),
            'form3' => $form_r3->createView(),
            'form4' => $form_r4->createView(),
            'user' => $user,
            'quiz' => $quiz
        ));
    }
}
