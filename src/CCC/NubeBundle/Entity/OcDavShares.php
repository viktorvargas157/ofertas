<?php

namespace CCC\NubeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcDavShares
 *
 * @ORM\Table(name="oc_dav_shares")
 * @ORM\Entity
 */
class OcDavShares
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
     * @ORM\Column(name="type", type="string", length=255, nullable=true)
     */
    private $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="access", type="smallint", nullable=true)
     */
    private $access;

    /**
     * @var integer
     *
     * @ORM\Column(name="resourceid", type="integer", nullable=false)
     */
    private $resourceid;

    /**
     * @var string
     *
     * @ORM\Column(name="publicuri", type="string", length=255, nullable=true)
     */
    private $publicuri;



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
     * @return OcDavShares
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
     * Set type
     *
     * @param string $type
     * @return OcDavShares
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
     * Set access
     *
     * @param integer $access
     * @return OcDavShares
     */
    public function setAccess($access)
    {
        $this->access = $access;
    
        return $this;
    }

    /**
     * Get access
     *
     * @return integer 
     */
    public function getAccess()
    {
        return $this->access;
    }

    /**
     * Set resourceid
     *
     * @param integer $resourceid
     * @return OcDavShares
     */
    public function setResourceid($resourceid)
    {
        $this->resourceid = $resourceid;
    
        return $this;
    }

    /**
     * Get resourceid
     *
     * @return integer 
     */
    public function getResourceid()
    {
        return $this->resourceid;
    }

    /**
     * Set publicuri
     *
     * @param string $publicuri
     * @return OcDavShares
     */
    public function setPublicuri($publicuri)
    {
        $this->publicuri = $publicuri;
    
        return $this;
    }

    /**
     * Get publicuri
     *
     * @return string 
     */
    public function getPublicuri()
    {
        return $this->publicuri;
    }
}