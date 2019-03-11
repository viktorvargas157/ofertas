<?php

namespace CCC\NubeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcCalendarsubscriptions
 *
 * @ORM\Table(name="oc_calendarsubscriptions")
 * @ORM\Entity
 */
class OcCalendarsubscriptions
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
     * @ORM\Column(name="uri", type="string", length=255, nullable=true)
     */
    private $uri;

    /**
     * @var string
     *
     * @ORM\Column(name="principaluri", type="string", length=255, nullable=true)
     */
    private $principaluri;

    /**
     * @var string
     *
     * @ORM\Column(name="source", type="string", length=255, nullable=true)
     */
    private $source;

    /**
     * @var string
     *
     * @ORM\Column(name="displayname", type="string", length=100, nullable=true)
     */
    private $displayname;

    /**
     * @var string
     *
     * @ORM\Column(name="refreshrate", type="string", length=10, nullable=true)
     */
    private $refreshrate;

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
     * @var integer
     *
     * @ORM\Column(name="striptodos", type="smallint", nullable=true)
     */
    private $striptodos;

    /**
     * @var integer
     *
     * @ORM\Column(name="stripalarms", type="smallint", nullable=true)
     */
    private $stripalarms;

    /**
     * @var integer
     *
     * @ORM\Column(name="stripattachments", type="smallint", nullable=true)
     */
    private $stripattachments;

    /**
     * @var integer
     *
     * @ORM\Column(name="lastmodified", type="integer", nullable=false)
     */
    private $lastmodified;



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
     * Set uri
     *
     * @param string $uri
     * @return OcCalendarsubscriptions
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
     * Set principaluri
     *
     * @param string $principaluri
     * @return OcCalendarsubscriptions
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
     * Set source
     *
     * @param string $source
     * @return OcCalendarsubscriptions
     */
    public function setSource($source)
    {
        $this->source = $source;
    
        return $this;
    }

    /**
     * Get source
     *
     * @return string 
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Set displayname
     *
     * @param string $displayname
     * @return OcCalendarsubscriptions
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
     * Set refreshrate
     *
     * @param string $refreshrate
     * @return OcCalendarsubscriptions
     */
    public function setRefreshrate($refreshrate)
    {
        $this->refreshrate = $refreshrate;
    
        return $this;
    }

    /**
     * Get refreshrate
     *
     * @return string 
     */
    public function getRefreshrate()
    {
        return $this->refreshrate;
    }

    /**
     * Set calendarorder
     *
     * @param integer $calendarorder
     * @return OcCalendarsubscriptions
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
     * @return OcCalendarsubscriptions
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
     * Set striptodos
     *
     * @param integer $striptodos
     * @return OcCalendarsubscriptions
     */
    public function setStriptodos($striptodos)
    {
        $this->striptodos = $striptodos;
    
        return $this;
    }

    /**
     * Get striptodos
     *
     * @return integer 
     */
    public function getStriptodos()
    {
        return $this->striptodos;
    }

    /**
     * Set stripalarms
     *
     * @param integer $stripalarms
     * @return OcCalendarsubscriptions
     */
    public function setStripalarms($stripalarms)
    {
        $this->stripalarms = $stripalarms;
    
        return $this;
    }

    /**
     * Get stripalarms
     *
     * @return integer 
     */
    public function getStripalarms()
    {
        return $this->stripalarms;
    }

    /**
     * Set stripattachments
     *
     * @param integer $stripattachments
     * @return OcCalendarsubscriptions
     */
    public function setStripattachments($stripattachments)
    {
        $this->stripattachments = $stripattachments;
    
        return $this;
    }

    /**
     * Get stripattachments
     *
     * @return integer 
     */
    public function getStripattachments()
    {
        return $this->stripattachments;
    }

    /**
     * Set lastmodified
     *
     * @param integer $lastmodified
     * @return OcCalendarsubscriptions
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
}