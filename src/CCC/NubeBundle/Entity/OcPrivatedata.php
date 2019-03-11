<?php

namespace CCC\NubeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcPrivatedata
 *
 * @ORM\Table(name="oc_privatedata")
 * @ORM\Entity
 */
class OcPrivatedata
{
    /**
     * @var integer
     *
     * @ORM\Column(name="keyid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $keyid;

    /**
     * @var string
     *
     * @ORM\Column(name="user", type="string", length=64, nullable=false)
     */
    private $user;

    /**
     * @var string
     *
     * @ORM\Column(name="app", type="string", length=255, nullable=false)
     */
    private $app;

    /**
     * @var string
     *
     * @ORM\Column(name="key", type="string", length=255, nullable=false)
     */
    private $key;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="string", length=255, nullable=false)
     */
    private $value;



    /**
     * Get keyid
     *
     * @return integer 
     */
    public function getKeyid()
    {
        return $this->keyid;
    }

    /**
     * Set user
     *
     * @param string $user
     * @return OcPrivatedata
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
     * Set app
     *
     * @param string $app
     * @return OcPrivatedata
     */
    public function setApp($app)
    {
        $this->app = $app;
    
        return $this;
    }

    /**
     * Get app
     *
     * @return string 
     */
    public function getApp()
    {
        return $this->app;
    }

    /**
     * Set key
     *
     * @param string $key
     * @return OcPrivatedata
     */
    public function setKey($key)
    {
        $this->key = $key;
    
        return $this;
    }

    /**
     * Get key
     *
     * @return string 
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Set value
     *
     * @param string $value
     * @return OcPrivatedata
     */
    public function setValue($value)
    {
        $this->value = $value;
    
        return $this;
    }

    /**
     * Get value
     *
     * @return string 
     */
    public function getValue()
    {
        return $this->value;
    }
}