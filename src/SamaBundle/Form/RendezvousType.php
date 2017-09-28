<?php

namespace SamaBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RendezvousType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('date',dateTimeType::class,array(
                'format' => 'dd-MM-yyyy  HH:mm',
            ))
            ->add('frequence',numberType::class)
            ->add('patient',EntityType::class,array(
                'class'=>'SamaBundle\Entity\Patient',
                'choice_label'=>'Telephone',
                'expanded'=>false,
                'multiple'=>false
            ))
            ->add('medecin',EntityType::class,array(
                'class'=>'SamaBundle\Entity\Medecin',
                'choice_label'=>'Telephone',
                'expanded'=>false,
                'multiple'=>false
            ))
            ->add('secretaire',EntityType::class,array(
                'class'=>'SamaBundle\Entity\Secretaire',
                'choice_label'=>'TelSecretaire',
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
            'data_class' => 'SamaBundle\Entity\Rendezvous'
        ));
    }
}
