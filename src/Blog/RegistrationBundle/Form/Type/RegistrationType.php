<?php
// src/Blog/RegistrationBundle/Form/Type/RegistrationType.php
namespace Blog\RegistrationBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('user', new UserType());
        $builder->add('terms','checkbox',array('property_path' => 'termsAccepted'));
        $builder->add('Submit', 'submit');
    }

    public function getName()
    {
        return 'registration';
    }
}