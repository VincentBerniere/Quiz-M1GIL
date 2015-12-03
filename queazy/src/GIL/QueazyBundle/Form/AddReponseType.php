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
                'Type de Contenu'  => array('1' => 'Texte', '2' => 'Image', '3' => 'MathML')
            ),
            'multiple' => false,
            'expanded' => true,
            'data' => '1',
            'attr' => array(
                'class' => 'large-2 columns',
            )
        ));
        
        $builder->add('reponseContenu', 'text', array(
            'label' => false,
            'required' => false,
            'attr' => array(
                'placeholder' => 'Reponse',
                'class' => 'large-4 columns',
            )
        ));
    }

    public function getName()
    {
        return 'form_add_reponse';
    }

}