<?php

namespace CCC\NubeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcShareExternal
 *
 * @ORM\Table(name="oc_share_external")
 * @ORM\Entity
 */
class OcShareExternal
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
     * @ORM\Column(name="remote", type="string", length=512, nullable=false)
     */
    private $remote;

    /**
     * @var integer
     *
     * @ORM\Column(name="remote_id", type="bigint", nullable=false)
     */
    private $remoteId;

    /**
     * @var string
     *
     * @ORM\Column(name="share_token", type="string", length=64, nullable=false)
     */
    private $shareToken;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=64, nullable=true)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=64, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="owner", type="string", length=64, nullable=false)
     */
    private $owner;

    /**
     * @var string
     *
     * @ORM\Column(name="user", type="string", length=64, nullable=false)
     */
    private $user;

    /**
     * @var string
     *
     * @ORM\Column(name="mountpoint", type="string", length=4000, nullable=false)
     */
    private $mountpoint;

    /**
     * @var string
     *
     * @ORM\Column(name="mountpoint_hash", type="string", length=32, nullable=false)
     */
    private $mountpointHash;

    /**
     * @var integer
     *
     * @ORM\Column(name="accepted", type="integer", nullable=false)
     */
    private $accepted;



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
     * Set remote
     *
     * @param string $remote
     * @return OcShareExternal
     */
    public function setRemote($remote)
    {
        $this->remote = $remote;
    
        return $this;
    }

    /**
     * Get remote
     *
     * @return string 
     */
    public function getRemote()
    {
        return $this->remote;
    }

    /**
     * Set remoteId
     *
     * @param integer $remoteId
     * @return OcShareExternal
     */
    public function setRemoteId($remoteId)
    {
        $this->remoteId = $remoteId;
    
        return $this;
    }

    /**
     * Get remoteId
     *
     * @return integer 
     */
    public function getRemoteId()
    {
        return $this->remoteId;
    }

    /**
     * Set shareToken
     *
     * @param string $shareToken
     * @return OcShareExternal
     */
    public function setShareToken($shareToken)
    {
        $this->shareToken = $shareToken;
    
        return $this;
    }

    /**
     * Get shareToken
     *
     * @return string 
     */
    public function getShareToken()
    {
        return $this->shareToken;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return OcShareExternal
     */
    public function setPassword($password)
    {
        $this->password = $password;
    
        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return OcShareExternal
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set owner
     *
     * @param string $owner
     * @return OcShareExternal
     */
    public function setOwner($owner)
    {
        $this->owner = $owner;
    
        return $this;
    }

    /**
     * Get owner
     *
     * @return string 
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Set user
     *
     * @param string $user
     * @return OcShareExternal
     */
    public function setUser($user)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return string 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set mountpoint
     *
     * @param string $mountpoint
     * @return OcShareExternal
     */
    public function setMountpoint($mountpoint)
    {
        $this->mountpoint = $mountpoint;
    
        return $this;
    }

    /**
     * Get mountpoint
     *
     * @return string 
     */
    public function getMountpoint()
    {
        return $this->mountpoint;
    }

    /**
     * Set mountpointHash
     *
     * @param string $mountpointHash
     * @return OcShareExternal
     */
    public function setMountpointHash($mountpointHash)
    {
        $this->mountpointHash = $mountpointHash;
    
        return $this;
    }

    /**
     * Get mountpointHash
     *
     * @return string 
     */
    public function getMountpointHash()
    {
        return $this->mountpointHash;
    }

    /**
     * Set accepted
     *
     * @param integer $accepted
     * @return OcShareExternal
     */
    public function setAccepted($accepted)
    {
        $this->accepted = $accepted;
    
        return $this;
    }

    /**
     * Get accepted
     *
     * @return integer 
     */
    public function getAccepted()
    {
        return $this->accepted;
    }
}