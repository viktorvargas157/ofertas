<?php

namespace CCC\NubeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcPreferences
 *
 * @ORM\Table(name="oc_preferences")
 * @ORM\Entity
 */
class OcPreferences
{
    /**
     * @var string
     *
     * @ORM\Column(name="userid", type="string", length=64, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $userid;

    /**
     * @var string
     *
     * @ORM\Column(name="appid", type="string", length=32, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $appid;

    /**
     * @var string
     *
     * @ORM\Column(name="configkey", type="string", length=64, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $configkey;

    /**
     * @var string
     *
     * @ORM\Column(name="configvalue", type="text", nullable=true)
     */
    private $configvalue;



    /**
     * Set userid
     *
     * @param string $userid
     * @return OcPreferences
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;
    
        return $this;
    }

    /**
     * Get userid
     *
     * @return string 
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * Set appid
     *
     * @param string $appid
     * @return OcPreferences
     */
    public function setAppid($appid)
    {
        $this->appid = $appid;
    
        return $this;
    }

    /**
     * Get appid
     *
     * @return string 
     */
    public function getAppid()
    {
        return $this->appid;
    }

    /**
     * Set configkey
     *
     * @param string $configkey
     * @return OcPreferences
     */
    public function setConfigkey($configkey)
    {
        $this->configkey = $configkey;
    
        return $this;
    }

    /**
     * Get configkey
     *
     * @return string 
     */
    public function getConfigkey()
    {
        return $this->configkey;
    }

    /**
     * Set configvalue
     *
     * @param string $configvalue
     * @return OcPreferences
     */
    public function setConfigvalue($configvalue)
    {
        $this->configvalue = $configvalue;
    
        return $this;
    }

    /**
     * Get configvalue
     *
     * @return string 
     */
    public function getConfigvalue()
    {
        return $this->configvalue;
    }
}