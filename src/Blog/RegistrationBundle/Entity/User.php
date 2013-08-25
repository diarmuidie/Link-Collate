<?php

namespace Blog\RegistrationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 */
class User
{
    /**
     * id
     */
    private $id;

    /**
     * email
     */
    private $email;

    /**
     * plainpassword
     */
    private $plainpassword;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set plainpassword
     *
     * @param string $plainpassword
     * @return User
     */
    public function setPlainpassword($plainpassword)
    {
        $this->plainpassword = $plainpassword;
    
        return $this;
    }

    /**
     * Get plainpassword
     *
     * @return string 
     */
    public function getPlainpassword()
    {
        return $this->plainpassword;
    }
}
