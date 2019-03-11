<?php

namespace CCC\NubeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcComments
 *
 * @ORM\Table(name="oc_comments")
 * @ORM\Entity
 */
class OcComments
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
     * @ORM\Column(name="parent_id", type="integer", nullable=false)
     */
    private $parentId;

    /**
     * @var integer
     *
     * @ORM\Column(name="topmost_parent_id", type="integer", nullable=false)
     */
    private $topmostParentId;

    /**
     * @var integer
     *
     * @ORM\Column(name="children_count", type="integer", nullable=false)
     */
    private $childrenCount;

    /**
     * @var string
     *
     * @ORM\Column(name="actor_type", type="string", length=64, nullable=false)
     */
    private $actorType;

    /**
     * @var string
     *
     * @ORM\Column(name="actor_id", type="string", length=64, nullable=false)
     */
    private $actorId;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text", nullable=true)
     */
    private $message;

    /**
     * @var string
     *
     * @ORM\Column(name="verb", type="string", length=64, nullable=true)
     */
    private $verb;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="creation_timestamp", type="datetime", nullable=true)
     */
    private $creationTimestamp;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="latest_child_timestamp", type="datetime", nullable=true)
     */
    private $latestChildTimestamp;

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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set parentId
     *
     * @param integer $parentId
     * @return OcComments
     */
    public function setParentId($parentId)
    {
        $this->parentId = $parentId;
    
        return $this;
    }

    /**
     * Get parentId
     *
     * @return integer 
     */
    public function getParentId()
    {
        return $this->parentId;
    }

    /**
     * Set topmostParentId
     *
     * @param integer $topmostParentId
     * @return OcComments
     */
    public function setTopmostParentId($topmostParentId)
    {
        $this->topmostParentId = $topmostParentId;
    
        return $this;
    }

    /**
     * Get topmostParentId
     *
     * @return integer 
     */
    public function getTopmostParentId()
    {
        return $this->topmostParentId;
    }

    /**
     * Set childrenCount
     *
     * @param integer $childrenCount
     * @return OcComments
     */
    public function setChildrenCount($childrenCount)
    {
        $this->childrenCount = $childrenCount;
    
        return $this;
    }

    /**
     * Get childrenCount
     *
     * @return integer 
     */
    public function getChildrenCount()
    {
        return $this->childrenCount;
    }

    /**
     * Set actorType
     *
     * @param string $actorType
     * @return OcComments
     */
    public function setActorType($actorType)
    {
        $this->actorType = $actorType;
    
        return $this;
    }

    /**
     * Get actorType
     *
     * @return string 
     */
    public function getActorType()
    {
        return $this->actorType;
    }

    /**
     * Set actorId
     *
     * @param string $actorId
     * @return OcComments
     */
    public function setActorId($actorId)
    {
        $this->actorId = $actorId;
    
        return $this;
    }

    /**
     * Get actorId
     *
     * @return string 
     */
    public function getActorId()
    {
        return $this->actorId;
    }

    /**
     * Set message
     *
     * @param string $message
     * @return OcComments
     */
    public function setMessage($message)
    {
        $this->message = $message;
    
        return $this;
    }

    /**
     * Get message
     *
     * @return string 
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set verb
     *
     * @param string $verb
     * @return OcComments
     */
    public function setVerb($verb)
    {
        $this->verb = $verb;
    
        return $this;
    }

    /**
     * Get verb
     *
     * @return string 
     */
    public function getVerb()
    {
        return $this->verb;
    }

    /**
     * Set creationTimestamp
     *
     * @param \DateTime $creationTimestamp
     * @return OcComments
     */
    public function setCreationTimestamp($creationTimestamp)
    {
        $this->creationTimestamp = $creationTimestamp;
    
        return $this;
    }

    /**
     * Get creationTimestamp
     *
     * @return \DateTime 
     */
    public function getCreationTimestamp()
    {
        return $this->creationTimestamp;
    }

    /**
     * Set latestChildTimestamp
     *
     * @param \DateTime $latestChildTimestamp
     * @return OcComments
     */
    public function setLatestChildTimestamp($latestChildTimestamp)
    {
        $this->latestChildTimestamp = $latestChildTimestamp;
    
        return $this;
    }

    /**
     * Get latestChildTimestamp
     *
     * @return \DateTime 
     */
    public function getLatestChildTimestamp()
    {
        return $this->latestChildTimestamp;
    }

    /**
     * Set objectType
     *
     * @param string $objectType
     * @return OcComments
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
     * @return OcComments
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