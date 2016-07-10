<?php

namespace Akela\Bundle\UserBundle\Form;

use Akela\Bundle\CoreBundle\Entity\Country;
use Akela\Bundle\CoreBundle\Entity\User;
use Akela\Bundle\CoreBundle\Repository\CountryRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AddUserForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname')
            ->add('lastname')
            ->add('username')
            ->add('email', EmailType::class)
            ->add('mobile')
            ->add('gender', ChoiceType::class, [
//                'choices' => [
//                    'M' => 'M',
//                    'F'  => 'F',
//                ]
                'expanded' => true,
                'multiple' => false
            ] )
            ->add('nationality', EntityType::class, [
                'class' => Country::class,
                'query_builder' => function(CountryRepository $repo) {
                    return $repo->createAlphabeticalQueryBuilder();
                },
                'choice_label' => 'nicename',
                'placeholder' => 'Choose a Country',
            ])
            ->add('dob', DateType::class, [
                'widget' => 'single_text',
                'attr' => [
                    'class' => 'js-datepicker'
                ],
                'html5' => false
            ] )
            ->add('birthCountry', EntityType::class, [
                'class' => Country::class,
                'query_builder' => function(CountryRepository $repo) {
                    return $repo->createAlphabeticalQueryBuilder();
                },
                'choice_label' => 'nicename',
                'placeholder' => 'Choose a Country',
            ])
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
            'data_class' => User::class
        ]);
    }
}
