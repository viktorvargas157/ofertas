<?php

namespace CCC\NubeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcUsers
 *
 * @ORM\Table(name="oc_users")
 * @ORM\Entity
 */
class OcUsers
{
    /**
     * @var string
     *
     * @ORM\Column(name="uid", type="string", length=64, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $uid;

    /**
     * @var string
     *
     * @ORM\Column(name="displayname", type="string", length=64, nullable=true)
     */
    private $displayname;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=false)
     */
    private $password;



    /**
     * Get uid
     *
     * @return string 
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Set displayname
     *
     * @param string $displayname
     * @return OcUsers
     */
    public function setDisplayname($displayname)
    {
        $this->displayname = $displayname;
    
        return $this;
    }

    /**
     * Get displayname
     *
     * @return string 
     */
    public function getDisplayname()
    {
        return $this->displayname;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return OcUsers
     */
    public function setPassword($password)
    {
        $this->password = $password;
    
        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }
}