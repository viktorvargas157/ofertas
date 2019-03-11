<?php

namespace CCC\NubeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcGroupAdmin
 *
 * @ORM\Table(name="oc_group_admin")
 * @ORM\Entity
 */
class OcGroupAdmin
{
    /**
     * @var string
     *
     * @ORM\Column(name="gid", type="string", length=64, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $gid;

    /**
     * @var string
     *
     * @ORM\Column(name="uid", type="string", length=64, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $uid;



    /**
     * Set gid
     *
     * @param string $gid
     * @return OcGroupAdmin
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
     * Set uid
     *
     * @param string $uid
     * @return OcGroupAdmin
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
}