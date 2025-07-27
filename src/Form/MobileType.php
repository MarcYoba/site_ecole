<?php

namespace App\Form;

use App\Entity\Mobile;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MobileType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('operateur', ChoiceType::class, [
                'choices' => [
                    'MTN' => 'mtn',
                    'Orange' => 'orange',
                ],
                'placeholder' => 'Sélectionnez un opérateur',
                'required' => true,
                'attr' => [
                    'class' => 'form-control form-control-lg',
                ],
            ])
            ->add('telephone', TextType::class,[
                'label' => 'Numéro de téléphone',
                'attr' => ['placeholder' => 'Entrez le numéro de téléphone',
                           'class' => 'form-control form-control-lg']
            ])
            ->add('nom', TextType::class, [
                'label' => 'Nom utiliser pour le depot',
                'attr' => ['placeholder' => 'Entrez votre nom',
                           'class' => 'form-control form-control-lg']
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Mobile::class,
        ]);
    }
}
