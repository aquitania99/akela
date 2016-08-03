<?php

namespace Akela\Bundle\PackBundle\Form;

use Akela\Bundle\CoreBundle\Entity\Country;
use Akela\Bundle\CoreBundle\Entity\Passport;
use Akela\Bundle\CoreBundle\Entity\User;
use Akela\Bundle\CoreBundle\Repository\CountryRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Date;

class AddUserForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname', TextType::class, array(
                'label'    => false,
                'attr' => array(
                    'placeholder' => 'John'
                )
            ))
            ->add('lastname', TextType::class, array(
                'label'    => false,
                'attr' => array(
                    'placeholder' => 'Doe'
                )
            ))
            ->add('username', TextType::class, array(
                'label'    => false,
                'attr'  =>array(
                    'placeholder'   => 'username'
                )
            ))
            ->add('email', EmailType::class, array(
                'label' => false,
                'attr' => array(
                    'placeholder' => 'user@email.com'
                )
            ))
            ->add('plain_password', TextType::class, array(
                'label' => false,
                'attr' => array(
                    'placeholder' => 'password'
                )
            ))
            ->add('isActive', ChoiceType::class, array(
                'label' => false,
                'choices' => array(
                    'Yes' => true,
                    'No'  => false
                )
            ))
            ->add('createdAt', DateType::class, array(
                'label' => false,
                'attr' => array(
                    'value' => date('Y-m-d'),
                    'style' => 'visibility: hidden'
                )
            ))
//            ->add('mobile', TextType::class, array(
//                'label' => false,
//                'attr' => array(
//                    'placeholder' => '+99-99-9999-9999'
//                )
//            ))
//            ->add('gender', ChoiceType::class, [
//                'label' => false,
//                'choices' => array('Male' => 'M', 'Female' => 'F'),
//                'expanded' => true,
//                'multiple' => false
//            ] )
//            ->add('nationality', EntityType::class, [
//                'label' => false,
//                'class' => Country::class,
//                'query_builder' => function(CountryRepository $repo) {
//                    return $repo->createAlphabeticalQueryBuilder();
//                },
//                'choice_label' => 'nicename',
//                'placeholder' => 'Choose a Country',
//            ])
//            ->add('passport', EntityType::class, [
//                'label' => false,
//                'class' => Passport::class,
//            ])
//            ->add('dob', DateType::class, [
//                'label' => false,
//                'widget' => 'single_text',
//                'attr' => [
//                    'class' => 'js-datepicker'
//                ],
//                'html5' => false
//            ] )
//            ->add('birthCountry', EntityType::class, [
//                'label' => false,
//                'class' => Country::class,
//                'query_builder' => function(CountryRepository $repo) {
//                    return $repo->createAlphabeticalQueryBuilder();
//                },
//                'choice_label' => 'nicename',
//                'placeholder' => 'Choose a Country',
//            ])
//            ->add('birthCity')
//            ->add('isActive', ChoiceType::class, [
//                'label' => false,
//                'choices' => [
//                    'Yes' => true,
//                    'No'  => false
//                ]
//            ])
//            ->add('counsellor', HiddenType::class)
//            ->add('office', HiddenType::class)
//            ->add('roles', HiddenType::class, [
//                'attr' => [ 'ROLE_USER']
//            ])
        ;

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
           'data_class' => 'Akela\Bundle\CoreBundle\Entity\User'
        ]);
    }
}