<?php

namespace CCC\NubeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcExternalMounts
 *
 * @ORM\Table(name="oc_external_mounts")
 * @ORM\Entity
 */
class OcExternalMounts
{
    /**
     * @var integer
     *
     * @ORM\Column(name="mount_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $mountId;

    /**
     * @var string
     *
     * @ORM\Column(name="mount_point", type="string", length=128, nullable=false)
     */
    private $mountPoint;

    /**
     * @var string
     *
     * @ORM\Column(name="storage_backend", type="string", length=64, nullable=false)
     */
    private $storageBackend;

    /**
     * @var string
     *
     * @ORM\Column(name="auth_backend", type="string", length=64, nullable=false)
     */
    private $authBackend;

    /**
     * @var integer
     *
     * @ORM\Column(name="priority", type="integer", nullable=false)
     */
    private $priority;

    /**
     * @var integer
     *
     * @ORM\Column(name="type", type="integer", nullable=false)
     */
    private $type;



    /**
     * Get mountId
     *
     * @return integer 
     */
    public function getMountId()
    {
        return $this->mountId;
    }

    /**
     * Set mountPoint
     *
     * @param string $mountPoint
     * @return OcExternalMounts
     */
    public function setMountPoint($mountPoint)
    {
        $this->mountPoint = $mountPoint;
    
        return $this;
    }

    /**
     * Get mountPoint
     *
     * @return string 
     */
    public function getMountPoint()
    {
        return $this->mountPoint;
    }

    /**
     * Set storageBackend
     *
     * @param string $storageBackend
     * @return OcExternalMounts
     */
    public function setStorageBackend($storageBackend)
    {
        $this->storageBackend = $storageBackend;
    
        return $this;
    }

    /**
     * Get storageBackend
     *
     * @return string 
     */
    public function getStorageBackend()
    {
        return $this->storageBackend;
    }

    /**
     * Set authBackend
     *
     * @param string $authBackend
     * @return OcExternalMounts
     */
    public function setAuthBackend($authBackend)
    {
        $this->authBackend = $authBackend;
    
        return $this;
    }

    /**
     * Get authBackend
     *
     * @return string 
     */
    public function getAuthBackend()
    {
        return $this->authBackend;
    }

    /**
     * Set priority
     *
     * @param integer $priority
     * @return OcExternalMounts
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;
    
        return $this;
    }

    /**
     * Get priority
     *
     * @return integer 
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Set type
     *
     * @param integer $type
     * @return OcExternalMounts
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return integer 
     */
    public function getType()
    {
        return $this->type;
    }
}