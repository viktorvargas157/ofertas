<?php

namespace CCC\NubeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcCalendarobjects
 *
 * @ORM\Table(name="oc_calendarobjects")
 * @ORM\Entity
 */
class OcCalendarobjects
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
     * @ORM\Column(name="calendarid", type="integer", nullable=false)
     */
    private $calendarid;

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
     * @var string
     *
     * @ORM\Column(name="componenttype", type="string", length=8, nullable=true)
     */
    private $componenttype;

    /**
     * @var integer
     *
     * @ORM\Column(name="firstoccurence", type="bigint", nullable=true)
     */
    private $firstoccurence;

    /**
     * @var integer
     *
     * @ORM\Column(name="lastoccurence", type="bigint", nullable=true)
     */
    private $lastoccurence;

    /**
     * @var string
     *
     * @ORM\Column(name="uid", type="string", length=255, nullable=true)
     */
    private $uid;

    /**
     * @var integer
     *
     * @ORM\Column(name="classification", type="integer", nullable=true)
     */
    private $classification;



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
     * Set calendardata
     *
     * @param string $calendardata
     * @return OcCalendarobjects
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
     * @return OcCalendarobjects
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
     * Set calendarid
     *
     * @param integer $calendarid
     * @return OcCalendarobjects
     */
    public function setCalendarid($calendarid)
    {
        $this->calendarid = $calendarid;
    
        return $this;
    }

    /**
     * Get calendarid
     *
     * @return integer 
     */
    public function getCalendarid()
    {
        return $this->calendarid;
    }

    /**
     * Set lastmodified
     *
     * @param integer $lastmodified
     * @return OcCalendarobjects
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
     * @return OcCalendarobjects
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
     * @return OcCalendarobjects
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

    /**
     * Set componenttype
     *
     * @param string $componenttype
     * @return OcCalendarobjects
     */
    public function setComponenttype($componenttype)
    {
        $this->componenttype = $componenttype;
    
        return $this;
    }

    /**
     * Get componenttype
     *
     * @return string 
     */
    public function getComponenttype()
    {
        return $this->componenttype;
    }

    /**
     * Set firstoccurence
     *
     * @param integer $firstoccurence
     * @return OcCalendarobjects
     */
    public function setFirstoccurence($firstoccurence)
    {
        $this->firstoccurence = $firstoccurence;
    
        return $this;
    }

    /**
     * Get firstoccurence
     *
     * @return integer 
     */
    public function getFirstoccurence()
    {
        return $this->firstoccurence;
    }

    /**
     * Set lastoccurence
     *
     * @param integer $lastoccurence
     * @return OcCalendarobjects
     */
    public function setLastoccurence($lastoccurence)
    {
        $this->lastoccurence = $lastoccurence;
    
        return $this;
    }

    /**
     * Get lastoccurence
     *
     * @return integer 
     */
    public function getLastoccurence()
    {
        return $this->lastoccurence;
    }

    /**
     * Set uid
     *
     * @param string $uid
     * @return OcCalendarobjects
     */
    public function setUid($uid)
    {
        $this->uid = $uid;
    
        return $this;
    }

    /**
     * Get uid
     *
     * @return string 
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Set classification
     *
     * @param integer $classification
     * @return OcCalendarobjects
     */
    public function setClassification($classification)
    {
        $this->classification = $classification;
    
        return $this;
    }

    /**
     * Get classification
     *
     * @return integer 
     */
    public function getClassification()
    {
        return $this->classification;
    }
}