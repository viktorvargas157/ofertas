<?php

namespace CCC\NubeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcCardsProperties
 *
 * @ORM\Table(name="oc_cards_properties")
 * @ORM\Entity
 */
class OcCardsProperties
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
     * @ORM\Column(name="addressbookid", type="bigint", nullable=false)
     */
    private $addressbookid;

    /**
     * @var integer
     *
     * @ORM\Column(name="cardid", type="bigint", nullable=false)
     */
    private $cardid;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=64, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="string", length=255, nullable=true)
     */
    private $value;

    /**
     * @var integer
     *
     * @ORM\Column(name="preferred", type="integer", nullable=false)
     */
    private $preferred;



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
     * @return OcCardsProperties
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
     * Set cardid
     *
     * @param integer $cardid
     * @return OcCardsProperties
     */
    public function setCardid($cardid)
    {
        $this->cardid = $cardid;
    
        return $this;
    }

    /**
     * Get cardid
     *
     * @return integer 
     */
    public function getCardid()
    {
        return $this->cardid;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return OcCardsProperties
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
     * Set value
     *
     * @param string $value
     * @return OcCardsProperties
     */
    public function setValue($value)
    {
        $this->value = $value;
    
        return $this;
    }

    /**
     * Get value
     *
     * @return string 
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set preferred
     *
     * @param integer $preferred
     * @return OcCardsProperties
     */
    public function setPreferred($preferred)
    {
        $this->preferred = $preferred;
    
        return $this;
    }

    /**
     * Get preferred
     *
     * @return integer 
     */
    public function getPreferred()
    {
        return $this->preferred;
    }
}