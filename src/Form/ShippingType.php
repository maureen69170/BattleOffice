<?php

namespace App\Form;

use App\Entity\ClientsLivraison;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ShippingType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('premon')
            ->add('nom')
            ->add('adresse')
            ->add('complement_adresse')
            ->add('ville')
            ->add('code_postal')
            ->add('pays')
            ->add('telephone')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => ClientsLivraison::class,
        ]);
    }
}
