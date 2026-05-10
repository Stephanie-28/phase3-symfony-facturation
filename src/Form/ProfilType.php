<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ProfilType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('company_name', null, [
                'label' => 'Raison Sociale',
            ])
            ->add('siret', null, [
                'label' => 'Numéro SIRET (Optionnel)',
            ])
            ->add('IBAN', null, [
                'label' => 'IBAN',
            ])
            ->add('CGV', TextareaType::class, [
                'label' => 'Conditions Générales de Vente (CGV)',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
