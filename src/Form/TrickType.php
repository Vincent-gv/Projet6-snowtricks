<?php

namespace App\Form;

use App\Entity\Category;
use App\Entity\Trick;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TrickType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('content')
            ->add('slug')
            ->add('category', EntityType::class, [
                'placeholder' => 'Choose a category',
                'class' => Category::class,
                'choice_label' => 'name'
            ])
            ->add('user', EntityType::class, [
                'placeholder' => 'Choose a user',
                'class' => User::class,
                'choice_label' => 'username'
            ])
            ->add('images', CollectionType::class, [
                'entry_type' => TrickImageType::class,
                'by_reference' => false,
                'allow_add' => true
            ])
//            ->add('video', FileType::class,
//                array(
//                    'data_class' => null,
//                    'mapped' => false,
//                    )
//            )
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Trick::class,
        ]);
    }
}
