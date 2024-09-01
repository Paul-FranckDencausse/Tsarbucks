<?php
// src/Form/ActivityReservationType.php

namespace App\Form;

use App\Entity\ActivityReservation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;

class ActivityReservationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('activity', ChoiceType::class, [
                'choices' => [
                    'Latte Art' => 'Latte Art',
                    'Barista Training' => 'Barista Training',
                    'Roasting' => 'Roasting',
                ],
                'label' => 'Choose Activity',
            ])
            ->add('reservationDate', DateTimeType::class, [
                'widget' => 'single_text',
                'label' => 'Reservation Date',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ActivityReservation::class,
        ]);
    }
}
