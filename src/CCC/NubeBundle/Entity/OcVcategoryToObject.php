<?php

namespace CCC\NubeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcVcategoryToObject
 *
 * @ORM\Table(name="oc_vcategory_to_object")
 * @ORM\Entity
 */
class OcVcategoryToObject
{
    /**
     * @var integer
     *
     * @ORM\Column(name="categoryid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $categoryid;

    /**
     * @var integer
     *
     * @ORM\Column(name="objid", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $objid;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=64, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $type;



    /**
     * Set categoryid
     *
     * @param integer $categoryid
     * @return OcVcategoryToObject
     */
    public function setCategoryid($categoryid)
    {
        $this->categoryid = $categoryid;
    
        return $this;
    }

    /**
     * Get categoryid
     *
     * @return integer 
     */
    public function getCategoryid()
    {
        return $this->categoryid;
    }

    /**
     * Set objid
     *
     * @param integer $objid
     * @return OcVcategoryToObject
     */
    public function setObjid($objid)
    {
        $this->objid = $objid;
    
        return $this;
    }

    /**
     * Get objid
     *
     * @return integer 
     */
    public function getObjid()
    {
        return $this->objid;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return OcVcategoryToObject
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }
}