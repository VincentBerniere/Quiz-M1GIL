<?php

namespace GIL\QueazyBundle\Controller\User;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DeleteQuizController extends Controller
{
    public function deleteAction($userID, $quizID)
    {
        return $this->render('GILQueazyBundle:User:deleteQuiz.html.twig', array(
          'quizID' => $quizID,
          'userID' => $userID
        ));
    }
}
