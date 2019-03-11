<?php

namespace CCC\NubeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcFileLocks
 *
 * @ORM\Table(name="oc_file_locks")
 * @ORM\Entity
 */
class OcFileLocks
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
     * @var integer
     *
     * @ORM\Column(name="lock", type="integer", nullable=false)
     */
    private $lock;

    /**
     * @var string
     *
     * @ORM\Column(name="key", type="string", length=64, nullable=false)
     */
    private $key;

    /**
     * @var integer
     *
     * @ORM\Column(name="ttl", type="integer", nullable=false)
     */
    private $ttl;



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
     * Set lock
     *
     * @param integer $lock
     * @return OcFileLocks
     */
    public function setLock($lock)
    {
        $this->lock = $lock;
    
        return $this;
    }

    /**
     * Get lock
     *
     * @return integer 
     */
    public function getLock()
    {
        return $this->lock;
    }

    /**
     * Set key
     *
     * @param string $key
     * @return OcFileLocks
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
     * Set ttl
     *
     * @param integer $ttl
     * @return OcFileLocks
     */
    public function setTtl($ttl)
    {
        $this->ttl = $ttl;
    
        return $this;
    }

    /**
     * Get ttl
     *
     * @return integer 
     */
    public function getTtl()
    {
        return $this->ttl;
    }
}