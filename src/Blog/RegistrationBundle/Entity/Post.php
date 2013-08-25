<?php

namespace Blog\RegistrationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Post
 */
class Post
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $postText;

    /**
     * @var integer
     */
    private $addedBy;

    /**
     * @var boolean
     */
    private $published;

    /**
     * @var boolean
     */
    private $deleted;


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
     * Set postText
     *
     * @param string $postText
     * @return Post
     */
    public function setPostText($postText)
    {
        $this->postText = $postText;
    
        return $this;
    }

    /**
     * Get postText
     *
     * @return string 
     */
    public function getPostText()
    {
        return $this->postText;
    }

    /**
     * Set addedBy
     *
     * @param integer $addedBy
     * @return Post
     */
    public function setAddedBy($addedBy)
    {
        $this->addedBy = $addedBy;
    
        return $this;
    }

    /**
     * Get addedBy
     *
     * @return integer 
     */
    public function getAddedBy()
    {
        return $this->addedBy;
    }

    /**
     * Set publish
     *
     * @param boolean $publish
     * @return Post
     */
    public function setPublished($publish)
    {
        $this->published = $publish;
    
        return $this;
    }

    /**
     * Get publish
     *
     * @return boolean 
     */
    public function getPublished()
    {
        return $this->published;
    }

    /**
     * Set deleted
     *
     * @param boolean $deleted
     * @return Post
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
