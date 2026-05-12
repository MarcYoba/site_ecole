<?php

namespace App\Form;

use App\Entity\Matiere;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MatiereType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('note',NumberType::class, [
                'label' => 'Note',
                'required' => true,
                'attr' => [
                    'min' => 0,
                    'max' => 20,
                    'step' => 0.01,
                    'class' => 'form-control',
                    'placeholder' => 'Entrez la note (0-20)',
                ],
            ])
            ->add('nom',TextType::class, [
                'label' => 'Nom de la matière',
                'required' => true,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Entrez le nom de la matière',
                ],
            ])
            ->add('coefficient', NumberType::class, [
                'label' => 'Coefficient',
                'required' => true,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Entrez le coefficient',
                ],
            ])
            ->add('createtAt', DateType::class, [
                'widget' => 'single_text',
                'label' => 'Date de création',
                'required' => true,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Entrez la date de création',
                ],
            ])
            ->add('grouppe', ChoiceType::class, [
                'label' => 'Groupe',
                'choices' => [
                    'Groupe A' => 'groupe_a',
                    'Groupe B' => 'groupe_b',
                    'Groupe C' => 'groupe_c',
                    'Groupe D' => 'groupe_D',
                    'Groupe E' => 'groupe_e',
                    'Groupe F' => 'groupe_F',
                    'Groupe H' => 'groupe_h',

                ],
                'required' => true,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Entrez le groupe',
                ],
            ])
            ->add('description', TextType::class, [
                'label' => 'Description',
                'required' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Entrez la description',
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Matiere::class,
        ]);
    }
}
