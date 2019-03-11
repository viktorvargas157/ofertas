<?php

namespace CCC\NubeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcFilecache
 *
 * @ORM\Table(name="oc_filecache")
 * @ORM\Entity
 */
class OcFilecache
{
    /**
     * @var integer
     *
     * @ORM\Column(name="fileid", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $fileid;

    /**
     * @var integer
     *
     * @ORM\Column(name="storage", type="integer", nullable=false)
     */
    private $storage;

    /**
     * @var string
     *
     * @ORM\Column(name="path", type="string", length=4000, nullable=true)
     */
    private $path;

    /**
     * @var string
     *
     * @ORM\Column(name="path_hash", type="string", length=32, nullable=false)
     */
    private $pathHash;

    /**
     * @var integer
     *
     * @ORM\Column(name="parent", type="bigint", nullable=false)
     */
    private $parent;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=250, nullable=true)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="mimetype", type="integer", nullable=false)
     */
    private $mimetype;

    /**
     * @var integer
     *
     * @ORM\Column(name="mimepart", type="integer", nullable=false)
     */
    private $mimepart;

    /**
     * @var integer
     *
     * @ORM\Column(name="size", type="bigint", nullable=false)
     */
    private $size;

    /**
     * @var integer
     *
     * @ORM\Column(name="mtime", type="bigint", nullable=false)
     */
    private $mtime;

    /**
     * @var integer
     *
     * @ORM\Column(name="storage_mtime", type="bigint", nullable=false)
     */
    private $storageMtime;

    /**
     * @var integer
     *
     * @ORM\Column(name="encrypted", type="integer", nullable=false)
     */
    private $encrypted;

    /**
     * @var integer
     *
     * @ORM\Column(name="unencrypted_size", type="bigint", nullable=false)
     */
    private $unencryptedSize;

    /**
     * @var string
     *
     * @ORM\Column(name="etag", type="string", length=40, nullable=true)
     */
    private $etag;

    /**
     * @var integer
     *
     * @ORM\Column(name="permissions", type="integer", nullable=true)
     */
    private $permissions;

    /**
     * @var string
     *
     * @ORM\Column(name="checksum", type="string", length=255, nullable=true)
     */
    private $checksum;



    /**
     * Get fileid
     *
     * @return integer 
     */
    public function getFileid()
    {
        return $this->fileid;
    }

    /**
     * Set storage
     *
     * @param integer $storage
     * @return OcFilecache
     */
    public function setStorage($storage)
    {
        $this->storage = $storage;
    
        return $this;
    }

    /**
     * Get storage
     *
     * @return integer 
     */
    public function getStorage()
    {
        return $this->storage;
    }

    /**
     * Set path
     *
     * @param string $path
     * @return OcFilecache
     */
    public function setPath($path)
    {
        $this->path = $path;
    
        return $this;
    }

    /**
     * Get path
     *
     * @return string 
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set pathHash
     *
     * @param string $pathHash
     * @return OcFilecache
     */
    public function setPathHash($pathHash)
    {
        $this->pathHash = $pathHash;
    
        return $this;
    }

    /**
     * Get pathHash
     *
     * @return string 
     */
    public function getPathHash()
    {
        return $this->pathHash;
    }

    /**
     * Set parent
     *
     * @param integer $parent
     * @return OcFilecache
     */
    public function setParent($parent)
    {
        $this->parent = $parent;
    
        return $this;
    }

    /**
     * Get parent
     *
     * @return integer 
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return OcFilecache
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set mimetype
     *
     * @param integer $mimetype
     * @return OcFilecache
     */
    public function setMimetype($mimetype)
    {
        $this->mimetype = $mimetype;
    
        return $this;
    }

    /**
     * Get mimetype
     *
     * @return integer 
     */
    public function getMimetype()
    {
        return $this->mimetype;
    }

    /**
     * Set mimepart
     *
     * @param integer $mimepart
     * @return OcFilecache
     */
    public function setMimepart($mimepart)
    {
        $this->mimepart = $mimepart;
    
        return $this;
    }

    /**
     * Get mimepart
     *
     * @return integer 
     */
    public function getMimepart()
    {
        return $this->mimepart;
    }

    /**
     * Set size
     *
     * @param integer $size
     * @return OcFilecache
     */
    public function setSize($size)
    {
        $this->size = $size;
    
        return $this;
    }

    /**
     * Get size
     *
     * @return integer 
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set mtime
     *
     * @param integer $mtime
     * @return OcFilecache
     */
    public function setMtime($mtime)
    {
        $this->mtime = $mtime;
    
        return $this;
    }

    /**
     * Get mtime
     *
     * @return integer 
     */
    public function getMtime()
    {
        return $this->mtime;
    }

    /**
     * Set storageMtime
     *
     * @param integer $storageMtime
     * @return OcFilecache
     */
    public function setStorageMtime($storageMtime)
    {
        $this->storageMtime = $storageMtime;
    
        return $this;
    }

    /**
     * Get storageMtime
     *
     * @return integer 
     */
    public function getStorageMtime()
    {
        return $this->storageMtime;
    }

    /**
     * Set encrypted
     *
     * @param integer $encrypted
     * @return OcFilecache
     */
    public function setEncrypted($encrypted)
    {
        $this->encrypted = $encrypted;
    
        return $this;
    }

    /**
     * Get encrypted
     *
     * @return integer 
     */
    public function getEncrypted()
    {
        return $this->encrypted;
    }

    /**
     * Set unencryptedSize
     *
     * @param integer $unencryptedSize
     * @return OcFilecache
     */
    public function setUnencryptedSize($unencryptedSize)
    {
        $this->unencryptedSize = $unencryptedSize;
    
        return $this;
    }

    /**
     * Get unencryptedSize
     *
     * @return integer 
     */
    public function getUnencryptedSize()
    {
        return $this->unencryptedSize;
    }

    /**
     * Set etag
     *
     * @param string $etag
     * @return OcFilecache
     */
    public function setEtag($etag)
    {
        $this->etag = $etag;
    
        return $this;
    }

    /**
     * Get etag
     *
     * @return string 
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * Set permissions
     *
     * @param integer $permissions
     * @return OcFilecache
     */
    public function setPermissions($permissions)
    {
        $this->permissions = $permissions;
    
        return $this;
    }

    /**
     * Get permissions
     *
     * @return integer 
     */
    public function getPermissions()
    {
        return $this->permissions;
    }

    /**
     * Set checksum
     *
     * @param string $checksum
     * @return OcFilecache
     */
    public function setChecksum($checksum)
    {
        $this->checksum = $checksum;
    
        return $this;
    }

    /**
     * Get checksum
     *
     * @return string 
     */
    public function getChecksum()
    {
        return $this->checksum;
    }
}