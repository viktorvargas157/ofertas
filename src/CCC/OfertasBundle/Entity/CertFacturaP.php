<?php

namespace CCC\OfertasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CertFacturaP
 *
 * @ORM\Table(name="certfacturap")
 * @ORM\Entity
 */
class CertFacturaP
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="idcertificacion", type="integer")
     */
    private $idcertificacion;

    /**
     * @ORM\ManyToOne(targetEntity="Facturas", inversedBy="certificacionesp")
     * @ORM\JoinColumn(name="idfactura", referencedColumnName="id")
     */
    private $idfactura;






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
     * Set idcertificacion
     *
     * @param integer $idcertificacion
     * @return CertFacturaP
     */
    public function setIdcertificacion($idcertificacion)
    {
        $this->idcertificacion = $idcertificacion;
    
        return $this;
    }

    /**
     * Get idcertificacion
     *
     * @return integer 
     */
    public function getIdcertificacion()
    {
        return $this->idcertificacion;
    }

    /**
     * Set idfactura
     *
     * @param \CCC\OfertasBundle\Entity\Facturas $idfactura
     * @return CertFacturaP
     */
    public function setIdfactura(\CCC\OfertasBundle\Entity\Facturas $idfactura = null)
    {
        $this->idfactura = $idfactura;
    
        return $this;
    }

    /**
     * Get idfactura
     *
     * @return \CCC\OfertasBundle\Entity\Facturas 
     */
    public function getIdfactura()
    {
        return $this->idfactura;
    }
}