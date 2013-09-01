<?php

namespace LinkCollate\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * role
 */
class role
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $role;


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
     * Set name
     *
     * @param string $name
     * @return role
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set role
     *
     * @param string $role
     * @return role
     */
    public function setRole($role)
    {
        $this->role = $role;
    
        return $this;
    }

    /**
     * Get role
     *
     * @return string 
     */
    public function getRole()
    {
        return $this->role;
    }
    /**
     * @var string
     */
    private $oneToMany;


    /**
     * Set oneToMany
     *
     * @param string $oneToMany
     * @return role
     */
    public function setOneToMany($oneToMany)
    {
        $this->oneToMany = $oneToMany;
    
        return $this;
    }

    /**
     * Get oneToMany
     *
     * @return string 
     */
    public function getOneToMany()
    {
        return $this->oneToMany;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $users;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->users = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add users
     *
     * @param \LinkCollate\SiteBundle\Entity\role $users
     * @return role
     */
    public function addUser(\LinkCollate\SiteBundle\Entity\role $users)
    {
        $this->users[] = $users;
    
        return $this;
    }

    /**
     * Remove users
     *
     * @param \LinkCollate\SiteBundle\Entity\role $users
     */
    public function removeUser(\LinkCollate\SiteBundle\Entity\role $users)
    {
        $this->users->removeElement($users);
    }

    /**
     * Get users
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUsers()
    {
        return $this->users;
    }
}