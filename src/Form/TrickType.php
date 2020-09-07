<?php

namespace App\Form;

use App\Entity\Category;
use App\Entity\Trick;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TrickType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('content')
            ->add('slug', TextType::class, [
                'attr' => [
                    'readonly' => 'readonly'
                ]
            ])
            ->add('category', EntityType::class, [
                'placeholder' => 'Choose a category',
                'class' => Category::class,
                'choice_label' => 'name'
            ])
            ->add('images', CollectionType::class, [
                'allow_add' => true,
                'entry_type' => TrickImageType::class,
                'by_reference' => false,
                'label' => false,
                'allow_delete' => true,
                'attr' => [
                    'class' => 'collection',
                ],
                'entry_options' => [
                    'attr' => [
                        'class' => 'collection_element'
                    ]
                ]
            ])
            ->add('videos', CollectionType::class, [
                'label' => false,
                'entry_type' => TrickVideoType::class,
                'by_reference' => false,
                'allow_add' => true,
                'allow_delete' => true,
                'attr' => [
                    'class' => 'collection',
                ],
                'entry_options' => [
                    'attr' => [
                        'class' => 'collection_element'
                    ]
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Trick::class,
        ]);
    }
}
