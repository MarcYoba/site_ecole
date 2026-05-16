<?php

namespace App\Form;

use App\Entity\Classe;
use App\Entity\Eleve;
use App\Entity\Solde;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SoldeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('montant',NumberType::class, [
                'label' => 'Montant Total',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Entrez le montant',
                ],
            ])
            ->add('avance',NumberType::class, [
                'label' => 'Avance Montant',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Entrez le montant',
                ],
            ])
            ->add('reste',NumberType::class, [
                'label' => 'Reste Montant',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Entrez le montant',
                ],
            ])
            ->add('createtAt',DateType::class, [
                'label' => 'Date de création',
                'widget' => 'single_text',
                'attr' => [
                    'class' => 'form-control',
                ],
            ])
            ->add('typepaiement',ChoiceType::class, [
                'label' => 'Type de paiement',
                'choices' => [
                    'CASH' => 'CASH',
                    'OM' => 'Orange Mony',
                    'MOMO' => 'Mobil mony',
                    'BANQUE' => 'BANQUE',
                ],
                'attr' => [
                    'class' => 'form-control',
                ],
            ])
            ->add('tranche',ChoiceType::class, [
                'label' => 'Tranche',
                'choices' => [
                    'Tranche_1' => 'Tranche 1',
                    'Tranche_2' => 'Tranche 2',
                    'Tranche_3' => 'Tranche 3',
                    'Tranche_4' => 'Tranche 4',
                    'Tranche_unique' => 'Tranche unique',
                ],
                'attr' => [
                    'class' => 'form-control',
                ],
            ])
            ->add('eleve',EntityType::class, [
                'class' => Eleve::class,
                'choice_label' => 'nom',
                'label' => 'Élève',
                'attr' => [
                    'class' => 'form-control',
                ],
            ],)
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
            'data_class' => Solde::class,
        ]);
    }
}
