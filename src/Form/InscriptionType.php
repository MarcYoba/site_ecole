<?php

namespace App\Form;

use App\Entity\Classe;
use App\Entity\Eleve;
use App\Entity\Inscription;
use BcMath\Number;
use Dom\Entity;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class InscriptionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('createtAt', DateType::class, [
                'label' => 'Date d\'inscription',
                'widget' => 'single_text',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Sélectionnez une date',
                ],
            ])
            ->add('montant', NumberType::class, [
                'label' => 'Montant de l\'inscription',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Entrez le montant',
                ],
            ])
            ->add('avance', NumberType::class, [
                'label' => 'Montant de l\'inscription avancé',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Entrez le montant avancé',
                ],
            ])
            ->add('reste', NumberType::class, [
                'label' => 'Montant de l\'inscription restant',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Entrez le montant restant',
                ],
            ])
            ->add('paiement', ChoiceType::class, [
                'label' => 'Mode de paiement',
                'choices' => [
                    'Espèces' => 'especes',
                    'Chèque' => 'cheque',
                    'Virement bancaire' => 'virement',
                    'OM' => 'OM',
                    'MOMO' => 'MOMO',
                ],
                'attr' => [
                    'class' => 'form-control',
                ],
            ])
            ->add('eleve', EntityType::class, [
                'class' => Eleve::class,
                'choice_label' => 'nom',
                'label' => 'Élève',
                'attr' => [
                    'class' => 'form-control',
                ],
            ])
            ->add('classe', EntityType::class, [
                'class' => Classe::class,
                'choice_label' => 'nom',
                'label' => 'Classe',
                'attr' => [
                    'class' => 'form-control',
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Inscription::class,
        ]);
    }
}
