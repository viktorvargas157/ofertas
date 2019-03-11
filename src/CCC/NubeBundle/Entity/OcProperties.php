<?php

namespace CCC\NubeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcProperties
 *
 * @ORM\Table(name="oc_properties")
 * @ORM\Entity
 */
class OcProperties
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
     * @var integer
     *
     * @ORM\Column(name="fileid", type="bigint", nullable=true)
     */
    private $fileid;

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
     * Set fileid
     *
     * @param integer $fileid
     * @return OcProperties
     */
    public function setFileid($fileid)
    {
        $this->fileid = $fileid;
    
        return $this;
    }

    /**
     * Get fileid
     *
     * @return integer 
     */
    public function getFileid()
    {
        return $this->fileid;
    }

    /**
     * Set propertyname
     *
     * @param string $propertyname
     * @return OcProperties
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
     * @return OcProperties
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