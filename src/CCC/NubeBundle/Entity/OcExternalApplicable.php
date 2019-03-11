<?php

namespace CCC\NubeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcExternalApplicable
 *
 * @ORM\Table(name="oc_external_applicable")
 * @ORM\Entity
 */
class OcExternalApplicable
{
    /**
     * @var integer
     *
     * @ORM\Column(name="applicable_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $applicableId;

    /**
     * @var integer
     *
     * @ORM\Column(name="mount_id", type="bigint", nullable=false)
     */
    private $mountId;

    /**
     * @var integer
     *
     * @ORM\Column(name="type", type="integer", nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="string", length=64, nullable=true)
     */
    private $value;



    /**
     * Get applicableId
     *
     * @return integer 
     */
    public function getApplicableId()
    {
        return $this->applicableId;
    }

    /**
     * Set mountId
     *
     * @param integer $mountId
     * @return OcExternalApplicable
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
     * Set type
     *
     * @param integer $type
     * @return OcExternalApplicable
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
     * Set value
     *
     * @param string $value
     * @return OcExternalApplicable
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