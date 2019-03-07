<?php

namespace CCC\OfertasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Facturas
 *
 * @ORM\Table(name="facturas")
 * @ORM\Entity
 */
class Facturas
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
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime")
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="no", type="string", length=255)
     */
    private $no;

    /**
     * @var float
     *
     * @ORM\Column(name="anticipopc", type="float", nullable = true)
     */
    private $anticipopc;

    /**
     * @var float
     *
     * @ORM\Column(name="anticipocupconsumido", type="float", nullable = true)
     */
    private $anticipocupconsumido;

    /**
     * @var float
     *
     * @ORM\Column(name="anticipocucconsumido", type="float", nullable = true)
     */
    private $anticipocucconsumido;


    /**
     * @ORM\OneToMany(targetEntity="CertFactura", mappedBy="idfactura", cascade={"persist", "remove"})
     */
    private $certificaciones;

    /**
     * @ORM\OneToMany(targetEntity="CertFacturaP", mappedBy="idfactura", cascade={"persist", "remove"})
     */
    private $certificacionesp;

    /**
     * @ORM\ManyToOne(targetEntity="Contratos", inversedBy="facturas")
     * @ORM\JoinColumn(name="idContrato", referencedColumnName="id")
     */
    private $idContrato;




    /**
     * Constructor
     */
    public function __construct()
    {
        $this->certificaciones = new \Doctrine\Common\Collections\ArrayCollection();
        $this->certificacionesp = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
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
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Facturas
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    
        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set no
     *
     * @param string $no
     * @return Facturas
     */
    public function setNo($no)
    {
        $this->no = $no;
    
        return $this;
    }

    /**
     * Get no
     *
     * @return string 
     */
    public function getNo()
    {
        return $this->no;
    }

    /**
     * Set anticipopc
     *
     * @param float $anticipopc
     * @return Facturas
     */
    public function setAnticipopc($anticipopc)
    {
        $this->anticipopc = $anticipopc;
    
        return $this;
    }

    /**
     * Get anticipopc
     *
     * @return float 
     */
    public function getAnticipopc()
    {
        return $this->anticipopc;
    }

    /**
     * Set anticipocupconsumido
     *
     * @param float $anticipocupconsumido
     * @return Facturas
     */
    public function setAnticipocupconsumido($anticipocupconsumido)
    {
        $this->anticipocupconsumido = $anticipocupconsumido;
    
        return $this;
    }

    /**
     * Get anticipocupconsumido
     *
     * @return float 
     */
    public function getAnticipocupconsumido()
    {
        return $this->anticipocupconsumido;
    }

    /**
     * Set anticipocucconsumido
     *
     * @param float $anticipocucconsumido
     * @return Facturas
     */
    public function setAnticipocucconsumido($anticipocucconsumido)
    {
        $this->anticipocucconsumido = $anticipocucconsumido;
    
        return $this;
    }

    /**
     * Get anticipocucconsumido
     *
     * @return float 
     */
    public function getAnticipocucconsumido()
    {
        return $this->anticipocucconsumido;
    }

    /**
     * Add certificaciones
     *
     * @param \CCC\OfertasBundle\Entity\CertFactura $certificaciones
     * @return Facturas
     */
    public function addCertificacione(\CCC\OfertasBundle\Entity\CertFactura $certificaciones)
    {
        $this->certificaciones[] = $certificaciones;
    
        return $this;
    }

    /**
     * Remove certificaciones
     *
     * @param \CCC\OfertasBundle\Entity\CertFactura $certificaciones
     */
    public function removeCertificacione(\CCC\OfertasBundle\Entity\CertFactura $certificaciones)
    {
        $this->certificaciones->removeElement($certificaciones);
    }

    /**
     * Get certificaciones
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCertificaciones()
    {
        return $this->certificaciones;
    }

    /**
     * Add certificacionesp
     *
     * @param \CCC\OfertasBundle\Entity\CertFacturaP $certificacionesp
     * @return Facturas
     */
    public function addCertificacionesp(\CCC\OfertasBundle\Entity\CertFacturaP $certificacionesp)
    {
        $this->certificacionesp[] = $certificacionesp;
    
        return $this;
    }

    /**
     * Remove certificacionesp
     *
     * @param \CCC\OfertasBundle\Entity\CertFacturaP $certificacionesp
     */
    public function removeCertificacionesp(\CCC\OfertasBundle\Entity\CertFacturaP $certificacionesp)
    {
        $this->certificacionesp->removeElement($certificacionesp);
    }

    /**
     * Get certificacionesp
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCertificacionesp()
    {
        return $this->certificacionesp;
    }

    /**
     * Set idContrato
     *
     * @param \CCC\OfertasBundle\Entity\Contratos $idContrato
     * @return Facturas
     */
    public function setIdContrato(\CCC\OfertasBundle\Entity\Contratos $idContrato = null)
    {
        $this->idContrato = $idContrato;
    
        return $this;
    }

    /**
     * Get idContrato
     *
     * @return \CCC\OfertasBundle\Entity\Contratos 
     */
    public function getIdContrato()
    {
        return $this->idContrato;
    }
}