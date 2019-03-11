<?php

namespace CCC\NubeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcCalendars
 *
 * @ORM\Table(name="oc_calendars")
 * @ORM\Entity
 */
class OcCalendars
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
     * @ORM\Column(name="displayname", type="string", length=255, nullable=true)
     */
    private $displayname;

    /**
     * @var string
     *
     * @ORM\Column(name="uri", type="string", length=255, nullable=true)
     */
    private $uri;

    /**
     * @var integer
     *
     * @ORM\Column(name="synctoken", type="integer", nullable=false)
     */
    private $synctoken;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="calendarorder", type="integer", nullable=false)
     */
    private $calendarorder;

    /**
     * @var string
     *
     * @ORM\Column(name="calendarcolor", type="string", length=255, nullable=true)
     */
    private $calendarcolor;

    /**
     * @var string
     *
     * @ORM\Column(name="timezone", type="text", nullable=true)
     */
    private $timezone;

    /**
     * @var string
     *
     * @ORM\Column(name="components", type="string", length=20, nullable=true)
     */
    private $components;

    /**
     * @var integer
     *
     * @ORM\Column(name="transparent", type="smallint", nullable=false)
     */
    private $transparent;



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
     * @return OcCalendars
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
     * Set displayname
     *
     * @param string $displayname
     * @return OcCalendars
     */
    public function setDisplayname($displayname)
    {
        $this->displayname = $displayname;
    
        return $this;
    }

    /**
     * Get displayname
     *
     * @return string 
     */
    public function getDisplayname()
    {
        return $this->displayname;
    }

    /**
     * Set uri
     *
     * @param string $uri
     * @return OcCalendars
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
     * Set synctoken
     *
     * @param integer $synctoken
     * @return OcCalendars
     */
    public function setSynctoken($synctoken)
    {
        $this->synctoken = $synctoken;
    
        return $this;
    }

    /**
     * Get synctoken
     *
     * @return integer 
     */
    public function getSynctoken()
    {
        return $this->synctoken;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return OcCalendars
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
     * Set calendarorder
     *
     * @param integer $calendarorder
     * @return OcCalendars
     */
    public function setCalendarorder($calendarorder)
    {
        $this->calendarorder = $calendarorder;
    
        return $this;
    }

    /**
     * Get calendarorder
     *
     * @return integer 
     */
    public function getCalendarorder()
    {
        return $this->calendarorder;
    }

    /**
     * Set calendarcolor
     *
     * @param string $calendarcolor
     * @return OcCalendars
     */
    public function setCalendarcolor($calendarcolor)
    {
        $this->calendarcolor = $calendarcolor;
    
        return $this;
    }

    /**
     * Get calendarcolor
     *
     * @return string 
     */
    public function getCalendarcolor()
    {
        return $this->calendarcolor;
    }

    /**
     * Set timezone
     *
     * @param string $timezone
     * @return OcCalendars
     */
    public function setTimezone($timezone)
    {
        $this->timezone = $timezone;
    
        return $this;
    }

    /**
     * Get timezone
     *
     * @return string 
     */
    public function getTimezone()
    {
        return $this->timezone;
    }

    /**
     * Set components
     *
     * @param string $components
     * @return OcCalendars
     */
    public function setComponents($components)
    {
        $this->components = $components;
    
        return $this;
    }

    /**
     * Get components
     *
     * @return string 
     */
    public function getComponents()
    {
        return $this->components;
    }

    /**
     * Set transparent
     *
     * @param integer $transparent
     * @return OcCalendars
     */
    public function setTransparent($transparent)
    {
        $this->transparent = $transparent;
    
        return $this;
    }

    /**
     * Get transparent
     *
     * @return integer 
     */
    public function getTransparent()
    {
        return $this->transparent;
    }
}