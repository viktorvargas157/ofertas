<?php

namespace CCC\NubeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcSystemtagGroup
 *
 * @ORM\Table(name="oc_systemtag_group")
 * @ORM\Entity
 */
class OcSystemtagGroup
{
    /**
     * @var string
     *
     * @ORM\Column(name="gid", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $gid;

    /**
     * @var integer
     *
     * @ORM\Column(name="systemtagid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $systemtagid;



    /**
     * Set gid
     *
     * @param string $gid
     * @return OcSystemtagGroup
     */
    public function setGid($gid)
    {
        $this->gid = $gid;
    
        return $this;
    }

    /**
     * Get gid
     *
     * @return string 
     */
    public function getGid()
    {
        return $this->gid;
    }

    /**
     * Set systemtagid
     *
     * @param integer $systemtagid
     * @return OcSystemtagGroup
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