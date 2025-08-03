<?php

namespace App\Form;

use App\Entity\Eleve;
use App\Entity\Classe;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EleveType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom',TextType::class,[
                'label' => 'nom comple éleve',
                'attr' => ['placeholder' => 'nom comple éleve',
                'class' => 'form-control form-control-lg'
                ]
            ])
            ->add('matricule',TextType::class,[
                'label' => 'matricule comple éleve',
                'attr' => ['placeholder' => 'matricule comple éleve',
                'class' => 'form-control form-control-lg'
                ]
            ])
            ->add('naissance', DateType::class,[
                'label' => 'Date de naissance de l\'éleve',
                'attr' => ['placeholder' => 'Date de naissance de l\'éleve',
                'class' => 'form-control form-control-lg'
                ]
            ])
            ->add('ville',TextType::class,[
                'label' => 'Ville de residance éleve',
                'attr' => ['placeholder' => 'Ville de residance éleve',
                'class' => 'form-control form-control-lg'
                ]
            ])
            ->add('pere', TextType::class,[
                'label' => 'Nom du pere',
                'attr' => ['placeholder' => 'Nom du pere',
                'class' => 'form-control form-control-lg'
                ]
            ])
            ->add('mere',TextType::class,[
                'label' => 'Nom de la mere',
                'attr' => ['placeholder' => 'Nom de la mere',
                'class' => 'form-control form-control-lg'
                ]
            ])
            ->add('telephone',TextType::class,[
                'label' => 'Numero de téléphone',
                'attr' => ['placeholder' => 'Nom de la téléphone',
                'class' => 'form-control form-control-lg'
                ]
            ])
            ->add('classe', EntityType::class, [
                'class' => Classe::class,
                'choice_label' => 'nom', // Remplacez 'nom' par le champ à afficher
                'placeholder' => 'Sélectionnez une classe',
                'attr' => [
                    'class' => 'form-control form-control-lg',
                ],
            ])
            ->add('sexe',ChoiceType::class,[
                'choices' => [
                    'HOMME' => 'H',
                    'FEMME' => 'F',
                ],
                'placeholder' => 'Sélectionnez un opérateur',
                'required' => true,
                'attr' => [
                    'class' => 'form-control form-control-lg',
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Eleve::class,
        ]);
    }
}
