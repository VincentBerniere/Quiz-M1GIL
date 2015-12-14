<?php

namespace GIL\QueazyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Question
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="GIL\QueazyBundle\Entity\QuestionRepository")
 */
class Question
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
     * @Assert\NotBlank()
     * @ORM\Column(name="question_contenu", type="text")
     */
    private $questionContenu;

    /**
     * @ORM\ManyToOne(targetEntity="GIL\QueazyBundle\Entity\Quiz")
     * @ORM\JoinColumn(nullable=false)
     */
    private $quiz;

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
     * Set questionContenu
     *
     * @param string $questionContenu
     *
     * @return Question
     */
    public function setQuestionContenu($questionContenu)
    {
        $this->questionContenu = $questionContenu;

        return $this;
    }

    /**
     * Get questionContenu
     *
     * @return string
     */
    public function getQuestionContenu()
    {
        return $this->questionContenu;
    }

    public function setQuiz(Quiz $quiz)
    {
        $this->quiz = $quiz;

        return $this;
    }

    public function getQuiz()
    {
        return $this->quiz;
    }
}

