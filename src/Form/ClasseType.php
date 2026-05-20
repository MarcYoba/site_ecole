<?php

namespace App\Form;

use App\Entity\Classe;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ClasseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'label' => 'Nom de la classe',
                'attr' => ['placeholder' => 'Entrez le nom de la classe',
                           'class' => 'form-control form-control-lg']
            ])
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
            ->add('description', TextType::class, [
                'label' => 'Description de la classe',
                'attr' => ['placeholder' => 'Entrez la description de la classe',
                           'class' => 'form-control form-control-lg']
            ])
            ->add('capacite', NumberType::class, [
                'label' => 'Effectif de la classe',
                'attr' => ['placeholder' => 'Entrez la Effectif de la classe',
                           'class' => 'form-control form-control-lg']
            ])
            ->add('cession', ChoiceType::class, [
                'label' => 'cession',
                'choices' => [
                    'anglophones' => 'anglophones',
                    'francophones' => 'francophones',
                ],
                'attr' => [
                    'class' => 'form-control',
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Classe::class,
        ]);
    }
}
