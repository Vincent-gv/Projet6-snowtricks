<?php

namespace App\Form;

use App\Entity\Trick;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TrickType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('slug')
            ->add('content')
            ->add('user:name')
            ->add('category:name', ChoiceType::class, [
                'choices' => [
                    '' => 'Choose a category',
                    'Regular' => 'Regular',
                    'Goofy' => 'Goofy',
                    'Switch-stance' => 'Switch-stance',
                    'Fakie' => 'Fakie',
                    'Frontside' => 'Frontside',
                    'Backside' => 'Backside'
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Trick::class,
        ]);
    }
}
