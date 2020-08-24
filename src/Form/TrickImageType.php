<?php

namespace App\Form;

use App\Entity\ImageTrick;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TrickImageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('file', FileType::class, [
                'label' => false,
                'attr' => [
                    'class' => ' input-upload',
                    'block_name' => 'custom_name']
            ])
            ->add('alt', TextType::class, [
                'label' => false,
                'attr' => [
                    'placeholder' => 'Alternate text for image',
                    'class' => 'form-control'
                ]]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => ImageTrick::class,
        ]);
    }
}
