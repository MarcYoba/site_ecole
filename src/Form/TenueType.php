<?php

namespace App\Form;

use App\Entity\Eleve;
use App\Entity\Tenue;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TenueType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('montant',NumberType::class,[
                'scale' => 2,
                'grouping' => true,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Montant de la tenue',
                ],
            ])
            ->add('createtAt',DateType::class,[
                'widget' => 'single_text',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Date de création de la tenue',
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
            ->add('typepaiement',ChoiceType::class,[
                'choices' => [
                    'Espèce' => 'Espèce',
                    'Chèque' => 'Chèque',
                    'OM' => 'OM',
                    'MOMO' => 'MOMO',
                ],
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Type de paiement',
                ],
            ])
            ->add('typetenue',ChoiceType::class,[
                'choices' => [
                    'Tenue classe' => 'TC',
                    'Tenue sport' => 'TS',
                    'Pulle' => 'TP',
                    'Tenue classe et sport' => 'TCS',
                    'Tenue classe et pulle' => 'TCP',
                    'Tenue sport et pulle' => 'TSP',
                    'Tenue classe, sport et pulle' => 'TCSP',

                ],
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Type de tenue',
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Tenue::class,
        ]);
    }
}
