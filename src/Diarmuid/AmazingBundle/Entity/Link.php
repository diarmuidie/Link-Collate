<?php

namespace Diarmuid\AmazingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Link
 */
class Link
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $uRL;

    /**
     * @var string
     */
    private $title;


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
     * Set uRL
     *
     * @param string $uRL
     * @return Link
     */
    public function setURL($uRL)
    {
        $this->uRL = $uRL;
    
        return $this;
    }

    /**
     * Get uRL
     *
     * @return string 
     */
    public function getURL()
    {
        return $this->uRL;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Link
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
}
