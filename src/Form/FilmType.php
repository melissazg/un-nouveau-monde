<?php

namespace App\Form;

use App\Entity\Film;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Url;

class FilmType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Nom',
                'label_attr' => [
                    'class' => 'form-label mt-4'
                ],
            ])
            ->add('realisateur', TextType::class, [
                'label' => 'Realisateur',
                'label_attr' => [
                    'class' => 'form-label mt-4'
                ],
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description',
                'label_attr' => [
                    'class' => 'form-label mt-4'
                ],
            ])
            ->add('duree', TimeType::class, [
                'label' => 'duree',
                'label_attr' => [
                    'class' => 'form-label mt-4'
                ],
                'widget' => 'choice',
                'minutes' => [0, 15, 30, 45],
                'hours' => range(0, 3),
                'attr' => [
                    'class' => 'form-control'
                ],
                'constraints' => [
                    new NotBlank()
                ]
            ])
            ->add('genre')
            ->add('date', DateType::class, [
                'label' => 'date',
                'label_attr' => [
                    'class' => 'form-label mt-4'
                ],
                'widget' => 'single_text',
                'attr' => [
                    'class' => 'form-control'
                ],
                'constraints' => [
                    new NotBlank()
                ]
            ])
            ->add('acteursPrincipaux', TextareaType::class, [
                'label' => 'Acteurs',
                'label_attr' => [
                    'class' => 'form-label mt-4'
                ]
            ])
            ->add('iframePath', UrlType::class, [
                'label' => 'Lien d\'intégration',
                'label_attr' => [
                    'class' => 'form-label mt-4'
                ],
                'attr' => [
                    'class' => 'form-control'
                ],
                'constraints' => [
                    new NotBlank(),
                    new Url()
                ]
            ])
            ->add('submit', SubmitType::class, [
                'attr' => [
                    'class' => 'btn btn-primary'
                ],
                'label' => 'Ajouter un film'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Film::class,
        ]);
    }
}
