<?php

namespace CCC\NubeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcGroups
 *
 * @ORM\Table(name="oc_groups")
 * @ORM\Entity
 */
class OcGroups
{
    /**
     * @var string
     *
     * @ORM\Column(name="gid", type="string", length=64, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $gid;



    /**
     * Get gid
     *
     * @return string 
     */
    public function getGid()
    {
        return $this->gid;
    }
}