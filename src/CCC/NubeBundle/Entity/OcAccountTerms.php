<?php

namespace CCC\NubeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcAccountTerms
 *
 * @ORM\Table(name="oc_account_terms")
 * @ORM\Entity
 */
class OcAccountTerms
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="account_id", type="bigint", nullable=false)
     */
    private $accountId;

    /**
     * @var string
     *
     * @ORM\Column(name="term", type="string", length=191, nullable=false)
     */
    private $term;



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
     * Set accountId
     *
     * @param integer $accountId
     * @return OcAccountTerms
     */
    public function setAccountId($accountId)
    {
        $this->accountId = $accountId;
    
        return $this;
    }

    /**
     * Get accountId
     *
     * @return integer 
     */
    public function getAccountId()
    {
        return $this->accountId;
    }

    /**
     * Set term
     *
     * @param string $term
     * @return OcAccountTerms
     */
    public function setTerm($term)
    {
        $this->term = $term;
    
        return $this;
    }

    /**
     * Get term
     *
     * @return string 
     */
    public function getTerm()
    {
        return $this->term;
    }
}