<?php

namespace CCC\NubeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcSchedulingobjects
 *
 * @ORM\Table(name="oc_schedulingobjects")
 * @ORM\Entity
 */
class OcSchedulingobjects
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="principaluri", type="string", length=255, nullable=true)
     */
    private $principaluri;

    /**
     * @var string
     *
     * @ORM\Column(name="calendardata", type="blob", nullable=true)
     */
    private $calendardata;

    /**
     * @var string
     *
     * @ORM\Column(name="uri", type="string", length=255, nullable=true)
     */
    private $uri;

    /**
     * @var integer
     *
     * @ORM\Column(name="lastmodified", type="integer", nullable=true)
     */
    private $lastmodified;

    /**
     * @var string
     *
     * @ORM\Column(name="etag", type="string", length=32, nullable=true)
     */
    private $etag;

    /**
     * @var integer
     *
     * @ORM\Column(name="size", type="bigint", nullable=false)
     */
    private $size;



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
     * Set principaluri
     *
     * @param string $principaluri
     * @return OcSchedulingobjects
     */
    public function setPrincipaluri($principaluri)
    {
        $this->principaluri = $principaluri;
    
        return $this;
    }

    /**
     * Get principaluri
     *
     * @return string 
     */
    public function getPrincipaluri()
    {
        return $this->principaluri;
    }

    /**
     * Set calendardata
     *
     * @param string $calendardata
     * @return OcSchedulingobjects
     */
    public function setCalendardata($calendardata)
    {
        $this->calendardata = $calendardata;
    
        return $this;
    }

    /**
     * Get calendardata
     *
     * @return string 
     */
    public function getCalendardata()
    {
        return $this->calendardata;
    }

    /**
     * Set uri
     *
     * @param string $uri
     * @return OcSchedulingobjects
     */
    public function setUri($uri)
    {
        $this->uri = $uri;
    
        return $this;
    }

    /**
     * Get uri
     *
     * @return string 
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * Set lastmodified
     *
     * @param integer $lastmodified
     * @return OcSchedulingobjects
     */
    public function setLastmodified($lastmodified)
    {
        $this->lastmodified = $lastmodified;
    
        return $this;
    }

    /**
     * Get lastmodified
     *
     * @return integer 
     */
    public function getLastmodified()
    {
        return $this->lastmodified;
    }

    /**
     * Set etag
     *
     * @param string $etag
     * @return OcSchedulingobjects
     */
    public function setEtag($etag)
    {
        $this->etag = $etag;
    
        return $this;
    }

    /**
     * Get etag
     *
     * @return string 
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * Set size
     *
     * @param integer $size
     * @return OcSchedulingobjects
     */
    public function setSize($size)
    {
        $this->size = $size;
    
        return $this;
    }

    /**
     * Get size
     *
     * @return integer 
     */
    public function getSize()
    {
        return $this->size;
    }
}