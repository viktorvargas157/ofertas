<?php

namespace CCC\NubeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcExternalConfig
 *
 * @ORM\Table(name="oc_external_config")
 * @ORM\Entity
 */
class OcExternalConfig
{
    /**
     * @var integer
     *
     * @ORM\Column(name="config_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $configId;

    /**
     * @var integer
     *
     * @ORM\Column(name="mount_id", type="bigint", nullable=false)
     */
    private $mountId;

    /**
     * @var string
     *
     * @ORM\Column(name="key", type="string", length=64, nullable=false)
     */
    private $key;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="string", length=4096, nullable=false)
     */
    private $value;



    /**
     * Get configId
     *
     * @return integer 
     */
    public function getConfigId()
    {
        return $this->configId;
    }

    /**
     * Set mountId
     *
     * @param integer $mountId
     * @return OcExternalConfig
     */
    public function setMountId($mountId)
    {
        $this->mountId = $mountId;
    
        return $this;
    }

    /**
     * Get mountId
     *
     * @return integer 
     */
    public function getMountId()
    {
        return $this->mountId;
    }

    /**
     * Set key
     *
     * @param string $key
     * @return OcExternalConfig
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
     * @return OcExternalConfig
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