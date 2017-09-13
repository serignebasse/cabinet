<?php

namespace SamaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SecretaireType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomsecretaire')
            ->add('prenomsecretaire')
            ->add('telsecretaire')
            ->add('emailsecretaire')
            ->add('sexesecretaire')
            ->add('addressesecretaire')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SamaBundle\Entity\Secretaire'
        ));
    }
}
