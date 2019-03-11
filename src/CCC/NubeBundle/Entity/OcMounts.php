<?php

namespace CCC\NubeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcMounts
 *
 * @ORM\Table(name="oc_mounts")
 * @ORM\Entity
 */
class OcMounts
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
     * @var integer
     *
     * @ORM\Column(name="storage_id", type="integer", nullable=false)
     */
    private $storageId;

    /**
     * @var integer
     *
     * @ORM\Column(name="root_id", type="bigint", nullable=false)
     */
    private $rootId;

    /**
     * @var string
     *
     * @ORM\Column(name="user_id", type="string", length=64, nullable=false)
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="mount_point", type="string", length=4000, nullable=false)
     */
    private $mountPoint;



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
     * Set storageId
     *
     * @param integer $storageId
     * @return OcMounts
     */
    public function setStorageId($storageId)
    {
        $this->storageId = $storageId;
    
        return $this;
    }

    /**
     * Get storageId
     *
     * @return integer 
     */
    public function getStorageId()
    {
        return $this->storageId;
    }

    /**
     * Set rootId
     *
     * @param integer $rootId
     * @return OcMounts
     */
    public function setRootId($rootId)
    {
        $this->rootId = $rootId;
    
        return $this;
    }

    /**
     * Get rootId
     *
     * @return integer 
     */
    public function getRootId()
    {
        return $this->rootId;
    }

    /**
     * Set userId
     *
     * @param string $userId
     * @return OcMounts
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    
        return $this;
    }

    /**
     * Get userId
     *
     * @return string 
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set mountPoint
     *
     * @param string $mountPoint
     * @return OcMounts
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
}