<?php

namespace App\Form;

use App\Entity\Client;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class InscriptionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [ 'label' => 'Nom ',
                'required' => true,
                'attr'=>[
                    'class'=>'form-control',
                ], 'label_attr'=>[
                    'class'=> 'form_label'
                ],
                ] )
            ->add('firstName', TextType::class,  [ 'label' => 'Prenom ',
                'required' => true,
                'attr'=>[
                    'class'=>'form-control',
                ], 'label_attr'=>[
                    'class'=> 'form_label'
                ],
                ])
            ->add('Mail', EmailType::class,  [ 'label' => 'Adresse Email ',
                'required' => true,
                'attr'=>[
                    'class'=>'form-control',
                ], 'label_attr'=>[
                    'class'=> 'form_label'
                ],
                ])
            ->add('adress', TextareaType::class,  [ 'label' => 'Adresse Postale',
                'required' => true,
                'attr'=>[
                    'class'=>'form-control',
                ], 'label_attr'=>[
                    'class'=> 'form_label'
                ],
                ])
            ->add('telephoneNumber', NumberType::class,  [ 'label' => 'Numéro de téléphone',
                'required' => true,
                'attr'=>[
                    'class'=>'form-control',
                ], 'label_attr'=>[
                    'class'=> 'form_label'
                ],
                ])
            ->add('password', RepeatedType::class, [
                'type' => PasswordType::class,
                'invalid_message' => 'The password fields must match.',
                'options' => ['attr' => ['class' => 'password-field']],
                'required' => true,
                'first_options'  => ['label' => 'Password',
                    'attr'=>[
                        'class'=>'form-control',
                    ], 'label_attr'=>[
                        'class'=> 'form_label'
                    ],],

                'second_options' => ['label' => 'Repeat Password', 'attr'=>[
                    'class'=>'form-control',
                ], 'label_attr'=>[
                    'class'=> 'form_label'
                ],],

            ])
            ->add('profilPicture',UrlType::class,  [ 'label' => 'Photo de profil ',
                'required' => false,
                'attr'=>[
                    'class'=>'form-control',
                ], 'label_attr'=>[
                    'class'=> 'form_label'
                ],
                ])

            ->add('HighSchool', TextType::class,  [ 'label' => 'Lycée',
                'required' => true,
                'attr'=>[
                    'class'=>'form-control',
                ], 'label_attr'=>[
                    'class'=> 'form_label'
                ],
                ])
            ->add('submit', SubmitType::class,
                ['attr'=> ['class'=>'btn btn-primary mt-4'] ]

            )
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Client::class,
        ]);
    }
}
