<?php

namespace CCC\NubeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcFilesTrash
 *
 * @ORM\Table(name="oc_files_trash")
 * @ORM\Entity
 */
class OcFilesTrash
{
    /**
     * @var integer
     *
     * @ORM\Column(name="auto_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $autoId;

    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=250, nullable=false)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="user", type="string", length=64, nullable=false)
     */
    private $user;

    /**
     * @var string
     *
     * @ORM\Column(name="timestamp", type="string", length=12, nullable=false)
     */
    private $timestamp;

    /**
     * @var string
     *
     * @ORM\Column(name="location", type="string", length=512, nullable=false)
     */
    private $location;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=4, nullable=true)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="mime", type="string", length=255, nullable=true)
     */
    private $mime;



    /**
     * Get autoId
     *
     * @return integer 
     */
    public function getAutoId()
    {
        return $this->autoId;
    }

    /**
     * Set id
     *
     * @param string $id
     * @return OcFilesTrash
     */
    public function setId($id)
    {
        $this->id = $id;
    
        return $this;
    }

    /**
     * Get id
     *
     * @return string 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set user
     *
     * @param string $user
     * @return OcFilesTrash
     */
    public function setUser($user)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return string 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set timestamp
     *
     * @param string $timestamp
     * @return OcFilesTrash
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;
    
        return $this;
    }

    /**
     * Get timestamp
     *
     * @return string 
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Set location
     *
     * @param string $location
     * @return OcFilesTrash
     */
    public function setLocation($location)
    {
        $this->location = $location;
    
        return $this;
    }

    /**
     * Get location
     *
     * @return string 
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return OcFilesTrash
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set mime
     *
     * @param string $mime
     * @return OcFilesTrash
     */
    public function setMime($mime)
    {
        $this->mime = $mime;
    
        return $this;
    }

    /**
     * Get mime
     *
     * @return string 
     */
    public function getMime()
    {
        return $this->mime;
    }
}