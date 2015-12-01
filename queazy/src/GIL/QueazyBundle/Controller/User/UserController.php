<?php

namespace GIL\QueazyBundle\Controller\User;

use GIL\QueazyBundle\Entity\Utilisateur;
use GIL\QueazyBundle\Entity\Quiz;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
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

        return $this->render('GILQueazyBundle:User:user.html.twig', array(
            'listQuiz' => $listQuiz,
            'user' => $user
        ));
    }
}
