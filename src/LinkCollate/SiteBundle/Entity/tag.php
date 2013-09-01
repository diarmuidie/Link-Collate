<?php

namespace LinkCollate\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * tag
 */
class tag
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $tag;

    /**
     * @var string
     */
    private $description;

    /**
     * @var \DateTime
     */
    private $added;

    /**
     * @var boolean
     */
    private $archived;

    /**
     * @var boolean
     */
    private $public;


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
     * Set tag
     *
     * @param string $tag
     * @return tag
     */
    public function setTag($tag)
    {
        $this->tag = $tag;
    
        return $this;
    }

    /**
     * Get tag
     *
     * @return string 
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return tag
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set added
     *
     * @param \DateTime $added
     * @return tag
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
     * Set archived
     *
     * @param boolean $archived
     * @return tag
     */
    public function setArchived($archived)
    {
        $this->archived = $archived;
    
        return $this;
    }

    /**
     * Get archived
     *
     * @return boolean 
     */
    public function getArchived()
    {
        return $this->archived;
    }

    /**
     * Set public
     *
     * @param boolean $public
     * @return tag
     */
    public function setPublic($public)
    {
        $this->public = $public;
    
        return $this;
    }

    /**
     * Get public
     *
     * @return boolean 
     */
    public function getPublic()
    {
        return $this->public;
    }
    /**
     * @var string
     */
    private $manyToMany;


    /**
     * Set manyToMany
     *
     * @param string $manyToMany
     * @return tag
     */
    public function setManyToMany($manyToMany)
    {
        $this->manyToMany = $manyToMany;
    
        return $this;
    }

    /**
     * Get manyToMany
     *
     * @return string 
     */
    public function getManyToMany()
    {
        return $this->manyToMany;
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
     * @param \LinkCollate\SiteBundle\Entity\link $links
     * @return tag
     */
    public function addLink(\LinkCollate\SiteBundle\Entity\link $links)
    {
        $this->links[] = $links;
    
        return $this;
    }

    /**
     * Remove links
     *
     * @param \LinkCollate\SiteBundle\Entity\link $links
     */
    public function removeLink(\LinkCollate\SiteBundle\Entity\link $links)
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
    private $users;


    /**
     * Add users
     *
     * @param \LinkCollate\SiteBundle\Entity\user $users
     * @return tag
     */
    public function addUser(\LinkCollate\SiteBundle\Entity\user $users)
    {
        $this->users[] = $users;
    
        return $this;
    }

    /**
     * Remove users
     *
     * @param \LinkCollate\SiteBundle\Entity\user $users
     */
    public function removeUser(\LinkCollate\SiteBundle\Entity\user $users)
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
    /**
     * @var \LinkCollate\SiteBundle\Entity\user
     */
    private $user;


    /**
     * Set user
     *
     * @param \LinkCollate\SiteBundle\Entity\user $user
     * @return tag
     */
    public function setUser(\LinkCollate\SiteBundle\Entity\user $user = null)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return \LinkCollate\SiteBundle\Entity\user 
     */
    public function getUser()
    {
        return $this->user;
    }
}