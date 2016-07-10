<?php

namespace Akela\Bundle\UserBundle\Form;

use Akela\Bundle\CoreBundle\Entity\Counsellor;
use Akela\Bundle\CoreBundle\Entity\Office;
use Akela\Bundle\CoreBundle\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserRegistrationForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname')
            ->add('lastname')
            ->add('username')
            ->add('email', EmailType::class)
            ->add('plainPassword', RepeatedType::class, [
                'type' => PasswordType::class
            ])
            ->add('mobile')
            ->add('gender', ChoiceType::class, [
                'choices' => [
                    'M' => 'M',
                    'F'  => 'F'
                ]
            ] )
            ->add('nationality')
            ->add('dob', DateType::class, [
                'widget' => 'single_text',
                'attr' => [
                    'class' => 'js-datepicker'
                ],
                'html5' => false
            ] )
            ->add('birthCountry')
            ->add('birthCity')
            ->add('isActive', ChoiceType::class, [
                'choices' => [
                    'Yes' => true,
                    'No'  => false
                ]
            ])
            ->add('counsellor', HiddenType::class)
            ->add('roles', HiddenType::class, [
                'attr' => [ 'ROLE_USER']
            ])
        ;

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
            'validation_groups' => ['Default', 'Registration']
        ]);
    }
}
