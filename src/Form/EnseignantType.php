<?php

namespace App\Form;

use App\Entity\Enseignant;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EnseignantType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom',TextType::class,[
                'label' => 'nom enseignant',
                'attr' => ['placeholder' => 'nom enseignant',
                'class' => 'form-control form-control-lg'
                ]
            ])
            ->add('prenom',TextType::class,[
                'label' => 'prenom enseignant',
                'attr' => ['placeholder' => 'prenom enseignant',
                'class' => 'form-control form-control-lg'
                ]
            ])
            ->add('dateNaissance', DateType::class, [
                'widget' => 'single_text',
                'label' => 'Date de naissance',
                'attr' => ['placeholder' => 'Date de naissance',
                    'class' => 'form-control form-control-lg'
                ]
            ])
            ->add('genre',ChoiceType::class, [
                'label' => 'Genre',
                'choices' => [
                    'Masculin' => 'Masculin',
                    'Féminin' => 'Féminin',
                    'Autre' => 'Autre',
                ],
                'attr' => ['class' => 'form-control form-control-lg']
            ])
            ->add('matricule',TextType::class, [
                'label' => 'Matricule',
                'attr' => ['placeholder' => 'Matricule',
                    'class' => 'form-control form-control-lg'
                ]
            ])
            ->add('dateEmbauche', DateType::class, [
                'widget' => 'single_text',
                'label' => 'Date d\'embauche',
                'attr' => ['placeholder' => 'Date d\'embauche',
                    'class' => 'form-control form-control-lg'
                ]
            ])
            ->add('specialite', TextType::class, [
                'label' => 'Spécialité',
                'attr' => ['placeholder' => 'Spécialité',
                    'class' => 'form-control form-control-lg'
                ]
            ])
            ->add('grade', TextType::class, [
                'label' => 'Grade',
                'attr' => ['placeholder' => 'Grade',
                    'class' => 'form-control form-control-lg'
                ]
            ])
            ->add('contrat', ChoiceType::class, [
                'label' => 'Contrat',
                'choices' => [
                    'CDD' => 'CDD',
                    'CDI' => 'CDI',
                    'Intérim' => 'Intérim',
                    'Freelance' => 'Freelance',
                    'NON' => "PAS DE CONTRAT",
                ],
                'attr' => ['class' => 'form-control form-control-lg']
            ])
            ->add('statut', TextType::class, [
                'label' => 'Statut',
                'attr' => ['placeholder' => 'Statut',
                    'class' => 'form-control form-control-lg'
                ]
            ])
            ->add('contact', TextType::class, [
                'label' => 'Contact',
                'attr' => ['placeholder' => 'Contact',
                    'class' => 'form-control form-control-lg'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Enseignant::class,
        ]);
    }
}
