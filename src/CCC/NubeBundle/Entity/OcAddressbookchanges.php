<?php

namespace CCC\NubeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcAddressbookchanges
 *
 * @ORM\Table(name="oc_addressbookchanges")
 * @ORM\Entity
 */
class OcAddressbookchanges
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
     * @ORM\Column(name="uri", type="string", length=255, nullable=true)
     */
    private $uri;

    /**
     * @var integer
     *
     * @ORM\Column(name="synctoken", type="integer", nullable=false)
     */
    private $synctoken;

    /**
     * @var integer
     *
     * @ORM\Column(name="addressbookid", type="integer", nullable=false)
     */
    private $addressbookid;

    /**
     * @var integer
     *
     * @ORM\Column(name="operation", type="smallint", nullable=false)
     */
    private $operation;



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
     * Set uri
     *
     * @param string $uri
     * @return OcAddressbookchanges
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
     * Set synctoken
     *
     * @param integer $synctoken
     * @return OcAddressbookchanges
     */
    public function setSynctoken($synctoken)
    {
        $this->synctoken = $synctoken;
    
        return $this;
    }

    /**
     * Get synctoken
     *
     * @return integer 
     */
    public function getSynctoken()
    {
        return $this->synctoken;
    }

    /**
     * Set addressbookid
     *
     * @param integer $addressbookid
     * @return OcAddressbookchanges
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
     * Set operation
     *
     * @param integer $operation
     * @return OcAddressbookchanges
     */
    public function setOperation($operation)
    {
        $this->operation = $operation;
    
        return $this;
    }

    /**
     * Get operation
     *
     * @return integer 
     */
    public function getOperation()
    {
        return $this->operation;
    }
}