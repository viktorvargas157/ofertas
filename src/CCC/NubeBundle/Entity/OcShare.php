<?php

namespace CCC\NubeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcShare
 *
 * @ORM\Table(name="oc_share")
 * @ORM\Entity
 */
class OcShare
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
     * @ORM\Column(name="share_type", type="smallint", nullable=false)
     */
    private $shareType;

    /**
     * @var string
     *
     * @ORM\Column(name="share_with", type="string", length=255, nullable=true)
     */
    private $shareWith;

    /**
     * @var string
     *
     * @ORM\Column(name="uid_owner", type="string", length=64, nullable=false)
     */
    private $uidOwner;

    /**
     * @var string
     *
     * @ORM\Column(name="uid_initiator", type="string", length=64, nullable=true)
     */
    private $uidInitiator;

    /**
     * @var integer
     *
     * @ORM\Column(name="parent", type="integer", nullable=true)
     */
    private $parent;

    /**
     * @var string
     *
     * @ORM\Column(name="item_type", type="string", length=64, nullable=false)
     */
    private $itemType;

    /**
     * @var string
     *
     * @ORM\Column(name="item_source", type="string", length=255, nullable=true)
     */
    private $itemSource;

    /**
     * @var string
     *
     * @ORM\Column(name="item_target", type="string", length=255, nullable=true)
     */
    private $itemTarget;

    /**
     * @var integer
     *
     * @ORM\Column(name="file_source", type="bigint", nullable=true)
     */
    private $fileSource;

    /**
     * @var string
     *
     * @ORM\Column(name="file_target", type="string", length=512, nullable=true)
     */
    private $fileTarget;

    /**
     * @var integer
     *
     * @ORM\Column(name="permissions", type="smallint", nullable=false)
     */
    private $permissions;

    /**
     * @var integer
     *
     * @ORM\Column(name="stime", type="bigint", nullable=false)
     */
    private $stime;

    /**
     * @var integer
     *
     * @ORM\Column(name="accepted", type="smallint", nullable=false)
     */
    private $accepted;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="expiration", type="datetime", nullable=true)
     */
    private $expiration;

    /**
     * @var string
     *
     * @ORM\Column(name="token", type="string", length=32, nullable=true)
     */
    private $token;

    /**
     * @var integer
     *
     * @ORM\Column(name="mail_send", type="smallint", nullable=false)
     */
    private $mailSend;

    /**
     * @var string
     *
     * @ORM\Column(name="share_name", type="string", length=64, nullable=true)
     */
    private $shareName;



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
     * Set shareType
     *
     * @param integer $shareType
     * @return OcShare
     */
    public function setShareType($shareType)
    {
        $this->shareType = $shareType;
    
        return $this;
    }

    /**
     * Get shareType
     *
     * @return integer 
     */
    public function getShareType()
    {
        return $this->shareType;
    }

    /**
     * Set shareWith
     *
     * @param string $shareWith
     * @return OcShare
     */
    public function setShareWith($shareWith)
    {
        $this->shareWith = $shareWith;
    
        return $this;
    }

    /**
     * Get shareWith
     *
     * @return string 
     */
    public function getShareWith()
    {
        return $this->shareWith;
    }

    /**
     * Set uidOwner
     *
     * @param string $uidOwner
     * @return OcShare
     */
    public function setUidOwner($uidOwner)
    {
        $this->uidOwner = $uidOwner;
    
        return $this;
    }

    /**
     * Get uidOwner
     *
     * @return string 
     */
    public function getUidOwner()
    {
        return $this->uidOwner;
    }

    /**
     * Set uidInitiator
     *
     * @param string $uidInitiator
     * @return OcShare
     */
    public function setUidInitiator($uidInitiator)
    {
        $this->uidInitiator = $uidInitiator;
    
        return $this;
    }

    /**
     * Get uidInitiator
     *
     * @return string 
     */
    public function getUidInitiator()
    {
        return $this->uidInitiator;
    }

    /**
     * Set parent
     *
     * @param integer $parent
     * @return OcShare
     */
    public function setParent($parent)
    {
        $this->parent = $parent;
    
        return $this;
    }

    /**
     * Get parent
     *
     * @return integer 
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Set itemType
     *
     * @param string $itemType
     * @return OcShare
     */
    public function setItemType($itemType)
    {
        $this->itemType = $itemType;
    
        return $this;
    }

    /**
     * Get itemType
     *
     * @return string 
     */
    public function getItemType()
    {
        return $this->itemType;
    }

    /**
     * Set itemSource
     *
     * @param string $itemSource
     * @return OcShare
     */
    public function setItemSource($itemSource)
    {
        $this->itemSource = $itemSource;
    
        return $this;
    }

    /**
     * Get itemSource
     *
     * @return string 
     */
    public function getItemSource()
    {
        return $this->itemSource;
    }

    /**
     * Set itemTarget
     *
     * @param string $itemTarget
     * @return OcShare
     */
    public function setItemTarget($itemTarget)
    {
        $this->itemTarget = $itemTarget;
    
        return $this;
    }

    /**
     * Get itemTarget
     *
     * @return string 
     */
    public function getItemTarget()
    {
        return $this->itemTarget;
    }

    /**
     * Set fileSource
     *
     * @param integer $fileSource
     * @return OcShare
     */
    public function setFileSource($fileSource)
    {
        $this->fileSource = $fileSource;
    
        return $this;
    }

    /**
     * Get fileSource
     *
     * @return integer 
     */
    public function getFileSource()
    {
        return $this->fileSource;
    }

    /**
     * Set fileTarget
     *
     * @param string $fileTarget
     * @return OcShare
     */
    public function setFileTarget($fileTarget)
    {
        $this->fileTarget = $fileTarget;
    
        return $this;
    }

    /**
     * Get fileTarget
     *
     * @return string 
     */
    public function getFileTarget()
    {
        return $this->fileTarget;
    }

    /**
     * Set permissions
     *
     * @param integer $permissions
     * @return OcShare
     */
    public function setPermissions($permissions)
    {
        $this->permissions = $permissions;
    
        return $this;
    }

    /**
     * Get permissions
     *
     * @return integer 
     */
    public function getPermissions()
    {
        return $this->permissions;
    }

    /**
     * Set stime
     *
     * @param integer $stime
     * @return OcShare
     */
    public function setStime($stime)
    {
        $this->stime = $stime;
    
        return $this;
    }

    /**
     * Get stime
     *
     * @return integer 
     */
    public function getStime()
    {
        return $this->stime;
    }

    /**
     * Set accepted
     *
     * @param integer $accepted
     * @return OcShare
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

    /**
     * Set expiration
     *
     * @param \DateTime $expiration
     * @return OcShare
     */
    public function setExpiration($expiration)
    {
        $this->expiration = $expiration;
    
        return $this;
    }

    /**
     * Get expiration
     *
     * @return \DateTime 
     */
    public function getExpiration()
    {
        return $this->expiration;
    }

    /**
     * Set token
     *
     * @param string $token
     * @return OcShare
     */
    public function setToken($token)
    {
        $this->token = $token;
    
        return $this;
    }

    /**
     * Get token
     *
     * @return string 
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Set mailSend
     *
     * @param integer $mailSend
     * @return OcShare
     */
    public function setMailSend($mailSend)
    {
        $this->mailSend = $mailSend;
    
        return $this;
    }

    /**
     * Get mailSend
     *
     * @return integer 
     */
    public function getMailSend()
    {
        return $this->mailSend;
    }

    /**
     * Set shareName
     *
     * @param string $shareName
     * @return OcShare
     */
    public function setShareName($shareName)
    {
        $this->shareName = $shareName;
    
        return $this;
    }

    /**
     * Get shareName
     *
     * @return string 
     */
    public function getShareName()
    {
        return $this->shareName;
    }
}