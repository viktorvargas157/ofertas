<?php

namespace CCC\NubeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcCards
 *
 * @ORM\Table(name="oc_cards")
 * @ORM\Entity
 */
class OcCards
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
     * @ORM\Column(name="addressbookid", type="integer", nullable=false)
     */
    private $addressbookid;

    /**
     * @var string
     *
     * @ORM\Column(name="carddata", type="blob", nullable=true)
     */
    private $carddata;

    /**
     * @var string
     *
     * @ORM\Column(name="uri", type="string", length=255, nullable=true)
     */
    private $uri;

    /**
     * @var integer
     *
     * @ORM\Column(name="lastmodified", type="bigint", nullable=true)
     */
    private $lastmodified;

    /**
     * @var string
     *
     * @ORM\Column(name="etag", type="string", length=32, nullable=true)
     */
    private $etag;

    /**
     * @var integer
     *
     * @ORM\Column(name="size", type="bigint", nullable=false)
     */
    private $size;



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
     * Set addressbookid
     *
     * @param integer $addressbookid
     * @return OcCards
     */
    public function setAddressbookid($addressbookid)
    {
        $this->addressbookid = $addressbookid;
    
        return $this;
    }

    /**
     * Get addressbookid
     *
     * @return integer 
     */
    public function getAddressbookid()
    {
        return $this->addressbookid;
    }

    /**
     * Set carddata
     *
     * @param string $carddata
     * @return OcCards
     */
    public function setCarddata($carddata)
    {
        $this->carddata = $carddata;
    
        return $this;
    }

    /**
     * Get carddata
     *
     * @return string 
     */
    public function getCarddata()
    {
        return $this->carddata;
    }

    /**
     * Set uri
     *
     * @param string $uri
     * @return OcCards
     */
    public function setUri($uri)
    {
        $this->uri = $uri;
    
        return $this;
    }

    /**
     * Get uri
     *
     * @return string 
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * Set lastmodified
     *
     * @param integer $lastmodified
     * @return OcCards
     */
    public function setLastmodified($lastmodified)
    {
        $this->lastmodified = $lastmodified;
    
        return $this;
    }

    /**
     * Get lastmodified
     *
     * @return integer 
     */
    public function getLastmodified()
    {
        return $this->lastmodified;
    }

    /**
     * Set etag
     *
     * @param string $etag
     * @return OcCards
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
     * Set size
     *
     * @param integer $size
     * @return OcCards
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
}