<?php

namespace GIL\QueazyBundle\Controller\User;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EditQuizController extends Controller
{
    public function editAction($userID, $quizID)
    {

        

        return $this->render('GILQueazyBundle:User:editQuiz.html.twig', array(
          'quizID' => $quizID,
          'userID' => $userID
        ));
    }
}