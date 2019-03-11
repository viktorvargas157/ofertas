<?php

namespace CCC\NubeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcAccounts
 *
 * @ORM\Table(name="oc_accounts")
 * @ORM\Entity
 */
class OcAccounts
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
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="user_id", type="string", length=255, nullable=false)
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="lower_user_id", type="string", length=255, nullable=false)
     */
    private $lowerUserId;

    /**
     * @var string
     *
     * @ORM\Column(name="display_name", type="string", length=255, nullable=true)
     */
    private $displayName;

    /**
     * @var string
     *
     * @ORM\Column(name="quota", type="string", length=32, nullable=true)
     */
    private $quota;

    /**
     * @var integer
     *
     * @ORM\Column(name="last_login", type="integer", nullable=false)
     */
    private $lastLogin;

    /**
     * @var string
     *
     * @ORM\Column(name="backend", type="string", length=64, nullable=false)
     */
    private $backend;

    /**
     * @var string
     *
     * @ORM\Column(name="home", type="string", length=1024, nullable=false)
     */
    private $home;

    /**
     * @var integer
     *
     * @ORM\Column(name="state", type="smallint", nullable=false)
     */
    private $state;



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
     * Set email
     *
     * @param string $email
     * @return OcAccounts
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set userId
     *
     * @param string $userId
     * @return OcAccounts
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
     * Set lowerUserId
     *
     * @param string $lowerUserId
     * @return OcAccounts
     */
    public function setLowerUserId($lowerUserId)
    {
        $this->lowerUserId = $lowerUserId;
    
        return $this;
    }

    /**
     * Get lowerUserId
     *
     * @return string 
     */
    public function getLowerUserId()
    {
        return $this->lowerUserId;
    }

    /**
     * Set displayName
     *
     * @param string $displayName
     * @return OcAccounts
     */
    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
    
        return $this;
    }

    /**
     * Get displayName
     *
     * @return string 
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }

    /**
     * Set quota
     *
     * @param string $quota
     * @return OcAccounts
     */
    public function setQuota($quota)
    {
        $this->quota = $quota;
    
        return $this;
    }

    /**
     * Get quota
     *
     * @return string 
     */
    public function getQuota()
    {
        return $this->quota;
    }

    /**
     * Set lastLogin
     *
     * @param integer $lastLogin
     * @return OcAccounts
     */
    public function setLastLogin($lastLogin)
    {
        $this->lastLogin = $lastLogin;
    
        return $this;
    }

    /**
     * Get lastLogin
     *
     * @return integer 
     */
    public function getLastLogin()
    {
        return $this->lastLogin;
    }

    /**
     * Set backend
     *
     * @param string $backend
     * @return OcAccounts
     */
    public function setBackend($backend)
    {
        $this->backend = $backend;
    
        return $this;
    }

    /**
     * Get backend
     *
     * @return string 
     */
    public function getBackend()
    {
        return $this->backend;
    }

    /**
     * Set home
     *
     * @param string $home
     * @return OcAccounts
     */
    public function setHome($home)
    {
        $this->home = $home;
    
        return $this;
    }

    /**
     * Get home
     *
     * @return string 
     */
    public function getHome()
    {
        return $this->home;
    }

    /**
     * Set state
     *
     * @param integer $state
     * @return OcAccounts
     */
    public function setState($state)
    {
        $this->state = $state;
    
        return $this;
    }

    /**
     * Get state
     *
     * @return integer 
     */
    public function getState()
    {
        return $this->state;
    }
}