<?php

namespace App\Form;

use App\Entity\Pensiont;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PensiontType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('niveau', ChoiceType::class, [
                'label' => 'Niveau de la classe',
                'choices' => [
                    'Maternelle' => '1',
                    'Primaire' => '2',
                ],
                'attr' => [
                    'class' => 'form-control',
                ],
            ])
            ->add('montant', NumberType::class, [
                'label' => 'Montant de l\'inscription',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Entrez le montant',
                ],
            ])
            ->add('createtAt', DateType::class, [
                'label' => 'Date d\'inscription',
                'widget' => 'single_text',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Sélectionnez une date',
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Pensiont::class,
        ]);
    }
}
