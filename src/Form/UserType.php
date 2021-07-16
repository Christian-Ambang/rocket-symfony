<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email')
            // ->add('roles')
            ->add('roles', ChoiceType::class, array(
                'choices' => 
                     array
                    (
                        'ROLE_ADMIN' => array
                        (
                            'Yes' => 'ROLE_ADMIN',
                        ),
                         'ROLE_SUPERADMIN' => array
                        (
                            'Yes' => 'ROLE_SUPERADMIN'
                        ),
                    ),
                'multiple' => true,
                'required' => true,
                )
            )
            ->add('password')
            ->add('firstname')
            ->add('lastname')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
