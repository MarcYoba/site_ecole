<?php

namespace App\Form;

use App\Entity\Eleve;
use App\Entity\Matiere;
use App\Entity\Note;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class NoteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('moyenne',NumberType::class, [
                'label' => 'Moyenne',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Entrez la moyenne',
                ],
            ])
            ->add('createtAt',DateType::class, [
                'label' => 'Date de création',
                'widget' => 'single_text',
                'attr' => [
                    'class' => 'form-control',
                ],
            ])
            ->add('eleve',EntityType::class,[
                'class' => Eleve::class,
                'choice_label' => 'nom',
                'label' => 'Élève',
                'attr' => [
                    'class' => 'form-control',
                ],
            ])
            ->add('matiere',EntityType::class,[
                'class' => Matiere::class,
                'choice_label' => 'nom',
                'label' => 'Matière',
                'attr' => [
                    'class' => 'form-control',
                ],
            ])
            ->add('sequence',ChoiceType::class, [
                'label' => 'Séquence',
                'choices' => [
                    'Séquence 1' => 'sequence1',
                    'Séquence 2' => 'sequence2',
                    'Séquence 3' => 'sequence3',
                    'Séquence 4' => 'sequence4',
                    'Séquence 5' => 'sequence5',
                    'Séquence 6' => 'sequence6',
                    'Séquence 7' => 'sequence7',
                    'Séquence 8' => 'sequence8',
                    'Séquence 9' => 'sequence9',
                ],
                'attr' => [
                    'class' => 'form-control',
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Note::class,
        ]);
    }
}
