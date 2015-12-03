<?php

namespace GIL\QueazyBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class AddQuestionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
        /*$builder->add('questionTypeContenu', 'choice', array(
            'choices' => array(
                'Type de Contenu'  => array('1' => 'Texte', '2' => 'Image', '3' => 'MathML')
            ),
            'multiple' => false,
            'expanded' => true,
            'data' => '1',
            'required' => true,
            'attr' => array(
                'class' => 'large-3 columns',
            )
        ));*/
        
        $builder->add('questionContenu', 'text', array(
            'label' => false,
            'required' => true,
            'attr' => array(
                'placeholder' => 'Question',
                'class' => 'large-12 columns',
            )
        ));
        
        $builder->add('Valider', 'submit', array(
            'label' => false,
            'attr' => array(
                'class' => 'button',
            )
        ));     
        
         $builder->add('Annuler', 'reset', array(
            'label' => false,
            'attr' => array(
                'class' => 'button',
            )
        ));     
    }

    public function getName()
    {
        return 'form_add_question';
    }
}