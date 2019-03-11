<?php

namespace CCC\NubeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcAppconfig
 *
 * @ORM\Table(name="oc_appconfig")
 * @ORM\Entity
 */
class OcAppconfig
{
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
     * Set appid
     *
     * @param string $appid
     * @return OcAppconfig
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
     * @return OcAppconfig
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
     * @return OcAppconfig
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