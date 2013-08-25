<?php

namespace Blog\RegistrationBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('email');
        $builder->add('plainPassword','repeated',
            array(
                'first_name'  => 'password',
                'second_name' => 'confirm',
                'type'        => 'password',
            )
        );
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(
            array(
                'data_class' => 'Blog\RegistrationBundle\Entity\User'
            )
        );
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'blog_registrationbundle_usertype';
    }
}
