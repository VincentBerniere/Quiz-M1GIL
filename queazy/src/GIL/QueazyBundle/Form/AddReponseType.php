<?php

namespace GIL\QueazyBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class AddReponseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
        $builder->add('reponseTypeContenu', 'choice', array(
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
        
        $builder->add('reponseContenu', 'text', array(
            'label' => false,
            'attr' => array(
                'class' => 'form-control',
                'placeholder' => 'Reponse',
                'required' => true
            )
        ));
    }

    public function getName()
    {
        return 'form_add_reponse';
    }
}