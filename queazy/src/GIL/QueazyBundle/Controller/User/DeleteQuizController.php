<?php

namespace GIL\QueazyBundle\Controller\User;

use GIL\QueazyBundle\Controller\AppController;

class DeleteQuizController extends AppController
{
    public function deleteAction($user_id, $quiz_id)
    {
        $bdd = $this->getBDD();

        // On vérifie que le quiz à supprimer appartient à l'utilisateur
        $quiz   = $this->getRepo("Quiz")->find($quiz_id);
        $author = $this->getRepo("Utilisateur")->find($user_id);

        /*
         * TODO : Effectuer la comparaison avec les ID au lieu des pseudos
         */
        if ($quiz->getAuteur() === $author->getUsername()) {
            // Si oui, on supprime les questions associées
            $questions = $this->getRepo("Question")->findBy(
                array('quiz' => $quiz)
            );

            // Pour chaque question, on supprime les reponses associées.
            foreach($questions as $question) {
                $reponses = $this->getRepo("Reponse")->findBy(
                    array('question' => $question)
                );

                foreach($reponses as $reponse) {
                    $bdd->remove($reponse);
                }
                $bdd->remove($question);
            }

            // Et on supprime le quiz
            $bdd->remove($quiz);
            $bdd->flush();
        }

        return $this->redirectToRoute('gil_queazy_user');
    }
}
