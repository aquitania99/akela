<?php

namespace Akela\Bundle\CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProfileType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('type')
            ->add('mobile')
            ->add('gender')
            ->add('nationality')
            ->add('passport')
            ->add('language')
            ->add('dob', 'date')
            ->add('birthCountry')
            ->add('birthCity')
            ->add('counsellor')
            ->add('office')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Akela\Bundle\CoreBundle\Entity\Profile'
        ));
    }
}
