<?php

namespace CCC\NubeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcExternalOptions
 *
 * @ORM\Table(name="oc_external_options")
 * @ORM\Entity
 */
class OcExternalOptions
{
    /**
     * @var integer
     *
     * @ORM\Column(name="option_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $optionId;

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
     * @ORM\Column(name="value", type="string", length=256, nullable=false)
     */
    private $value;



    /**
     * Get optionId
     *
     * @return integer 
     */
    public function getOptionId()
    {
        return $this->optionId;
    }

    /**
     * Set mountId
     *
     * @param integer $mountId
     * @return OcExternalOptions
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
     * @return OcExternalOptions
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
     * @return OcExternalOptions
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