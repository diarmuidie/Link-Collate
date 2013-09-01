<?php

namespace LinkCollate\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * user
 */
class user
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $username;

    /**
     * @var \DateTime
     */
    private $added;

    /**
     * @var boolean
     */
    private $active;

    /**
     * @var \DateTime
     */
    private $lastActive;


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
     * @return user
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
     * Set username
     *
     * @param string $username
     * @return user
     */
    public function setUsername($username)
    {
        $this->username = $username;
    
        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set added
     *
     * @param \DateTime $added
     * @return user
     */
    public function setAdded($added)
    {
        $this->added = $added;
    
        return $this;
    }

    /**
     * Get added
     *
     * @return \DateTime 
     */
    public function getAdded()
    {
        return $this->added;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return user
     */
    public function setActive($active)
    {
        $this->active = $active;
    
        return $this;
    }

    /**
     * Get active
     *
     * @return boolean 
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set lastActive
     *
     * @param \DateTime $lastActive
     * @return user
     */
    public function setLastActive($lastActive)
    {
        $this->lastActive = $lastActive;
    
        return $this;
    }

    /**
     * Get lastActive
     *
     * @return \DateTime 
     */
    public function getLastActive()
    {
        return $this->lastActive;
    }
    /**
     * @var string
     */
    private $manyToOne;


    /**
     * Set manyToOne
     *
     * @param string $manyToOne
     * @return user
     */
    public function setManyToOne($manyToOne)
    {
        $this->manyToOne = $manyToOne;
    
        return $this;
    }

    /**
     * Get manyToOne
     *
     * @return string 
     */
    public function getManyToOne()
    {
        return $this->manyToOne;
    }
    /**
     * @var \LinkCollate\SiteBundle\Entity\role
     */
    private $role;


    /**
     * Set role
     *
     * @param \LinkCollate\SiteBundle\Entity\role $role
     * @return user
     */
    public function setRole(\LinkCollate\SiteBundle\Entity\role $role = null)
    {
        $this->role = $role;
    
        return $this;
    }

    /**
     * Get role
     *
     * @return \LinkCollate\SiteBundle\Entity\role 
     */
    public function getRole()
    {
        return $this->role;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $links;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->links = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add links
     *
     * @param \LinkCollate\SiteBundle\Entity\user $links
     * @return user
     */
    public function addLink(\LinkCollate\SiteBundle\Entity\user $links)
    {
        $this->links[] = $links;
    
        return $this;
    }

    /**
     * Remove links
     *
     * @param \LinkCollate\SiteBundle\Entity\user $links
     */
    public function removeLink(\LinkCollate\SiteBundle\Entity\user $links)
    {
        $this->links->removeElement($links);
    }

    /**
     * Get links
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLinks()
    {
        return $this->links;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $tags;


    /**
     * Add tags
     *
     * @param \LinkCollate\SiteBundle\Entity\tag $tags
     * @return user
     */
    public function addTag(\LinkCollate\SiteBundle\Entity\tag $tags)
    {
        $this->tags[] = $tags;
    
        return $this;
    }

    /**
     * Remove tags
     *
     * @param \LinkCollate\SiteBundle\Entity\tag $tags
     */
    public function removeTag(\LinkCollate\SiteBundle\Entity\tag $tags)
    {
        $this->tags->removeElement($tags);
    }

    /**
     * Get tags
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTags()
    {
        return $this->tags;
    }
}