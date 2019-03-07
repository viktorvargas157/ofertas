<?php

namespace CCC\OfertasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CertificacionExcel
 *
 * @ORM\Table(name="certificacionexcel")
 * @ORM\Entity
 */
class CertificacionExcel
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
     * @var boolean
     *
     * @ORM\Column(name="facturado", type="boolean")
     */
    private $facturado;

    /**
     * @var string
     *
     * @ORM\Column(name="objeto", type="string", length=255)
     */
    private $objeto;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="desde", type="datetime", nullable = true)
     */
    private $desde;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="hasta", type="datetime", nullable = true)
     */
    private $hasta;

    /**
     * @var float
     *
     * @ORM\Column(name="gastoresuemenpresupuestocupexcel", type="float", nullable = true)
     */
    private $gastoResuemenPresupuestoCUPExcel;

    /**
     * @var float
     *
     * @ORM\Column(name="gastoresuemenpresupuestocucexcel", type="float", nullable = true)
     */
    private $gastoResuemenPresupuestoCUCExcel;

    /**
     * @var float
     *
     * @ORM\Column(name="gastodirectocupexcel", type="float", nullable = true)
     */
    private $gastoDirectoCUPExcel;

    /**
     * @var float
     *
     * @ORM\Column(name="gastodirectocucexcel", type="float", nullable = true)
     */
    private $gastoDirectoCUCExcel;

    /**
     * @var float
     *
     * @ORM\Column(name="gastogeneneralcupexcel", type="float", nullable = true)
     */
    private $gastoGeneralCUPExcel;

    /**
     * @var float
     *
     * @ORM\Column(name="gastogeneneralcucexcel", type="float", nullable = true)
     */
    private $gastoGeneralCUCExcel;

    /**
     * @var float
     *
     * @ORM\Column(name="gastoindirectocupexcel", type="float", nullable = true)
     */
    private $gastoIndirectoCUPExcel;

    /**
     * @var float
     *
     * @ORM\Column(name="gastoindirectocucexcel", type="float", nullable = true)
     */
    private $gastoIndirectoCUCExcel;

    /**
     * @var float
     *
     * @ORM\Column(name="gastopresupuestoindcupexcel", type="float", nullable = true)
     */
    private $gastoPresupuestoIndCUPExcel;

    /**
     * @var float
     *
     * @ORM\Column(name="gastopresupuestoindcucexcel", type="float", nullable = true)
     */
    private $gastoPresupuestoIndCUCExcel;

    /**
     * @var float
     *
     * @ORM\Column(name="gastoimprevistoscupexcel", type="float", nullable = true)
     */
    private $gastoImprevistosCUPExcel;

    /**
     * @var float
     *
     * @ORM\Column(name="gastoimprevistoscucexcel", type="float", nullable = true)
     */
    private $gastoImprevistosCUCExcel;


    /**
     * @var float
     *
     * @ORM\Column(name="gastocostototalcupexcel", type="float", nullable = true)
     */
    private $gastoCostoTotalCUPExcel;

    /**
     * @var float
     *
     * @ORM\Column(name="gastocostototalcucexcel", type="float", nullable = true)
     */
    private $gastoCostoTotalCUCExcel;

    /**
     * @var float
     *
     * @ORM\Column(name="gastoporcientoutilidadexcel", type="float", nullable = true)
     */
    private $gastoPorCientoUtilidadExcel;

    /**
     * @var float
     *
     * @ORM\Column(name="gastoutilidadcupexcel", type="float", nullable = true)
     */
    private $gastoUtilidadCUPExcel;

    /**
     * @var float
     *
     * @ORM\Column(name="gastoutilidadcucexcel", type="float", nullable = true)
     */
    private $gastoUtilidadCUCExcel;

    /**
     * @var float
     *
     * @ORM\Column(name="gastoprecioservconstcupexcel", type="float", nullable = true)
     */
    private $gastoPrecioServConstCUPExcel;

    /**
     * @var float
     *
     * @ORM\Column(name="gastoprecioservconstcucexcel", type="float", nullable = true)
     */
    private $gastoPrecioServConstCUCExcel;

    /**
     * @var float
     *
     * @ORM\Column(name="gastopagotributoscupexcel", type="float", nullable = true)
     */
    private $gastoPagoTributosCUPExcel;

    /**
     * @var float
     *
     * @ORM\Column(name="gastopagotributoscucexcel", type="float", nullable = true)
     */
    private $gastoPagoTributosCUCExcel;

    /**
     * @var float
     *
     * @ORM\Column(name="gastopreciomocupexcel", type="float", nullable = true)
     */
    private $gastoPrecioMOCUPExcel;

    /**
     * @var float
     *
     * @ORM\Column(name="gastopreciomocucexcel", type="float", nullable = true)
     */
    private $gastoPrecioMOCUCExcel;

    /**
     * @var float
     *
     * @ORM\Column(name="gastopreciomaterialescupexcel", type="float", nullable = true)
     */
    private $gastoPrecioMaterialesCUPExcel;

    /**
     * @var float
     *
     * @ORM\Column(name="gastopreciomaterialescucexcel", type="float", nullable = true)
     */
    private $gastoPrecioMaterialesCUCExcel;

    /**
     * @var float
     *
     * @ORM\Column(name="gastopreciototalservconstcupexcel", type="float", nullable = true)
     */
    private $gastoPrecioTotalServConstCUPExcel;


    /**
     * @var float
     *
     * @ORM\Column(name="gastopreciototalservconstcucexcel", type="float", nullable = true)
     */
    private $gastoPrecioTotalServConstCUCExcel;

    /**
     * @ORM\ManyToOne(targetEntity="Contratos", inversedBy="certificacionExcel")
     * @ORM\JoinColumn(name="idContrato", referencedColumnName="id")
     */
    private $idContrato;





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
     * Set facturado
     *
     * @param boolean $facturado
     * @return CertificacionExcel
     */
    public function setFacturado($facturado)
    {
        $this->facturado = $facturado;
    
        return $this;
    }

    /**
     * Get facturado
     *
     * @return boolean 
     */
    public function getFacturado()
    {
        return $this->facturado;
    }

    /**
     * Set objeto
     *
     * @param string $objeto
     * @return CertificacionExcel
     */
    public function setObjeto($objeto)
    {
        $this->objeto = $objeto;
    
        return $this;
    }

    /**
     * Get objeto
     *
     * @return string 
     */
    public function getObjeto()
    {
        return $this->objeto;
    }

    /**
     * Set desde
     *
     * @param \DateTime $desde
     * @return CertificacionExcel
     */
    public function setDesde($desde)
    {
        $this->desde = $desde;
    
        return $this;
    }

    /**
     * Get desde
     *
     * @return \DateTime 
     */
    public function getDesde()
    {
        return $this->desde;
    }

    /**
     * Set hasta
     *
     * @param \DateTime $hasta
     * @return CertificacionExcel
     */
    public function setHasta($hasta)
    {
        $this->hasta = $hasta;
    
        return $this;
    }

    /**
     * Get hasta
     *
     * @return \DateTime 
     */
    public function getHasta()
    {
        return $this->hasta;
    }

    /**
     * Set gastoResuemenPresupuestoCUPExcel
     *
     * @param float $gastoResuemenPresupuestoCUPExcel
     * @return CertificacionExcel
     */
    public function setGastoResuemenPresupuestoCUPExcel($gastoResuemenPresupuestoCUPExcel)
    {
        $this->gastoResuemenPresupuestoCUPExcel = $gastoResuemenPresupuestoCUPExcel;
    
        return $this;
    }

    /**
     * Get gastoResuemenPresupuestoCUPExcel
     *
     * @return float 
     */
    public function getGastoResuemenPresupuestoCUPExcel()
    {
        return $this->gastoResuemenPresupuestoCUPExcel;
    }

    /**
     * Set gastoResuemenPresupuestoCUCExcel
     *
     * @param float $gastoResuemenPresupuestoCUCExcel
     * @return CertificacionExcel
     */
    public function setGastoResuemenPresupuestoCUCExcel($gastoResuemenPresupuestoCUCExcel)
    {
        $this->gastoResuemenPresupuestoCUCExcel = $gastoResuemenPresupuestoCUCExcel;
    
        return $this;
    }

    /**
     * Get gastoResuemenPresupuestoCUCExcel
     *
     * @return float 
     */
    public function getGastoResuemenPresupuestoCUCExcel()
    {
        return $this->gastoResuemenPresupuestoCUCExcel;
    }

    /**
     * Set gastoDirectoCUPExcel
     *
     * @param float $gastoDirectoCUPExcel
     * @return CertificacionExcel
     */
    public function setGastoDirectoCUPExcel($gastoDirectoCUPExcel)
    {
        $this->gastoDirectoCUPExcel = $gastoDirectoCUPExcel;
    
        return $this;
    }

    /**
     * Get gastoDirectoCUPExcel
     *
     * @return float 
     */
    public function getGastoDirectoCUPExcel()
    {
        return $this->gastoDirectoCUPExcel;
    }

    /**
     * Set gastoDirectoCUCExcel
     *
     * @param float $gastoDirectoCUCExcel
     * @return CertificacionExcel
     */
    public function setGastoDirectoCUCExcel($gastoDirectoCUCExcel)
    {
        $this->gastoDirectoCUCExcel = $gastoDirectoCUCExcel;
    
        return $this;
    }

    /**
     * Get gastoDirectoCUCExcel
     *
     * @return float 
     */
    public function getGastoDirectoCUCExcel()
    {
        return $this->gastoDirectoCUCExcel;
    }

    /**
     * Set gastoGeneralCUPExcel
     *
     * @param float $gastoGeneralCUPExcel
     * @return CertificacionExcel
     */
    public function setGastoGeneralCUPExcel($gastoGeneralCUPExcel)
    {
        $this->gastoGeneralCUPExcel = $gastoGeneralCUPExcel;
    
        return $this;
    }

    /**
     * Get gastoGeneralCUPExcel
     *
     * @return float 
     */
    public function getGastoGeneralCUPExcel()
    {
        return $this->gastoGeneralCUPExcel;
    }

    /**
     * Set gastoGeneralCUCExcel
     *
     * @param float $gastoGeneralCUCExcel
     * @return CertificacionExcel
     */
    public function setGastoGeneralCUCExcel($gastoGeneralCUCExcel)
    {
        $this->gastoGeneralCUCExcel = $gastoGeneralCUCExcel;
    
        return $this;
    }

    /**
     * Get gastoGeneralCUCExcel
     *
     * @return float 
     */
    public function getGastoGeneralCUCExcel()
    {
        return $this->gastoGeneralCUCExcel;
    }

    /**
     * Set gastoIndirectoCUPExcel
     *
     * @param float $gastoIndirectoCUPExcel
     * @return CertificacionExcel
     */
    public function setGastoIndirectoCUPExcel($gastoIndirectoCUPExcel)
    {
        $this->gastoIndirectoCUPExcel = $gastoIndirectoCUPExcel;
    
        return $this;
    }

    /**
     * Get gastoIndirectoCUPExcel
     *
     * @return float 
     */
    public function getGastoIndirectoCUPExcel()
    {
        return $this->gastoIndirectoCUPExcel;
    }

    /**
     * Set gastoIndirectoCUCExcel
     *
     * @param float $gastoIndirectoCUCExcel
     * @return CertificacionExcel
     */
    public function setGastoIndirectoCUCExcel($gastoIndirectoCUCExcel)
    {
        $this->gastoIndirectoCUCExcel = $gastoIndirectoCUCExcel;
    
        return $this;
    }

    /**
     * Get gastoIndirectoCUCExcel
     *
     * @return float 
     */
    public function getGastoIndirectoCUCExcel()
    {
        return $this->gastoIndirectoCUCExcel;
    }

    /**
     * Set gastoPresupuestoIndCUPExcel
     *
     * @param float $gastoPresupuestoIndCUPExcel
     * @return CertificacionExcel
     */
    public function setGastoPresupuestoIndCUPExcel($gastoPresupuestoIndCUPExcel)
    {
        $this->gastoPresupuestoIndCUPExcel = $gastoPresupuestoIndCUPExcel;
    
        return $this;
    }

    /**
     * Get gastoPresupuestoIndCUPExcel
     *
     * @return float 
     */
    public function getGastoPresupuestoIndCUPExcel()
    {
        return $this->gastoPresupuestoIndCUPExcel;
    }

    /**
     * Set gastoPresupuestoIndCUCExcel
     *
     * @param float $gastoPresupuestoIndCUCExcel
     * @return CertificacionExcel
     */
    public function setGastoPresupuestoIndCUCExcel($gastoPresupuestoIndCUCExcel)
    {
        $this->gastoPresupuestoIndCUCExcel = $gastoPresupuestoIndCUCExcel;
    
        return $this;
    }

    /**
     * Get gastoPresupuestoIndCUCExcel
     *
     * @return float 
     */
    public function getGastoPresupuestoIndCUCExcel()
    {
        return $this->gastoPresupuestoIndCUCExcel;
    }

    /**
     * Set gastoImprevistosCUPExcel
     *
     * @param float $gastoImprevistosCUPExcel
     * @return CertificacionExcel
     */
    public function setGastoImprevistosCUPExcel($gastoImprevistosCUPExcel)
    {
        $this->gastoImprevistosCUPExcel = $gastoImprevistosCUPExcel;
    
        return $this;
    }

    /**
     * Get gastoImprevistosCUPExcel
     *
     * @return float 
     */
    public function getGastoImprevistosCUPExcel()
    {
        return $this->gastoImprevistosCUPExcel;
    }

    /**
     * Set gastoImprevistosCUCExcel
     *
     * @param float $gastoImprevistosCUCExcel
     * @return CertificacionExcel
     */
    public function setGastoImprevistosCUCExcel($gastoImprevistosCUCExcel)
    {
        $this->gastoImprevistosCUCExcel = $gastoImprevistosCUCExcel;
    
        return $this;
    }

    /**
     * Get gastoImprevistosCUCExcel
     *
     * @return float 
     */
    public function getGastoImprevistosCUCExcel()
    {
        return $this->gastoImprevistosCUCExcel;
    }

    /**
     * Set gastoCostoTotalCUPExcel
     *
     * @param float $gastoCostoTotalCUPExcel
     * @return CertificacionExcel
     */
    public function setGastoCostoTotalCUPExcel($gastoCostoTotalCUPExcel)
    {
        $this->gastoCostoTotalCUPExcel = $gastoCostoTotalCUPExcel;
    
        return $this;
    }

    /**
     * Get gastoCostoTotalCUPExcel
     *
     * @return float 
     */
    public function getGastoCostoTotalCUPExcel()
    {
        return $this->gastoCostoTotalCUPExcel;
    }

    /**
     * Set gastoCostoTotalCUCExcel
     *
     * @param float $gastoCostoTotalCUCExcel
     * @return CertificacionExcel
     */
    public function setGastoCostoTotalCUCExcel($gastoCostoTotalCUCExcel)
    {
        $this->gastoCostoTotalCUCExcel = $gastoCostoTotalCUCExcel;
    
        return $this;
    }

    /**
     * Get gastoCostoTotalCUCExcel
     *
     * @return float 
     */
    public function getGastoCostoTotalCUCExcel()
    {
        return $this->gastoCostoTotalCUCExcel;
    }

    /**
     * Set gastoPorCientoUtilidadExcel
     *
     * @param float $gastoPorCientoUtilidadExcel
     * @return CertificacionExcel
     */
    public function setGastoPorCientoUtilidadExcel($gastoPorCientoUtilidadExcel)
    {
        $this->gastoPorCientoUtilidadExcel = $gastoPorCientoUtilidadExcel;
    
        return $this;
    }

    /**
     * Get gastoPorCientoUtilidadExcel
     *
     * @return float 
     */
    public function getGastoPorCientoUtilidadExcel()
    {
        return $this->gastoPorCientoUtilidadExcel;
    }

    /**
     * Set gastoUtilidadCUPExcel
     *
     * @param float $gastoUtilidadCUPExcel
     * @return CertificacionExcel
     */
    public function setGastoUtilidadCUPExcel($gastoUtilidadCUPExcel)
    {
        $this->gastoUtilidadCUPExcel = $gastoUtilidadCUPExcel;
    
        return $this;
    }

    /**
     * Get gastoUtilidadCUPExcel
     *
     * @return float 
     */
    public function getGastoUtilidadCUPExcel()
    {
        return $this->gastoUtilidadCUPExcel;
    }

    /**
     * Set gastoUtilidadCUCExcel
     *
     * @param float $gastoUtilidadCUCExcel
     * @return CertificacionExcel
     */
    public function setGastoUtilidadCUCExcel($gastoUtilidadCUCExcel)
    {
        $this->gastoUtilidadCUCExcel = $gastoUtilidadCUCExcel;
    
        return $this;
    }

    /**
     * Get gastoUtilidadCUCExcel
     *
     * @return float 
     */
    public function getGastoUtilidadCUCExcel()
    {
        return $this->gastoUtilidadCUCExcel;
    }

    /**
     * Set gastoPrecioServConstCUPExcel
     *
     * @param float $gastoPrecioServConstCUPExcel
     * @return CertificacionExcel
     */
    public function setGastoPrecioServConstCUPExcel($gastoPrecioServConstCUPExcel)
    {
        $this->gastoPrecioServConstCUPExcel = $gastoPrecioServConstCUPExcel;
    
        return $this;
    }

    /**
     * Get gastoPrecioServConstCUPExcel
     *
     * @return float 
     */
    public function getGastoPrecioServConstCUPExcel()
    {
        return $this->gastoPrecioServConstCUPExcel;
    }

    /**
     * Set gastoPrecioServConstCUCExcel
     *
     * @param float $gastoPrecioServConstCUCExcel
     * @return CertificacionExcel
     */
    public function setGastoPrecioServConstCUCExcel($gastoPrecioServConstCUCExcel)
    {
        $this->gastoPrecioServConstCUCExcel = $gastoPrecioServConstCUCExcel;
    
        return $this;
    }

    /**
     * Get gastoPrecioServConstCUCExcel
     *
     * @return float 
     */
    public function getGastoPrecioServConstCUCExcel()
    {
        return $this->gastoPrecioServConstCUCExcel;
    }

    /**
     * Set gastoPagoTributosCUPExcel
     *
     * @param float $gastoPagoTributosCUPExcel
     * @return CertificacionExcel
     */
    public function setGastoPagoTributosCUPExcel($gastoPagoTributosCUPExcel)
    {
        $this->gastoPagoTributosCUPExcel = $gastoPagoTributosCUPExcel;
    
        return $this;
    }

    /**
     * Get gastoPagoTributosCUPExcel
     *
     * @return float 
     */
    public function getGastoPagoTributosCUPExcel()
    {
        return $this->gastoPagoTributosCUPExcel;
    }

    /**
     * Set gastoPagoTributosCUCExcel
     *
     * @param float $gastoPagoTributosCUCExcel
     * @return CertificacionExcel
     */
    public function setGastoPagoTributosCUCExcel($gastoPagoTributosCUCExcel)
    {
        $this->gastoPagoTributosCUCExcel = $gastoPagoTributosCUCExcel;
    
        return $this;
    }

    /**
     * Get gastoPagoTributosCUCExcel
     *
     * @return float 
     */
    public function getGastoPagoTributosCUCExcel()
    {
        return $this->gastoPagoTributosCUCExcel;
    }

    /**
     * Set gastoPrecioMOCUPExcel
     *
     * @param float $gastoPrecioMOCUPExcel
     * @return CertificacionExcel
     */
    public function setGastoPrecioMOCUPExcel($gastoPrecioMOCUPExcel)
    {
        $this->gastoPrecioMOCUPExcel = $gastoPrecioMOCUPExcel;
    
        return $this;
    }

    /**
     * Get gastoPrecioMOCUPExcel
     *
     * @return float 
     */
    public function getGastoPrecioMOCUPExcel()
    {
        return $this->gastoPrecioMOCUPExcel;
    }

    /**
     * Set gastoPrecioMOCUCExcel
     *
     * @param float $gastoPrecioMOCUCExcel
     * @return CertificacionExcel
     */
    public function setGastoPrecioMOCUCExcel($gastoPrecioMOCUCExcel)
    {
        $this->gastoPrecioMOCUCExcel = $gastoPrecioMOCUCExcel;
    
        return $this;
    }

    /**
     * Get gastoPrecioMOCUCExcel
     *
     * @return float 
     */
    public function getGastoPrecioMOCUCExcel()
    {
        return $this->gastoPrecioMOCUCExcel;
    }

    /**
     * Set gastoPrecioMaterialesCUPExcel
     *
     * @param float $gastoPrecioMaterialesCUPExcel
     * @return CertificacionExcel
     */
    public function setGastoPrecioMaterialesCUPExcel($gastoPrecioMaterialesCUPExcel)
    {
        $this->gastoPrecioMaterialesCUPExcel = $gastoPrecioMaterialesCUPExcel;
    
        return $this;
    }

    /**
     * Get gastoPrecioMaterialesCUPExcel
     *
     * @return float 
     */
    public function getGastoPrecioMaterialesCUPExcel()
    {
        return $this->gastoPrecioMaterialesCUPExcel;
    }

    /**
     * Set gastoPrecioMaterialesCUCExcel
     *
     * @param float $gastoPrecioMaterialesCUCExcel
     * @return CertificacionExcel
     */
    public function setGastoPrecioMaterialesCUCExcel($gastoPrecioMaterialesCUCExcel)
    {
        $this->gastoPrecioMaterialesCUCExcel = $gastoPrecioMaterialesCUCExcel;
    
        return $this;
    }

    /**
     * Get gastoPrecioMaterialesCUCExcel
     *
     * @return float 
     */
    public function getGastoPrecioMaterialesCUCExcel()
    {
        return $this->gastoPrecioMaterialesCUCExcel;
    }

    /**
     * Set gastoPrecioTotalServConstCUPExcel
     *
     * @param float $gastoPrecioTotalServConstCUPExcel
     * @return CertificacionExcel
     */
    public function setGastoPrecioTotalServConstCUPExcel($gastoPrecioTotalServConstCUPExcel)
    {
        $this->gastoPrecioTotalServConstCUPExcel = $gastoPrecioTotalServConstCUPExcel;
    
        return $this;
    }

    /**
     * Get gastoPrecioTotalServConstCUPExcel
     *
     * @return float 
     */
    public function getGastoPrecioTotalServConstCUPExcel()
    {
        return $this->gastoPrecioTotalServConstCUPExcel;
    }

    /**
     * Set gastoPrecioTotalServConstCUCExcel
     *
     * @param float $gastoPrecioTotalServConstCUCExcel
     * @return CertificacionExcel
     */
    public function setGastoPrecioTotalServConstCUCExcel($gastoPrecioTotalServConstCUCExcel)
    {
        $this->gastoPrecioTotalServConstCUCExcel = $gastoPrecioTotalServConstCUCExcel;
    
        return $this;
    }

    /**
     * Get gastoPrecioTotalServConstCUCExcel
     *
     * @return float 
     */
    public function getGastoPrecioTotalServConstCUCExcel()
    {
        return $this->gastoPrecioTotalServConstCUCExcel;
    }

    /**
     * Set idContrato
     *
     * @param \CCC\OfertasBundle\Entity\Contratos $idContrato
     * @return CertificacionExcel
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