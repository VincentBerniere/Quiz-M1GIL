<?php

namespace GIL\QueazyBundle\Controller\User;

use GIL\QueazyBundle\Controller\AppController;

class UserController extends AppController
{
    public function userAction()
    {
        $em = $this->getDoctrine()->getManager();

        $user = $this->container->get('security.context')->getToken()->getUser();

        // On récupère la liste des quiz de l'utilisateur
        $listQuiz = $em->getRepository('GILQueazyBundle:Quiz')->findBy(
            array('utilisateur' => $user),
            array('date' => 'asc')
        );
        $nbQuestions = array();
        foreach ($listQuiz as $key => $quiz) {
            $nbQuestions[$quiz->getId()] = count($em->getRepository('GILQueazyBundle:Question')->findBy(
                array('quiz' => $quiz)
            ));
        }
        return $this->render('GILQueazyBundle:User:user.html.twig', array(
            'listQuiz' => $listQuiz,
            'user' => $user,
            'nbQuestions' => $nbQuestions
        ));
    }
}
