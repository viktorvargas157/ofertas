<?php

namespace CCC\NubeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcFederatedReshares
 *
 * @ORM\Table(name="oc_federated_reshares")
 * @ORM\Entity
 */
class OcFederatedReshares
{
    /**
     * @var integer
     *
     * @ORM\Column(name="share_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $shareId;

    /**
     * @var integer
     *
     * @ORM\Column(name="remote_id", type="bigint", nullable=false)
     */
    private $remoteId;



    /**
     * Get shareId
     *
     * @return integer 
     */
    public function getShareId()
    {
        return $this->shareId;
    }

    /**
     * Set remoteId
     *
     * @param integer $remoteId
     * @return OcFederatedReshares
     */
    public function setRemoteId($remoteId)
    {
        $this->remoteId = $remoteId;
    
        return $this;
    }

    /**
     * Get remoteId
     *
     * @return integer 
     */
    public function getRemoteId()
    {
        return $this->remoteId;
    }
}