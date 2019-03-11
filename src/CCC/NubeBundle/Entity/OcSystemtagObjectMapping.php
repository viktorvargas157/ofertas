<?php

namespace CCC\NubeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcSystemtagObjectMapping
 *
 * @ORM\Table(name="oc_systemtag_object_mapping")
 * @ORM\Entity
 */
class OcSystemtagObjectMapping
{
    /**
     * @var string
     *
     * @ORM\Column(name="objectid", type="string", length=64, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $objectid;

    /**
     * @var string
     *
     * @ORM\Column(name="objecttype", type="string", length=64, nullable=false)
     */
    private $objecttype;

    /**
     * @var integer
     *
     * @ORM\Column(name="systemtagid", type="integer", nullable=false)
     */
    private $systemtagid;



    /**
     * Get objectid
     *
     * @return string 
     */
    public function getObjectid()
    {
        return $this->objectid;
    }

    /**
     * Set objecttype
     *
     * @param string $objecttype
     * @return OcSystemtagObjectMapping
     */
    public function setObjecttype($objecttype)
    {
        $this->objecttype = $objecttype;
    
        return $this;
    }

    /**
     * Get objecttype
     *
     * @return string 
     */
    public function getObjecttype()
    {
        return $this->objecttype;
    }

    /**
     * Set systemtagid
     *
     * @param integer $systemtagid
     * @return OcSystemtagObjectMapping
     */
    public function setSystemtagid($systemtagid)
    {
        $this->systemtagid = $systemtagid;
    
        return $this;
    }

    /**
     * Get systemtagid
     *
     * @return integer 
     */
    public function getSystemtagid()
    {
        return $this->systemtagid;
    }
}