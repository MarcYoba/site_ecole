<?php

namespace App\Form;

use App\Entity\Caisse;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class CaisseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('libelle', TextType::class, [
                'label' => 'Libellé',
                'attr' => [
                    'placeholder' => 'Entrez le libellé de la transaction',
                    'class' => 'form-control form-control-lg',
                ],
            ])
            ->add('montant', TextType::class, [
                'label' => 'Montant',
                'attr' => [
                    'placeholder' => 'Entrez le montant de la transaction',
                    'class' => 'form-control form-control-lg',
                ],
            ])
            ->add('createtAt', DateType::class, [
                'widget' => 'single_text',
                'label' => 'Date de création',
                'attr' => [
                    'placeholder' => 'Entrez la date de création',
                    'class' => 'form-control form-control-lg',
                ],
            ])
            ->add('operation', ChoiceType::class, [
                'label' => 'Opération',
                'attr' => [
                    'placeholder' => 'Entrez l\'opération',
                    'class' => 'form-control form-control-lg',
                ],
                'choices' => [
                    'Entrée' => 'entree',
                    'Sortie' => 'sortie',
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Caisse::class,
        ]);
    }
}
