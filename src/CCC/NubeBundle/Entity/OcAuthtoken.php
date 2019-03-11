<?php

namespace CCC\NubeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcAuthtoken
 *
 * @ORM\Table(name="oc_authtoken")
 * @ORM\Entity
 */
class OcAuthtoken
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
     * @ORM\Column(name="uid", type="string", length=64, nullable=false)
     */
    private $uid;

    /**
     * @var string
     *
     * @ORM\Column(name="login_name", type="string", length=64, nullable=false)
     */
    private $loginName;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="text", nullable=true)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="text", nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="token", type="string", length=200, nullable=false)
     */
    private $token;

    /**
     * @var integer
     *
     * @ORM\Column(name="type", type="smallint", nullable=false)
     */
    private $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="last_activity", type="integer", nullable=false)
     */
    private $lastActivity;

    /**
     * @var integer
     *
     * @ORM\Column(name="last_check", type="integer", nullable=false)
     */
    private $lastCheck;



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
     * Set uid
     *
     * @param string $uid
     * @return OcAuthtoken
     */
    public function setUid($uid)
    {
        $this->uid = $uid;
    
        return $this;
    }

    /**
     * Get uid
     *
     * @return string 
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Set loginName
     *
     * @param string $loginName
     * @return OcAuthtoken
     */
    public function setLoginName($loginName)
    {
        $this->loginName = $loginName;
    
        return $this;
    }

    /**
     * Get loginName
     *
     * @return string 
     */
    public function getLoginName()
    {
        return $this->loginName;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return OcAuthtoken
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
     * @return OcAuthtoken
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
     * Set token
     *
     * @param string $token
     * @return OcAuthtoken
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
     * Set type
     *
     * @param integer $type
     * @return OcAuthtoken
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

    /**
     * Set lastActivity
     *
     * @param integer $lastActivity
     * @return OcAuthtoken
     */
    public function setLastActivity($lastActivity)
    {
        $this->lastActivity = $lastActivity;
    
        return $this;
    }

    /**
     * Get lastActivity
     *
     * @return integer 
     */
    public function getLastActivity()
    {
        return $this->lastActivity;
    }

    /**
     * Set lastCheck
     *
     * @param integer $lastCheck
     * @return OcAuthtoken
     */
    public function setLastCheck($lastCheck)
    {
        $this->lastCheck = $lastCheck;
    
        return $this;
    }

    /**
     * Get lastCheck
     *
     * @return integer 
     */
    public function getLastCheck()
    {
        return $this->lastCheck;
    }
}