<?php

namespace GIL\QueazyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Reponse
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="GIL\QueazyBundle\Entity\ReponseRepository")
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
     * @Assert\NotBlank()
     * @ORM\Column(name="reponse_contenu", type="text", nullable=true)
     */
    private $reponseContenu;

    /**
     * @var string
     *
     * @ORM\Column(name="reponse_type_contenu", type="string", length=255, nullable=true)
     */
    private $reponseTypeContenu;

    /**
     * @ORM\Column(type="boolean", name="correcte", options={"default": false})
     */
    private $correcte;

    /**
     * @ORM\ManyToOne(targetEntity="GIL\QueazyBundle\Entity\Question")
     * @ORM\JoinColumn(nullable=false)
     */
    private $question;

    public function __construct()
    {
        $this->reponseContenu = '';
        $this->reponseTypeContenu = 'Texte';
        $this->correcte = false;
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

    public function getCorrecte()
    {
        return $this->correcte;
    }

    public function setCorrecte($correcte)
    {
        $this->correcte = $correcte;

        return $this;
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
