<?php

namespace CCC\NubeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcSystemtag
 *
 * @ORM\Table(name="oc_systemtag")
 * @ORM\Entity
 */
class OcSystemtag
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
     * @ORM\Column(name="name", type="string", length=64, nullable=false)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="visibility", type="smallint", nullable=false)
     */
    private $visibility;

    /**
     * @var integer
     *
     * @ORM\Column(name="editable", type="smallint", nullable=false)
     */
    private $editable;



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
     * Set name
     *
     * @param string $name
     * @return OcSystemtag
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
     * Set visibility
     *
     * @param integer $visibility
     * @return OcSystemtag
     */
    public function setVisibility($visibility)
    {
        $this->visibility = $visibility;
    
        return $this;
    }

    /**
     * Get visibility
     *
     * @return integer 
     */
    public function getVisibility()
    {
        return $this->visibility;
    }

    /**
     * Set editable
     *
     * @param integer $editable
     * @return OcSystemtag
     */
    public function setEditable($editable)
    {
        $this->editable = $editable;
    
        return $this;
    }

    /**
     * Get editable
     *
     * @return integer 
     */
    public function getEditable()
    {
        return $this->editable;
    }
}