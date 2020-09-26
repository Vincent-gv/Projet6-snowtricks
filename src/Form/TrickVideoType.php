<?php

namespace App\Form;

use App\Entity\VideoTrick;
use App\Validator\Constraints\VideoUrl;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TrickVideoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('url', UrlVideoType::class, [
                'label' => false,
                'attr' => [
                    'placeholder' => 'Video share link'
                ],
                'constraints' => [
                    new VideoUrl()
                ]
                ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => VideoTrick::class,
        ]);
    }
}
