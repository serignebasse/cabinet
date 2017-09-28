<?php

namespace SamaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MedecinType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom',textType::class)
            ->add('prenom',textType::class)
            ->add('addresse',textType::class)
            ->add('email',EmailType::class)
            ->add('telephone',numberType::class)
            ->add('sexe',choiceType::class, array(
                'label'    => 'Sexe',
                'choices' => array('Homme' => 'Homme', 'Femme'=> 'Femme'),
                'expanded' => true,
                'multiple' => false,
            ))
            ->add('cabinet',textType::class)
            ->add('specialite',textType::class)
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SamaBundle\Entity\Medecin'
        ));
    }
}
