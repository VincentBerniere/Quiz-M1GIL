<?php

namespace GIL\QueazyBundle\Controller\User;

use GIL\QueazyBundle\Controller\AppController;

class EditQuizController extends AppController
{
    public function editAction($userID, $quizID)
    {

        

        return $this->render('GILQueazyBundle:User:editQuiz.html.twig', array(
          'quizID' => $quizID,
          'userID' => $userID
        ));
    }
}