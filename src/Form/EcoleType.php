<?php

namespace App\Form;

use App\Entity\Ecole;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EcoleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom',TextType::class, [
                'label' => 'Nom de l\'école',
                'attr' => ['placeholder' => 'Entrez le nom de l\'école',
                           'class' => 'form-control form-control-lg']
            ])
            ->add('sigle', TextType::class, [
                'label' => 'Sigle de l\'école',
                'attr' => ['placeholder' => 'Entrez le sigle de l\'école',
                           'class' => 'form-control form-control-lg']
            ])
            ->add('type',TextType::class, [
                'label' => 'Type d\'école',
                'attr' => ['placeholder' => 'Entrez le type de l\'école',
                           'class' => 'form-control form-control-lg']
            ])
            ->add('code', TextType::class, [
                'label' => 'Code de l\'école',
                'attr' => ['placeholder' => 'Entrez le code de l\'école',
                           'class' => 'form-control form-control-lg']
            ])
            ->add('createAt', DateType::class, [
                'label' => 'Date de création',
                'widget' => 'single_text',
                'attr' => ['class' => 'form-control form-control-lg']
            ])
            ->add('adresses',TextType::class, [
                'label' => 'Adresse de l\'école',
                'attr' => ['placeholder' => 'Entrez l\'adresse de l\'école',
                           'class' => 'form-control form-control-lg']
            ])
            ->add('telephone', TextType::class, [
                'label' => 'Numéro de téléphone',
                'attr' => ['placeholder' => 'Entrez le numéro de téléphone',
                           'class' => 'form-control form-control-lg']
            ])
            ->add('departement', TextType::class, [
                'label' => 'Département',
                'attr' => ['placeholder' => 'Entrez le département',
                           'class' => 'form-control form-control-lg']
            ])
            ->add('region',TextType::class, [
                'label' => 'Région',
                'attr' => ['placeholder' => 'Entrez la région',
                           'class' => 'form-control form-control-lg']
            ])
            ->add('directeur',TextType::class, [
                'label' => 'Nom du directeur',
                'attr' => ['placeholder' => 'Entrez le nom du directeur',
                           'class' => 'form-control form-control-lg']
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Ecole::class,
        ]);
    }
}
