<?php

namespace CCC\NubeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcCommentsReadMarkers
 *
 * @ORM\Table(name="oc_comments_read_markers")
 * @ORM\Entity
 */
class OcCommentsReadMarkers
{
    /**
     * @var string
     *
     * @ORM\Column(name="user_id", type="string", length=64, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $userId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="marker_datetime", type="datetime", nullable=true)
     */
    private $markerDatetime;

    /**
     * @var string
     *
     * @ORM\Column(name="object_type", type="string", length=64, nullable=false)
     */
    private $objectType;

    /**
     * @var string
     *
     * @ORM\Column(name="object_id", type="string", length=64, nullable=false)
     */
    private $objectId;



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
     * Set markerDatetime
     *
     * @param \DateTime $markerDatetime
     * @return OcCommentsReadMarkers
     */
    public function setMarkerDatetime($markerDatetime)
    {
        $this->markerDatetime = $markerDatetime;
    
        return $this;
    }

    /**
     * Get markerDatetime
     *
     * @return \DateTime 
     */
    public function getMarkerDatetime()
    {
        return $this->markerDatetime;
    }

    /**
     * Set objectType
     *
     * @param string $objectType
     * @return OcCommentsReadMarkers
     */
    public function setObjectType($objectType)
    {
        $this->objectType = $objectType;
    
        return $this;
    }

    /**
     * Get objectType
     *
     * @return string 
     */
    public function getObjectType()
    {
        return $this->objectType;
    }

    /**
     * Set objectId
     *
     * @param string $objectId
     * @return OcCommentsReadMarkers
     */
    public function setObjectId($objectId)
    {
        $this->objectId = $objectId;
    
        return $this;
    }

    /**
     * Get objectId
     *
     * @return string 
     */
    public function getObjectId()
    {
        return $this->objectId;
    }
}