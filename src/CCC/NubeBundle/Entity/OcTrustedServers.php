<?php

namespace CCC\NubeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcTrustedServers
 *
 * @ORM\Table(name="oc_trusted_servers")
 * @ORM\Entity
 */
class OcTrustedServers
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=512, nullable=false)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="url_hash", type="string", length=255, nullable=false)
     */
    private $urlHash;

    /**
     * @var string
     *
     * @ORM\Column(name="token", type="string", length=128, nullable=true)
     */
    private $token;

    /**
     * @var string
     *
     * @ORM\Column(name="shared_secret", type="string", length=256, nullable=true)
     */
    private $sharedSecret;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="sync_token", type="string", length=512, nullable=true)
     */
    private $syncToken;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return OcTrustedServers
     */
    public function setUrl($url)
    {
        $this->url = $url;
    
        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set urlHash
     *
     * @param string $urlHash
     * @return OcTrustedServers
     */
    public function setUrlHash($urlHash)
    {
        $this->urlHash = $urlHash;
    
        return $this;
    }

    /**
     * Get urlHash
     *
     * @return string 
     */
    public function getUrlHash()
    {
        return $this->urlHash;
    }

    /**
     * Set token
     *
     * @param string $token
     * @return OcTrustedServers
     */
    public function setToken($token)
    {
        $this->token = $token;
    
        return $this;
    }

    /**
     * Get token
     *
     * @return string 
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Set sharedSecret
     *
     * @param string $sharedSecret
     * @return OcTrustedServers
     */
    public function setSharedSecret($sharedSecret)
    {
        $this->sharedSecret = $sharedSecret;
    
        return $this;
    }

    /**
     * Get sharedSecret
     *
     * @return string 
     */
    public function getSharedSecret()
    {
        return $this->sharedSecret;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return OcTrustedServers
     */
    public function setStatus($status)
    {
        $this->status = $status;
    
        return $this;
    }

    /**
     * Get status
     *
     * @return integer 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set syncToken
     *
     * @param string $syncToken
     * @return OcTrustedServers
     */
    public function setSyncToken($syncToken)
    {
        $this->syncToken = $syncToken;
    
        return $this;
    }

    /**
     * Get syncToken
     *
     * @return string 
     */
    public function getSyncToken()
    {
        return $this->syncToken;
    }
}