<?php

namespace SamaBundle\Form;

use Symfony\Component\Form\AbstractType;
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
            ->add('nommedecin')
            ->add('prenommedecin')
            ->add('addressemedecin')
            ->add('emailmedecin')
            ->add('telmedecin')
            ->add('sexemedecin')
            ->add('cabinetmedecin')
            ->add('specialitemedecin')
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
