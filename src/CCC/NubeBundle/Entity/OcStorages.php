<?php

namespace CCC\NubeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcStorages
 *
 * @ORM\Table(name="oc_storages")
 * @ORM\Entity
 */
class OcStorages
{
    /**
     * @var integer
     *
     * @ORM\Column(name="numeric_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numericId;

    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=64, nullable=true)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="available", type="integer", nullable=false)
     */
    private $available;

    /**
     * @var integer
     *
     * @ORM\Column(name="last_checked", type="integer", nullable=true)
     */
    private $lastChecked;



    /**
     * Get numericId
     *
     * @return integer 
     */
    public function getNumericId()
    {
        return $this->numericId;
    }

    /**
     * Set id
     *
     * @param string $id
     * @return OcStorages
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
     * Set available
     *
     * @param integer $available
     * @return OcStorages
     */
    public function setAvailable($available)
    {
        $this->available = $available;
    
        return $this;
    }

    /**
     * Get available
     *
     * @return integer 
     */
    public function getAvailable()
    {
        return $this->available;
    }

    /**
     * Set lastChecked
     *
     * @param integer $lastChecked
     * @return OcStorages
     */
    public function setLastChecked($lastChecked)
    {
        $this->lastChecked = $lastChecked;
    
        return $this;
    }

    /**
     * Get lastChecked
     *
     * @return integer 
     */
    public function getLastChecked()
    {
        return $this->lastChecked;
    }
}