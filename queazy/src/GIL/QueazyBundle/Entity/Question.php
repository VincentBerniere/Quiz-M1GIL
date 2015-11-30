<?php

namespace GIL\QueazyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints\NotBlank;

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
     *
     * @ORM\Column(name="question_contenu", type="text")
     */
    private $questionContenu;

    /**
     * @var string
     *
     * @ORM\Column(name="question_type_contenu", type="string", length=255)
     */
    private $questionTypeContenu;

    /**
     * @ORM\ManyToOne(targetEntity="GIL\QueazyBundle\Entity\Quiz")
     * @ORM\JoinColumn(nullable=false)
     */
    private $quiz;

    public static function loadValidatorMetadata(ClassMetadata $metadata)
    {
        $metadata->addPropertyConstraint('questionContenu', new NotBlank());
        $metadata->addPropertyConstraint('questionTypeContenu', new NotBlank());
    }

    public function __construct()
    {
        $this->questionTypeContenu = 'Texte';
    }

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

    /**
     * Set questionTypeContenu
     *
     * @param string $questionTypeContenu
     *
     * @return Question
     */
    public function setQuestionTypeContenu($questionTypeContenu)
    {
        $this->questionTypeContenu = $questionTypeContenu;

        return $this;
    }

    /**
     * Get questionTypeContenu
     *
     * @return string
     */
    public function getQuestionTypeContenu()
    {
        return $this->questionTypeContenu;
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

