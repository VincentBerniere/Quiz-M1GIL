<?php

namespace GIL\QuizBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reponse
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="GIL\QuizBundle\Entity\ReponseRepository")
 */
class Reponse
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="reponse_contenu", type="text")
     */
    private $reponseContenu;

    /**
     * @var string
     *
     * @ORM\Column(name="reponse_type_contenu", type="string", length=255)
     */
    private $reponseTypeContenu;

    /**
     * @ORM\ManyToOne(targetEntity="GIL\QuizBundle\Entity\Question")
     * @ORM\JoinColumn(nullable=false)
     */
    private $question;
    
    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set reponseContenu
     *
     * @param string $reponseContenu
     *
     * @return Reponse
     */
    public function setReponseContenu($reponseContenu)
    {
        $this->reponseContenu = $reponseContenu;

        return $this;
    }

    /**
     * Get reponseContenu
     *
     * @return string
     */
    public function getReponseContenu()
    {
        return $this->reponseContenu;
    }

    /**
     * Set reponseTypeContenu
     *
     * @param string $reponseTypeContenu
     *
     * @return Reponse
     */
    public function setReponseTypeContenu($reponseTypeContenu)
    {
        $this->reponseTypeContenu = $reponseTypeContenu;

        return $this;
    }

    /**
     * Get reponseTypeContenu
     *
     * @return string
     */
    public function getReponseTypeContenu()
    {
        return $this->reponseTypeContenu;
    }
    
    public function setQuestion(Question $question)
    {
        $this->question = $question;

        return $this;
    }

    public function getQuestion()
    {
        return $this->question;
    }
}

