<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('lastName', TextType::class, [
                'label' => 'Nom ',
                'required' => true,
                'attr'=>[
                    'class'=>'form-control',
                ], 'label_attr'=>[
                    'class'=> 'form_label mt-3'
                ],
            ] )
            ->add('firstName', TextType::class, [
                'label' => 'Prénom ',
                'required' => true,
                'attr'=>[
                    'class'=>'form-control',
                ], 'label_attr'=>[
                    'class'=> 'form_label mt-3'
                ],
            ])
            ->add('address', TextareaType::class, [
                'label' => 'Adresse postale',
                'required' => true,
                'attr'=>[
                    'class'=>'form-control',
                ], 'label_attr'=>[
                    'class'=> 'form_label mt-3'
                ],
            ])
            ->add('telephoneNumber', NumberType::class, [
                'label' => 'Numéro de téléphone',
                'required' => true,
                'attr'=>[
                    'class'=>'form-control',
                ], 'label_attr'=>[
                    'class'=> 'form_label mt-3'
                ],
            ])
            ->add('plainPassword', PasswordType::class, [
                'attr'=>[
                    'class' => 'form-control'
                ],
                'label' => 'Saisissez votre mot de passe afin de confirmer les modifications',
                'label_attr' => [
                    'class' => 'form-label mt-3'
                ]
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Modifier',
                'attr'=> [
                    'class'=>'btn btn-primary mt-4'
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
