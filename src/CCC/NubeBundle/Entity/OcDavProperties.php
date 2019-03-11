<?php

namespace CCC\NubeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcDavProperties
 *
 * @ORM\Table(name="oc_dav_properties")
 * @ORM\Entity
 */
class OcDavProperties
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="propertypath", type="string", length=255, nullable=false)
     */
    private $propertypath;

    /**
     * @var string
     *
     * @ORM\Column(name="propertyname", type="string", length=255, nullable=false)
     */
    private $propertyname;

    /**
     * @var string
     *
     * @ORM\Column(name="propertyvalue", type="string", length=255, nullable=false)
     */
    private $propertyvalue;



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
     * Set propertypath
     *
     * @param string $propertypath
     * @return OcDavProperties
     */
    public function setPropertypath($propertypath)
    {
        $this->propertypath = $propertypath;
    
        return $this;
    }

    /**
     * Get propertypath
     *
     * @return string 
     */
    public function getPropertypath()
    {
        return $this->propertypath;
    }

    /**
     * Set propertyname
     *
     * @param string $propertyname
     * @return OcDavProperties
     */
    public function setPropertyname($propertyname)
    {
        $this->propertyname = $propertyname;
    
        return $this;
    }

    /**
     * Get propertyname
     *
     * @return string 
     */
    public function getPropertyname()
    {
        return $this->propertyname;
    }

    /**
     * Set propertyvalue
     *
     * @param string $propertyvalue
     * @return OcDavProperties
     */
    public function setPropertyvalue($propertyvalue)
    {
        $this->propertyvalue = $propertyvalue;
    
        return $this;
    }

    /**
     * Get propertyvalue
     *
     * @return string 
     */
    public function getPropertyvalue()
    {
        return $this->propertyvalue;
    }
}