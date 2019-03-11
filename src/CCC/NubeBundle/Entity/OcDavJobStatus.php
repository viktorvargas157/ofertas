<?php

namespace CCC\NubeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcDavJobStatus
 *
 * @ORM\Table(name="oc_dav_job_status")
 * @ORM\Entity
 */
class OcDavJobStatus
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
     * @var guid
     *
     * @ORM\Column(name="uuid", type="guid", length=36, nullable=false)
     */
    private $uuid;

    /**
     * @var string
     *
     * @ORM\Column(name="user_id", type="string", length=64, nullable=false)
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="status_info", type="string", length=4000, nullable=false)
     */
    private $statusInfo;



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
     * Set uuid
     *
     * @param guid $uuid
     * @return OcDavJobStatus
     */
    public function setUuid($uuid)
    {
        $this->uuid = $uuid;
    
        return $this;
    }

    /**
     * Get uuid
     *
     * @return guid 
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * Set userId
     *
     * @param string $userId
     * @return OcDavJobStatus
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
     * Set statusInfo
     *
     * @param string $statusInfo
     * @return OcDavJobStatus
     */
    public function setStatusInfo($statusInfo)
    {
        $this->statusInfo = $statusInfo;
    
        return $this;
    }

    /**
     * Get statusInfo
     *
     * @return string 
     */
    public function getStatusInfo()
    {
        return $this->statusInfo;
    }
}