<?php

namespace CCC\NubeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcCredentials
 *
 * @ORM\Table(name="oc_credentials")
 * @ORM\Entity
 */
class OcCredentials
{
    /**
     * @var string
     *
     * @ORM\Column(name="user", type="string", length=64, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $user;

    /**
     * @var string
     *
     * @ORM\Column(name="identifier", type="string", length=64, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $identifier;

    /**
     * @var string
     *
     * @ORM\Column(name="credentials", type="text", nullable=true)
     */
    private $credentials;



    /**
     * Set user
     *
     * @param string $user
     * @return OcCredentials
     */
    public function setUser($user)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return string 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set identifier
     *
     * @param string $identifier
     * @return OcCredentials
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;
    
        return $this;
    }

    /**
     * Get identifier
     *
     * @return string 
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Set credentials
     *
     * @param string $credentials
     * @return OcCredentials
     */
    public function setCredentials($credentials)
    {
        $this->credentials = $credentials;
    
        return $this;
    }

    /**
     * Get credentials
     *
     * @return string 
     */
    public function getCredentials()
    {
        return $this->credentials;
    }
}