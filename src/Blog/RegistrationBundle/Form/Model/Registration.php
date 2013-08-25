<?php
// src/Blog/RegistrationBundle/Form/Model/Registration.php
namespace Blog\RegistrationBundle\Form\Model;

use Symfony\Component\Validator\Constraints as Assert;

use Blog\RegistrationBundle\Entity\User;

class Registration
{
    protected $user;

    protected $termsAccepted;

    public function setUser(User $user)
    {
        $this->user = $user;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function getTermsAccepted()
    {
        return $this->termsAccepted;
    }

    public function setTermsAccepted($termsAccepted)
    {
        $this->termsAccepted = (Boolean) $termsAccepted;
    }
}