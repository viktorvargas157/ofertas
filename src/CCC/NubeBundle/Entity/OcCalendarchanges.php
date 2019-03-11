<?php

namespace CCC\NubeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcCalendarchanges
 *
 * @ORM\Table(name="oc_calendarchanges")
 * @ORM\Entity
 */
class OcCalendarchanges
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
     * @var integer
     *
     * @ORM\Column(name="synctoken", type="integer", nullable=false)
     */
    private $synctoken;

    /**
     * @var integer
     *
     * @ORM\Column(name="calendarid", type="integer", nullable=false)
     */
    private $calendarid;

    /**
     * @var integer
     *
     * @ORM\Column(name="operation", type="smallint", nullable=false)
     */
    private $operation;



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
     * @return OcCalendarchanges
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
     * @return OcCalendarchanges
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
     * Set calendarid
     *
     * @param integer $calendarid
     * @return OcCalendarchanges
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
     * Set operation
     *
     * @param integer $operation
     * @return OcCalendarchanges
     */
    public function setOperation($operation)
    {
        $this->operation = $operation;
    
        return $this;
    }

    /**
     * Get operation
     *
     * @return integer 
     */
    public function getOperation()
    {
        return $this->operation;
    }
}