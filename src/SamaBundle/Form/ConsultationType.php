<?php

namespace SamaBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ConsultationType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('date',dateType::class ,array(
                     'widget' => 'single_text',))
            ->add('diagnostic',TextareaType::class)
            ->add('traitement',TextareaType::class)
            ->add('decision',TextareaType::class)
            ->add('patient', EntityType::class,array(
        'class'=>'SamaBundle\Entity\Patient',
        'choice_label'=>'Telephone',
        'expanded'=>false,
        'multiple'=>false
    ))
            ->add('medecin', EntityType::class,array(
                'class'=>'SamaBundle\Entity\Medecin',
                'choice_label'=>'Telephone',
                'expanded'=>false,
                'multiple'=>false
            ))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SamaBundle\Entity\Consultation'
        ));
    }
}
