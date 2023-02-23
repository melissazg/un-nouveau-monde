<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints as Assert;
class UserPasswordType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('plainPassword', RepeatedType::class, [
                'type' => PasswordType::class,
                'invalid_message' => 'The password fields must match.',
                'options' => ['attr' => ['class' => 'password-field']],
                'required' => true,
                'first_options'  => ['label' => 'Mot de passe',
                    'attr'=>[
                        'class'=>'form-control',
                    ], 'label_attr'=>[
                        'class'=> 'form_label'
                    ],],
                'second_options' => ['label' => 'Confirmer le mot de passe', 'attr'=>[
                    'class'=>'form-control',
                ], 'label_attr'=>[
                    'class'=> 'form_label mt-3'
                ],],

            ])

            ->add('newPassword',PasswordType::class, [
                'attr'=>['class'=>'form-control'],
                'label' => 'Nouveau mot de passe',
                'label_attr' => ['class'=>'form-label mt-3'],
                'constraints'=> [new Assert\NotBlank()]
            ])

            ->add('Modifier', SubmitType::class,
                ['attr'=> ['class'=>'btn btn-primary mt-4'] ]
            );
    }
}