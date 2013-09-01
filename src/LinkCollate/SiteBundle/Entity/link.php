<?php

namespace LinkCollate\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * link
 */
class link
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $url;

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
    private $viewed;

    /**
     * @var boolean
     */
    private $archived;


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
     * Set url
     *
     * @param string $url
     * @return link
     */
    public function setUrl($url)
    {
        $this->url = $url;
    
        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return link
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
     * @return link
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
     * Set viewed
     *
     * @param boolean $viewed
     * @return link
     */
    public function setViewed($viewed)
    {
        $this->viewed = $viewed;
    
        return $this;
    }

    /**
     * Get viewed
     *
     * @return boolean 
     */
    public function getViewed()
    {
        return $this->viewed;
    }

    /**
     * Set archived
     *
     * @param boolean $archived
     * @return link
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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $tags;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tags = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add tags
     *
     * @param \LinkCollate\SiteBundle\Entity\tag $tags
     * @return link
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
    /**
     * @var \LinkCollate\SiteBundle\Entity\user
     */
    private $user;


    /**
     * Set user
     *
     * @param \LinkCollate\SiteBundle\Entity\user $user
     * @return link
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
    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $favicon;

    /**
     * @var boolean
     */
    private $deleted;


    /**
     * Set title
     *
     * @param string $title
     * @return link
     */
    public function setTitle($title)
    {
        $this->title = $title;
    
        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set favicon
     *
     * @param string $favicon
     * @return link
     */
    public function setFavicon($favicon)
    {
        $this->favicon = $favicon;
    
        return $this;
    }

    /**
     * Get favicon
     *
     * @return string 
     */
    public function getFavicon()
    {
        return $this->favicon;
    }

    /**
     * Set deleted
     *
     * @param boolean $deleted
     * @return link
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;
    
        return $this;
    }

    /**
     * Get deleted
     *
     * @return boolean 
     */
    public function getDeleted()
    {
        return $this->deleted;
    }
}