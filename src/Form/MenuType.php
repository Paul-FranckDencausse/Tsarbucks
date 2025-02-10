<?php
namespace App\Form;

use App\Entity\Menu;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class MenuType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('media', FileType::class, [
                'label' => 'Fichier média',
                'mapped' => false, // Ce champ n'est pas directement lié à l'entité
                'required' => false, // Rend le champ facultatif si nécessaire
            ])
            ->add('name')
            ->add('type')
            ->add('description')
            ->add('allergies')
            ->add('price')
            ->add('isAvailable', CheckboxType::class, [
                'label' => 'Disponible',
                'required' => false, // Facultatif, décoché par défaut
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Menu::class,
        ]);
    }
}
