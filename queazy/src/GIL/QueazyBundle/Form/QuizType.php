<?php

namespace GIL\QueazyBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use GIL\QueazyBundle\Entity\Quiz;

class QuizType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('quiz', new AddQuizType());

        $builder->add('questionTypeContenu', 'choice', array(
            'choices' => array(
                'Type de Contenu'  => array('Texte', 'Image', 'MathML')
            ),
            'multiple' => false,
            'expanded' => true,
            'attr' => array(
                'class' => 'form-control',
                'required' => true
            )
        ));

        $builder->add('questionContenu', 'text', array(
            'label' => false,
            'attr' => array(
                'class' => 'form-control',
                'placeholder' => 'Question',
                'required' => true
            )
        ));

        $builder->add('Valider', 'submit', array(
            'label' => false,
            'attr' => array(
                'class' => 'form-control',
                'required' => false
            )
        ));

        $builder->add('Annuler', 'reset', array(
            'label' => false,
            'attr' => array(
                'class' => 'form-control',
                'required' => false
            )
        ));
    }

    public function getName()
    {
        return 'form_quiz';
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver){
        $resolver->setDefaults([
            'data_class' => 'GIL\QueazyBundle\Entity\Question'
        ]);
    }
}