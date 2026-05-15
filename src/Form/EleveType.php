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
            ->add('prenom',TextType::class,[
                'label' => 'prenom de éleve',
                'attr' => ['placeholder' => 'prenom comple éleve',
                'class' => 'form-control form-control-lg'
                ]
            ])
            ->add('matricule',TextType::class,[
                'label' => 'matricule de éleve',
                'attr' => ['placeholder' => 'matricule comple éleve',
                'class' => 'form-control form-control-lg',
                'readonly' => true,
                ]
            ])
            ->add('naissance', DateType::class,[
                'label' => 'Date de naissance',
                'widget' => 'single_text',
                'attr' => ['placeholder' => 'Date de naissance',
                'class' => 'form-control form-control-lg'
                ]
            ])
            ->add('ville',TextType::class,[
                'label' => 'Ville de residance',
                'attr' => ['placeholder' => 'Ville de residance',
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
                'label' => 'téléphone pere',
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
            ->add('age',TextType::class,[
                'label' => 'Age de l\'éleve',
                'attr' => ['placeholder' => 'Age de l\'éleve',
                'class' => 'form-control form-control-lg'
                ]
            ])
            ->add('lieu',TextType::class,[
                'label' => 'Lieu de naissance',
                'attr' => ['placeholder' => 'Lieu de naissance',
                'class' => 'form-control form-control-lg'
                ]
            ])
            ->add('autoriseMere',ChoiceType::class,[
                'label' => 'Autorisation mère',
                'choices' => [
                    'Oui' => 'Oui',
                    'Non' => 'Non',
                ],
                'placeholder' => 'Autorisation de la mère',
                'required' => true,
                'attr' => [
                    'class' => 'form-control form-control-lg',
                ],
            ])
            ->add('autorisePere',ChoiceType::class,[
                'label' => 'Autorisation père',
                'choices' => [
                    'Oui' => 'Oui',
                    'Non' => 'Non',
                ],
                'placeholder' => 'Autorisation du père',
                'required' => true,
                'attr' => [
                    'class' => 'form-control form-control-lg',
                ],
            ])
            ->add('professionMere',TextType::class,[
                'label' => 'Profession mère',
                'attr' => ['placeholder' => 'Profession de la mère',
                'class' => 'form-control form-control-lg'
                ]
            ])
            ->add('professionPere',TextType::class,[
                'label' => 'Profession du père',
                'attr' => ['placeholder' => 'Profession du père',
                'class' => 'form-control form-control-lg'
                ]
            ])
            ->add('telephoneMere',TextType::class,[
                'label' => 'Téléphone mère',
                'attr' => ['placeholder' => 'Téléphone de la mère',
                'class' => 'form-control form-control-lg'
                ]
            ])
            ->add('autreResponsable',TextType::class,[
                'label' => 'Nom autre responsable',
                'attr' => ['placeholder' => 'Nom de l\'autre responsable',
                'class' => 'form-control form-control-lg'
                ]
            ])
            ->add('fonction',TextType::class,[
                'label' => 'Fonction de l\'autre responsable',
                'attr' => ['placeholder' => 'Fonction de l\'autre responsable',
                'class' => 'form-control form-control-lg'
                ]
            ])
            ->add('telephoneResponsable',TextType::class,[
                'label' => 'Téléphone autre responsable',
                'attr' => ['placeholder' => 'Téléphone de l\'autre responsable',
                'class' => 'form-control form-control-lg'
                ]
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
