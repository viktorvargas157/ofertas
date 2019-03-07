<?php

namespace CCC\OfertasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CertificacionPrewin
 *
 * @ORM\Table(name="certificacionprewin")
 * @ORM\Entity
 */
class CertificacionPrewin
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
     * @ORM\Column(name="desde", type="datetime")
     */
    private $desde;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="hasta", type="datetime")
     */
    private $hasta;

    /**
     * @var float
     *
     * @ORM\Column(name="gastomaterialescupprewin", type="float", nullable = true)
     */
    private $gastoMaterialesCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="gastomaterialescucprewin", type="float", nullable = true)
     */
    private $gastoMaterialesCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="gastomocupprewin", type="float", nullable = true)
     */
    private $gastoMOCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="gastomocucprewin", type="float", nullable = true)
     */
    private $gastoMOCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="gastousoequiposcupprewin", type="float", nullable = true)
     */
    private $gastoUsoEquiposCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="gastousoequiposcucprewin", type="float", nullable = true)
     */
    private $gastoUsoEquiposCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="otrosgastosdirectoscupprewin", type="float", nullable = true)
     */
    private $otrosGastosDirectosCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="otrosgastosdirectoscucprewin", type="float", nullable = true)
     */
    private $otrosGastosDirectosCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="gastopruebascupprewin", type="float", nullable = true)
     */
    private $gastoPruebasCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="gastopruebascucprewin", type="float", nullable = true)
     */
    private $gastoPruebasCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="gastomermascupprewin", type="float", nullable = true)
     */
    private $gastoMermasCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="gastomermascucprewin", type="float", nullable = true)
     */
    private $gastoMermasCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="gastoreplanteoscupprewin", type="float", nullable = true)
     */
    private $gastoReplanteosCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="gastoreplanteoscucprewin", type="float", nullable = true)
     */
    private $gastoReplanteosCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="gastotransferenciascupprewin", type="float", nullable = true)
     */
    private $gastoTransferenciasCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="gastotransferenciascucprewin", type="float", nullable = true)
     */
    private $gastoTransferenciasCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="gastocargascupprewin", type="float", nullable = true)
     */
    private $gastoCargasCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="gastocargascucprewin", type="float", nullable = true)
     */
    private $gastoCargasCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="gastoalmacenajecupprewin", type="float", nullable = true)
     */
    private $gastoAlmacenajeCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="gastoalmacenajecucprewin", type="float", nullable = true)
     */
    private $gastoAlmacenajeCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="gastoparadascupprewin", type="float", nullable = true)
     */
    private $gastoParadasCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="gastoparadascucprewin", type="float", nullable = true)
     */
    private $gastoParadasCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="gastoreparacioncupprewin", type="float", nullable = true)
     */
    private $gastoReparacionCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="gastoreparacioncucprewin", type="float", nullable = true)
     */
    private $gastoReparacionCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="gastoproteccioncupprewin", type="float", nullable = true)
     */
    private $gastoProteccionCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="gastoproteccioncucprewin", type="float", nullable = true)
     */
    private $gastoProteccionCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="gastomenorescupprewin", type="float", nullable = true)
     */
    private $gastoMenoresCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="gastomenorescucprewin", type="float", nullable = true)
     */
    private $gastoMenoresCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="gastoelectricidadcupprewin", type="float", nullable = true)
     */
    private $gastoElectricidadCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="gastoelectricidadcucprewin", type="float", nullable = true)
     */
    private $gastoElectricidadCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="gastoaguacupprewin", type="float", nullable = true)
     */
    private $gastoAguaCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="gastoaguacucprewin", type="float", nullable = true)
     */
    private $gastoAguaCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="gastolimpiesacupprewin", type="float", nullable = true)
     */
    private $gastoLimpiesaCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="gastolimpiesacucprewin", type="float", nullable = true)
     */
    private $gastoLimpiesaCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="gastoaseocupprewin", type="float", nullable = true)
     */
    private $gastoAseoCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="gastoaseocucprewin", type="float", nullable = true)
     */
    private $gastoAseoCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="gastosgeneralescupprewin", type="float", nullable = true)
     */
    private $gastosGeneralesCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="gastosgeneralescucprewin", type="float", nullable = true)
     */
    private $gastosGeneralesCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="gastoscomercializacioncupprewin", type="float", nullable = true)
     */
    private $gastosComercializacionCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="gastoscomercializacioncucprewin", type="float", nullable = true)
     */
    private $gastosComercializacionCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="gastospreparacioncupprewin", type="float", nullable = true)
     */
    private $gastosPreparacionCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="gastospreparacioncucprewin", type="float", nullable = true)
     */
    private $gastosPreparacionCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="gastosadministracioncupprewin", type="float", nullable = true)
     */
    private $gastosAdministracionCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="gastosadministracioncucprewin", type="float", nullable = true)
     */
    private $gastosAdministracionCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="totalgastosdirectoscupprewin", type="float", nullable = true)
     */
    private $totalGastosDirectosCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="totalgastosdirectoscucprewin", type="float", nullable = true)
     */
    private $totalGastosDirectosCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="gastosindirectoscupprewin", type="float", nullable = true)
     */
    private $gastosIndirectosCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="gastosindirectoscucprewin", type="float", nullable = true)
     */
    private $gastosIndirectosCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="subtotalgastoscupprewin", type="float", nullable = true)
     */
    private $subTotalGastosCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="subtotalgastoscucprewin", type="float", nullable = true)
     */
    private $subTotalGastosCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="presindftcupprewin", type="float", nullable = true)
     */
    private $presIndFTCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="presindftcucprewin", type="float", nullable = true)
     */
    private $presIndFTCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="presindogacupprewin", type="float", nullable = true)
     */
    private $presIndOGACUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="presindogacucprewin", type="float", nullable = true)
     */
    private $presIndOGACUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="presindgbcupprewin", type="float", nullable = true)
     */
    private $presIndGBCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="presindgbcucprewin", type="float", nullable = true)
     */
    private $presIndGBCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="presindsegcupprewin", type="float", nullable = true)
     */
    private $presIndSegCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="presindsegcucprewin", type="float", nullable = true)
     */
    private $presIndSegCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="presindimpcupprewin", type="float", nullable = true)
     */
    private $presIndImpCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="presindimpcucprewin", type="float", nullable = true)
     */
    private $presIndImpCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="presindtranscupprewin", type="float", nullable = true)
     */
    private $presIndTransCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="presindtranscucprewin", type="float", nullable = true)
     */
    private $presIndTransCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="subtotalpresindcupprewin", type="float", nullable = true)
     */
    private $subTotalPresIndCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="subtotalpresindcucprewin", type="float", nullable = true)
     */
    private $subTotalPresIndCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="costototalcupprewin", type="float", nullable = true)
     */
    private $costoTotalCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="costototalcucprewin", type="float", nullable = true)
     */
    private $costoTotalCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="pcutilidadprewin", type="float", nullable = true)
     */
    private $pcUtilidadPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="utilidadcupprewin", type="float", nullable = true)
     */
    private $utilidadCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="utilidadcucprewin", type="float", nullable = true)
     */
    private $utilidadCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="precservconstcupprewin", type="float", nullable = true)
     */
    private $precServConstCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="precservconstcucprewin", type="float", nullable = true)
     */
    private $precServConstCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="presindtributoscupprewin", type="float", nullable = true)
     */
    private $presIndTributosCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="presindtributoscucprewin", type="float", nullable = true)
     */
    private $presIndTributosCUCPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="prectotalservconstcupprewin", type="float", nullable = true)
     */
    private $precTotalServConstCUPPrewin;

    /**
     * @var float
     *
     * @ORM\Column(name="prectotalservconstcucprewin", type="float", nullable = true)
     */
    private $precTotalServConstCUCPrewin;


    /**
     * @ORM\ManyToOne(targetEntity="Contratos", inversedBy="certificacionPrewin")
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
     * @return CertificacionPrewin
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
     * @return CertificacionPrewin
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
     * @return CertificacionPrewin
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
     * @return CertificacionPrewin
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
     * Set gastoMaterialesCUPPrewin
     *
     * @param float $gastoMaterialesCUPPrewin
     * @return CertificacionPrewin
     */
    public function setGastoMaterialesCUPPrewin($gastoMaterialesCUPPrewin)
    {
        $this->gastoMaterialesCUPPrewin = $gastoMaterialesCUPPrewin;
    
        return $this;
    }

    /**
     * Get gastoMaterialesCUPPrewin
     *
     * @return float 
     */
    public function getGastoMaterialesCUPPrewin()
    {
        return $this->gastoMaterialesCUPPrewin;
    }

    /**
     * Set gastoMaterialesCUCPrewin
     *
     * @param float $gastoMaterialesCUCPrewin
     * @return CertificacionPrewin
     */
    public function setGastoMaterialesCUCPrewin($gastoMaterialesCUCPrewin)
    {
        $this->gastoMaterialesCUCPrewin = $gastoMaterialesCUCPrewin;
    
        return $this;
    }

    /**
     * Get gastoMaterialesCUCPrewin
     *
     * @return float 
     */
    public function getGastoMaterialesCUCPrewin()
    {
        return $this->gastoMaterialesCUCPrewin;
    }

    /**
     * Set gastoMOCUPPrewin
     *
     * @param float $gastoMOCUPPrewin
     * @return CertificacionPrewin
     */
    public function setGastoMOCUPPrewin($gastoMOCUPPrewin)
    {
        $this->gastoMOCUPPrewin = $gastoMOCUPPrewin;
    
        return $this;
    }

    /**
     * Get gastoMOCUPPrewin
     *
     * @return float 
     */
    public function getGastoMOCUPPrewin()
    {
        return $this->gastoMOCUPPrewin;
    }

    /**
     * Set gastoMOCUCPrewin
     *
     * @param float $gastoMOCUCPrewin
     * @return CertificacionPrewin
     */
    public function setGastoMOCUCPrewin($gastoMOCUCPrewin)
    {
        $this->gastoMOCUCPrewin = $gastoMOCUCPrewin;
    
        return $this;
    }

    /**
     * Get gastoMOCUCPrewin
     *
     * @return float 
     */
    public function getGastoMOCUCPrewin()
    {
        return $this->gastoMOCUCPrewin;
    }

    /**
     * Set gastoUsoEquiposCUPPrewin
     *
     * @param float $gastoUsoEquiposCUPPrewin
     * @return CertificacionPrewin
     */
    public function setGastoUsoEquiposCUPPrewin($gastoUsoEquiposCUPPrewin)
    {
        $this->gastoUsoEquiposCUPPrewin = $gastoUsoEquiposCUPPrewin;
    
        return $this;
    }

    /**
     * Get gastoUsoEquiposCUPPrewin
     *
     * @return float 
     */
    public function getGastoUsoEquiposCUPPrewin()
    {
        return $this->gastoUsoEquiposCUPPrewin;
    }

    /**
     * Set gastoUsoEquiposCUCPrewin
     *
     * @param float $gastoUsoEquiposCUCPrewin
     * @return CertificacionPrewin
     */
    public function setGastoUsoEquiposCUCPrewin($gastoUsoEquiposCUCPrewin)
    {
        $this->gastoUsoEquiposCUCPrewin = $gastoUsoEquiposCUCPrewin;
    
        return $this;
    }

    /**
     * Get gastoUsoEquiposCUCPrewin
     *
     * @return float 
     */
    public function getGastoUsoEquiposCUCPrewin()
    {
        return $this->gastoUsoEquiposCUCPrewin;
    }

    /**
     * Set otrosGastosDirectosCUPPrewin
     *
     * @param float $otrosGastosDirectosCUPPrewin
     * @return CertificacionPrewin
     */
    public function setOtrosGastosDirectosCUPPrewin($otrosGastosDirectosCUPPrewin)
    {
        $this->otrosGastosDirectosCUPPrewin = $otrosGastosDirectosCUPPrewin;
    
        return $this;
    }

    /**
     * Get otrosGastosDirectosCUPPrewin
     *
     * @return float 
     */
    public function getOtrosGastosDirectosCUPPrewin()
    {
        return $this->otrosGastosDirectosCUPPrewin;
    }

    /**
     * Set otrosGastosDirectosCUCPrewin
     *
     * @param float $otrosGastosDirectosCUCPrewin
     * @return CertificacionPrewin
     */
    public function setOtrosGastosDirectosCUCPrewin($otrosGastosDirectosCUCPrewin)
    {
        $this->otrosGastosDirectosCUCPrewin = $otrosGastosDirectosCUCPrewin;
    
        return $this;
    }

    /**
     * Get otrosGastosDirectosCUCPrewin
     *
     * @return float 
     */
    public function getOtrosGastosDirectosCUCPrewin()
    {
        return $this->otrosGastosDirectosCUCPrewin;
    }

    /**
     * Set gastoPruebasCUPPrewin
     *
     * @param float $gastoPruebasCUPPrewin
     * @return CertificacionPrewin
     */
    public function setGastoPruebasCUPPrewin($gastoPruebasCUPPrewin)
    {
        $this->gastoPruebasCUPPrewin = $gastoPruebasCUPPrewin;
    
        return $this;
    }

    /**
     * Get gastoPruebasCUPPrewin
     *
     * @return float 
     */
    public function getGastoPruebasCUPPrewin()
    {
        return $this->gastoPruebasCUPPrewin;
    }

    /**
     * Set gastoPruebasCUCPrewin
     *
     * @param float $gastoPruebasCUCPrewin
     * @return CertificacionPrewin
     */
    public function setGastoPruebasCUCPrewin($gastoPruebasCUCPrewin)
    {
        $this->gastoPruebasCUCPrewin = $gastoPruebasCUCPrewin;
    
        return $this;
    }

    /**
     * Get gastoPruebasCUCPrewin
     *
     * @return float 
     */
    public function getGastoPruebasCUCPrewin()
    {
        return $this->gastoPruebasCUCPrewin;
    }

    /**
     * Set gastoMermasCUPPrewin
     *
     * @param float $gastoMermasCUPPrewin
     * @return CertificacionPrewin
     */
    public function setGastoMermasCUPPrewin($gastoMermasCUPPrewin)
    {
        $this->gastoMermasCUPPrewin = $gastoMermasCUPPrewin;
    
        return $this;
    }

    /**
     * Get gastoMermasCUPPrewin
     *
     * @return float 
     */
    public function getGastoMermasCUPPrewin()
    {
        return $this->gastoMermasCUPPrewin;
    }

    /**
     * Set gastoMermasCUCPrewin
     *
     * @param float $gastoMermasCUCPrewin
     * @return CertificacionPrewin
     */
    public function setGastoMermasCUCPrewin($gastoMermasCUCPrewin)
    {
        $this->gastoMermasCUCPrewin = $gastoMermasCUCPrewin;
    
        return $this;
    }

    /**
     * Get gastoMermasCUCPrewin
     *
     * @return float 
     */
    public function getGastoMermasCUCPrewin()
    {
        return $this->gastoMermasCUCPrewin;
    }

    /**
     * Set gastoReplanteosCUPPrewin
     *
     * @param float $gastoReplanteosCUPPrewin
     * @return CertificacionPrewin
     */
    public function setGastoReplanteosCUPPrewin($gastoReplanteosCUPPrewin)
    {
        $this->gastoReplanteosCUPPrewin = $gastoReplanteosCUPPrewin;
    
        return $this;
    }

    /**
     * Get gastoReplanteosCUPPrewin
     *
     * @return float 
     */
    public function getGastoReplanteosCUPPrewin()
    {
        return $this->gastoReplanteosCUPPrewin;
    }

    /**
     * Set gastoReplanteosCUCPrewin
     *
     * @param float $gastoReplanteosCUCPrewin
     * @return CertificacionPrewin
     */
    public function setGastoReplanteosCUCPrewin($gastoReplanteosCUCPrewin)
    {
        $this->gastoReplanteosCUCPrewin = $gastoReplanteosCUCPrewin;
    
        return $this;
    }

    /**
     * Get gastoReplanteosCUCPrewin
     *
     * @return float 
     */
    public function getGastoReplanteosCUCPrewin()
    {
        return $this->gastoReplanteosCUCPrewin;
    }

    /**
     * Set gastoTransferenciasCUPPrewin
     *
     * @param float $gastoTransferenciasCUPPrewin
     * @return CertificacionPrewin
     */
    public function setGastoTransferenciasCUPPrewin($gastoTransferenciasCUPPrewin)
    {
        $this->gastoTransferenciasCUPPrewin = $gastoTransferenciasCUPPrewin;
    
        return $this;
    }

    /**
     * Get gastoTransferenciasCUPPrewin
     *
     * @return float 
     */
    public function getGastoTransferenciasCUPPrewin()
    {
        return $this->gastoTransferenciasCUPPrewin;
    }

    /**
     * Set gastoTransferenciasCUCPrewin
     *
     * @param float $gastoTransferenciasCUCPrewin
     * @return CertificacionPrewin
     */
    public function setGastoTransferenciasCUCPrewin($gastoTransferenciasCUCPrewin)
    {
        $this->gastoTransferenciasCUCPrewin = $gastoTransferenciasCUCPrewin;
    
        return $this;
    }

    /**
     * Get gastoTransferenciasCUCPrewin
     *
     * @return float 
     */
    public function getGastoTransferenciasCUCPrewin()
    {
        return $this->gastoTransferenciasCUCPrewin;
    }

    /**
     * Set gastoCargasCUPPrewin
     *
     * @param float $gastoCargasCUPPrewin
     * @return CertificacionPrewin
     */
    public function setGastoCargasCUPPrewin($gastoCargasCUPPrewin)
    {
        $this->gastoCargasCUPPrewin = $gastoCargasCUPPrewin;
    
        return $this;
    }

    /**
     * Get gastoCargasCUPPrewin
     *
     * @return float 
     */
    public function getGastoCargasCUPPrewin()
    {
        return $this->gastoCargasCUPPrewin;
    }

    /**
     * Set gastoCargasCUCPrewin
     *
     * @param float $gastoCargasCUCPrewin
     * @return CertificacionPrewin
     */
    public function setGastoCargasCUCPrewin($gastoCargasCUCPrewin)
    {
        $this->gastoCargasCUCPrewin = $gastoCargasCUCPrewin;
    
        return $this;
    }

    /**
     * Get gastoCargasCUCPrewin
     *
     * @return float 
     */
    public function getGastoCargasCUCPrewin()
    {
        return $this->gastoCargasCUCPrewin;
    }

    /**
     * Set gastoAlmacenajeCUPPrewin
     *
     * @param float $gastoAlmacenajeCUPPrewin
     * @return CertificacionPrewin
     */
    public function setGastoAlmacenajeCUPPrewin($gastoAlmacenajeCUPPrewin)
    {
        $this->gastoAlmacenajeCUPPrewin = $gastoAlmacenajeCUPPrewin;
    
        return $this;
    }

    /**
     * Get gastoAlmacenajeCUPPrewin
     *
     * @return float 
     */
    public function getGastoAlmacenajeCUPPrewin()
    {
        return $this->gastoAlmacenajeCUPPrewin;
    }

    /**
     * Set gastoAlmacenajeCUCPrewin
     *
     * @param float $gastoAlmacenajeCUCPrewin
     * @return CertificacionPrewin
     */
    public function setGastoAlmacenajeCUCPrewin($gastoAlmacenajeCUCPrewin)
    {
        $this->gastoAlmacenajeCUCPrewin = $gastoAlmacenajeCUCPrewin;
    
        return $this;
    }

    /**
     * Get gastoAlmacenajeCUCPrewin
     *
     * @return float 
     */
    public function getGastoAlmacenajeCUCPrewin()
    {
        return $this->gastoAlmacenajeCUCPrewin;
    }

    /**
     * Set gastoParadasCUPPrewin
     *
     * @param float $gastoParadasCUPPrewin
     * @return CertificacionPrewin
     */
    public function setGastoParadasCUPPrewin($gastoParadasCUPPrewin)
    {
        $this->gastoParadasCUPPrewin = $gastoParadasCUPPrewin;
    
        return $this;
    }

    /**
     * Get gastoParadasCUPPrewin
     *
     * @return float 
     */
    public function getGastoParadasCUPPrewin()
    {
        return $this->gastoParadasCUPPrewin;
    }

    /**
     * Set gastoParadasCUCPrewin
     *
     * @param float $gastoParadasCUCPrewin
     * @return CertificacionPrewin
     */
    public function setGastoParadasCUCPrewin($gastoParadasCUCPrewin)
    {
        $this->gastoParadasCUCPrewin = $gastoParadasCUCPrewin;
    
        return $this;
    }

    /**
     * Get gastoParadasCUCPrewin
     *
     * @return float 
     */
    public function getGastoParadasCUCPrewin()
    {
        return $this->gastoParadasCUCPrewin;
    }

    /**
     * Set gastoReparacionCUPPrewin
     *
     * @param float $gastoReparacionCUPPrewin
     * @return CertificacionPrewin
     */
    public function setGastoReparacionCUPPrewin($gastoReparacionCUPPrewin)
    {
        $this->gastoReparacionCUPPrewin = $gastoReparacionCUPPrewin;
    
        return $this;
    }

    /**
     * Get gastoReparacionCUPPrewin
     *
     * @return float 
     */
    public function getGastoReparacionCUPPrewin()
    {
        return $this->gastoReparacionCUPPrewin;
    }

    /**
     * Set gastoReparacionCUCPrewin
     *
     * @param float $gastoReparacionCUCPrewin
     * @return CertificacionPrewin
     */
    public function setGastoReparacionCUCPrewin($gastoReparacionCUCPrewin)
    {
        $this->gastoReparacionCUCPrewin = $gastoReparacionCUCPrewin;
    
        return $this;
    }

    /**
     * Get gastoReparacionCUCPrewin
     *
     * @return float 
     */
    public function getGastoReparacionCUCPrewin()
    {
        return $this->gastoReparacionCUCPrewin;
    }

    /**
     * Set gastoProteccionCUPPrewin
     *
     * @param float $gastoProteccionCUPPrewin
     * @return CertificacionPrewin
     */
    public function setGastoProteccionCUPPrewin($gastoProteccionCUPPrewin)
    {
        $this->gastoProteccionCUPPrewin = $gastoProteccionCUPPrewin;
    
        return $this;
    }

    /**
     * Get gastoProteccionCUPPrewin
     *
     * @return float 
     */
    public function getGastoProteccionCUPPrewin()
    {
        return $this->gastoProteccionCUPPrewin;
    }

    /**
     * Set gastoProteccionCUCPrewin
     *
     * @param float $gastoProteccionCUCPrewin
     * @return CertificacionPrewin
     */
    public function setGastoProteccionCUCPrewin($gastoProteccionCUCPrewin)
    {
        $this->gastoProteccionCUCPrewin = $gastoProteccionCUCPrewin;
    
        return $this;
    }

    /**
     * Get gastoProteccionCUCPrewin
     *
     * @return float 
     */
    public function getGastoProteccionCUCPrewin()
    {
        return $this->gastoProteccionCUCPrewin;
    }

    /**
     * Set gastoMenoresCUPPrewin
     *
     * @param float $gastoMenoresCUPPrewin
     * @return CertificacionPrewin
     */
    public function setGastoMenoresCUPPrewin($gastoMenoresCUPPrewin)
    {
        $this->gastoMenoresCUPPrewin = $gastoMenoresCUPPrewin;
    
        return $this;
    }

    /**
     * Get gastoMenoresCUPPrewin
     *
     * @return float 
     */
    public function getGastoMenoresCUPPrewin()
    {
        return $this->gastoMenoresCUPPrewin;
    }

    /**
     * Set gastoMenoresCUCPrewin
     *
     * @param float $gastoMenoresCUCPrewin
     * @return CertificacionPrewin
     */
    public function setGastoMenoresCUCPrewin($gastoMenoresCUCPrewin)
    {
        $this->gastoMenoresCUCPrewin = $gastoMenoresCUCPrewin;
    
        return $this;
    }

    /**
     * Get gastoMenoresCUCPrewin
     *
     * @return float 
     */
    public function getGastoMenoresCUCPrewin()
    {
        return $this->gastoMenoresCUCPrewin;
    }

    /**
     * Set gastoElectricidadCUPPrewin
     *
     * @param float $gastoElectricidadCUPPrewin
     * @return CertificacionPrewin
     */
    public function setGastoElectricidadCUPPrewin($gastoElectricidadCUPPrewin)
    {
        $this->gastoElectricidadCUPPrewin = $gastoElectricidadCUPPrewin;
    
        return $this;
    }

    /**
     * Get gastoElectricidadCUPPrewin
     *
     * @return float 
     */
    public function getGastoElectricidadCUPPrewin()
    {
        return $this->gastoElectricidadCUPPrewin;
    }

    /**
     * Set gastoElectricidadCUCPrewin
     *
     * @param float $gastoElectricidadCUCPrewin
     * @return CertificacionPrewin
     */
    public function setGastoElectricidadCUCPrewin($gastoElectricidadCUCPrewin)
    {
        $this->gastoElectricidadCUCPrewin = $gastoElectricidadCUCPrewin;
    
        return $this;
    }

    /**
     * Get gastoElectricidadCUCPrewin
     *
     * @return float 
     */
    public function getGastoElectricidadCUCPrewin()
    {
        return $this->gastoElectricidadCUCPrewin;
    }

    /**
     * Set gastoAguaCUPPrewin
     *
     * @param float $gastoAguaCUPPrewin
     * @return CertificacionPrewin
     */
    public function setGastoAguaCUPPrewin($gastoAguaCUPPrewin)
    {
        $this->gastoAguaCUPPrewin = $gastoAguaCUPPrewin;
    
        return $this;
    }

    /**
     * Get gastoAguaCUPPrewin
     *
     * @return float 
     */
    public function getGastoAguaCUPPrewin()
    {
        return $this->gastoAguaCUPPrewin;
    }

    /**
     * Set gastoAguaCUCPrewin
     *
     * @param float $gastoAguaCUCPrewin
     * @return CertificacionPrewin
     */
    public function setGastoAguaCUCPrewin($gastoAguaCUCPrewin)
    {
        $this->gastoAguaCUCPrewin = $gastoAguaCUCPrewin;
    
        return $this;
    }

    /**
     * Get gastoAguaCUCPrewin
     *
     * @return float 
     */
    public function getGastoAguaCUCPrewin()
    {
        return $this->gastoAguaCUCPrewin;
    }

    /**
     * Set gastoLimpiesaCUPPrewin
     *
     * @param float $gastoLimpiesaCUPPrewin
     * @return CertificacionPrewin
     */
    public function setGastoLimpiesaCUPPrewin($gastoLimpiesaCUPPrewin)
    {
        $this->gastoLimpiesaCUPPrewin = $gastoLimpiesaCUPPrewin;
    
        return $this;
    }

    /**
     * Get gastoLimpiesaCUPPrewin
     *
     * @return float 
     */
    public function getGastoLimpiesaCUPPrewin()
    {
        return $this->gastoLimpiesaCUPPrewin;
    }

    /**
     * Set gastoLimpiesaCUCPrewin
     *
     * @param float $gastoLimpiesaCUCPrewin
     * @return CertificacionPrewin
     */
    public function setGastoLimpiesaCUCPrewin($gastoLimpiesaCUCPrewin)
    {
        $this->gastoLimpiesaCUCPrewin = $gastoLimpiesaCUCPrewin;
    
        return $this;
    }

    /**
     * Get gastoLimpiesaCUCPrewin
     *
     * @return float 
     */
    public function getGastoLimpiesaCUCPrewin()
    {
        return $this->gastoLimpiesaCUCPrewin;
    }

    /**
     * Set gastoAseoCUPPrewin
     *
     * @param float $gastoAseoCUPPrewin
     * @return CertificacionPrewin
     */
    public function setGastoAseoCUPPrewin($gastoAseoCUPPrewin)
    {
        $this->gastoAseoCUPPrewin = $gastoAseoCUPPrewin;
    
        return $this;
    }

    /**
     * Get gastoAseoCUPPrewin
     *
     * @return float 
     */
    public function getGastoAseoCUPPrewin()
    {
        return $this->gastoAseoCUPPrewin;
    }

    /**
     * Set gastoAseoCUCPrewin
     *
     * @param float $gastoAseoCUCPrewin
     * @return CertificacionPrewin
     */
    public function setGastoAseoCUCPrewin($gastoAseoCUCPrewin)
    {
        $this->gastoAseoCUCPrewin = $gastoAseoCUCPrewin;
    
        return $this;
    }

    /**
     * Get gastoAseoCUCPrewin
     *
     * @return float 
     */
    public function getGastoAseoCUCPrewin()
    {
        return $this->gastoAseoCUCPrewin;
    }

    /**
     * Set gastosGeneralesCUPPrewin
     *
     * @param float $gastosGeneralesCUPPrewin
     * @return CertificacionPrewin
     */
    public function setGastosGeneralesCUPPrewin($gastosGeneralesCUPPrewin)
    {
        $this->gastosGeneralesCUPPrewin = $gastosGeneralesCUPPrewin;
    
        return $this;
    }

    /**
     * Get gastosGeneralesCUPPrewin
     *
     * @return float 
     */
    public function getGastosGeneralesCUPPrewin()
    {
        return $this->gastosGeneralesCUPPrewin;
    }

    /**
     * Set gastosGeneralesCUCPrewin
     *
     * @param float $gastosGeneralesCUCPrewin
     * @return CertificacionPrewin
     */
    public function setGastosGeneralesCUCPrewin($gastosGeneralesCUCPrewin)
    {
        $this->gastosGeneralesCUCPrewin = $gastosGeneralesCUCPrewin;
    
        return $this;
    }

    /**
     * Get gastosGeneralesCUCPrewin
     *
     * @return float 
     */
    public function getGastosGeneralesCUCPrewin()
    {
        return $this->gastosGeneralesCUCPrewin;
    }

    /**
     * Set gastosComercializacionCUPPrewin
     *
     * @param float $gastosComercializacionCUPPrewin
     * @return CertificacionPrewin
     */
    public function setGastosComercializacionCUPPrewin($gastosComercializacionCUPPrewin)
    {
        $this->gastosComercializacionCUPPrewin = $gastosComercializacionCUPPrewin;
    
        return $this;
    }

    /**
     * Get gastosComercializacionCUPPrewin
     *
     * @return float 
     */
    public function getGastosComercializacionCUPPrewin()
    {
        return $this->gastosComercializacionCUPPrewin;
    }

    /**
     * Set gastosComercializacionCUCPrewin
     *
     * @param float $gastosComercializacionCUCPrewin
     * @return CertificacionPrewin
     */
    public function setGastosComercializacionCUCPrewin($gastosComercializacionCUCPrewin)
    {
        $this->gastosComercializacionCUCPrewin = $gastosComercializacionCUCPrewin;
    
        return $this;
    }

    /**
     * Get gastosComercializacionCUCPrewin
     *
     * @return float 
     */
    public function getGastosComercializacionCUCPrewin()
    {
        return $this->gastosComercializacionCUCPrewin;
    }

    /**
     * Set gastosPreparacionCUPPrewin
     *
     * @param float $gastosPreparacionCUPPrewin
     * @return CertificacionPrewin
     */
    public function setGastosPreparacionCUPPrewin($gastosPreparacionCUPPrewin)
    {
        $this->gastosPreparacionCUPPrewin = $gastosPreparacionCUPPrewin;
    
        return $this;
    }

    /**
     * Get gastosPreparacionCUPPrewin
     *
     * @return float 
     */
    public function getGastosPreparacionCUPPrewin()
    {
        return $this->gastosPreparacionCUPPrewin;
    }

    /**
     * Set gastosPreparacionCUCPrewin
     *
     * @param float $gastosPreparacionCUCPrewin
     * @return CertificacionPrewin
     */
    public function setGastosPreparacionCUCPrewin($gastosPreparacionCUCPrewin)
    {
        $this->gastosPreparacionCUCPrewin = $gastosPreparacionCUCPrewin;
    
        return $this;
    }

    /**
     * Get gastosPreparacionCUCPrewin
     *
     * @return float 
     */
    public function getGastosPreparacionCUCPrewin()
    {
        return $this->gastosPreparacionCUCPrewin;
    }

    /**
     * Set gastosAdministracionCUPPrewin
     *
     * @param float $gastosAdministracionCUPPrewin
     * @return CertificacionPrewin
     */
    public function setGastosAdministracionCUPPrewin($gastosAdministracionCUPPrewin)
    {
        $this->gastosAdministracionCUPPrewin = $gastosAdministracionCUPPrewin;
    
        return $this;
    }

    /**
     * Get gastosAdministracionCUPPrewin
     *
     * @return float 
     */
    public function getGastosAdministracionCUPPrewin()
    {
        return $this->gastosAdministracionCUPPrewin;
    }

    /**
     * Set gastosAdministracionCUCPrewin
     *
     * @param float $gastosAdministracionCUCPrewin
     * @return CertificacionPrewin
     */
    public function setGastosAdministracionCUCPrewin($gastosAdministracionCUCPrewin)
    {
        $this->gastosAdministracionCUCPrewin = $gastosAdministracionCUCPrewin;
    
        return $this;
    }

    /**
     * Get gastosAdministracionCUCPrewin
     *
     * @return float 
     */
    public function getGastosAdministracionCUCPrewin()
    {
        return $this->gastosAdministracionCUCPrewin;
    }

    /**
     * Set totalGastosDirectosCUPPrewin
     *
     * @param float $totalGastosDirectosCUPPrewin
     * @return CertificacionPrewin
     */
    public function setTotalGastosDirectosCUPPrewin($totalGastosDirectosCUPPrewin)
    {
        $this->totalGastosDirectosCUPPrewin = $totalGastosDirectosCUPPrewin;
    
        return $this;
    }

    /**
     * Get totalGastosDirectosCUPPrewin
     *
     * @return float 
     */
    public function getTotalGastosDirectosCUPPrewin()
    {
        return $this->totalGastosDirectosCUPPrewin;
    }

    /**
     * Set totalGastosDirectosCUCPrewin
     *
     * @param float $totalGastosDirectosCUCPrewin
     * @return CertificacionPrewin
     */
    public function setTotalGastosDirectosCUCPrewin($totalGastosDirectosCUCPrewin)
    {
        $this->totalGastosDirectosCUCPrewin = $totalGastosDirectosCUCPrewin;
    
        return $this;
    }

    /**
     * Get totalGastosDirectosCUCPrewin
     *
     * @return float 
     */
    public function getTotalGastosDirectosCUCPrewin()
    {
        return $this->totalGastosDirectosCUCPrewin;
    }

    /**
     * Set gastosIndirectosCUPPrewin
     *
     * @param float $gastosIndirectosCUPPrewin
     * @return CertificacionPrewin
     */
    public function setGastosIndirectosCUPPrewin($gastosIndirectosCUPPrewin)
    {
        $this->gastosIndirectosCUPPrewin = $gastosIndirectosCUPPrewin;
    
        return $this;
    }

    /**
     * Get gastosIndirectosCUPPrewin
     *
     * @return float 
     */
    public function getGastosIndirectosCUPPrewin()
    {
        return $this->gastosIndirectosCUPPrewin;
    }

    /**
     * Set gastosIndirectosCUCPrewin
     *
     * @param float $gastosIndirectosCUCPrewin
     * @return CertificacionPrewin
     */
    public function setGastosIndirectosCUCPrewin($gastosIndirectosCUCPrewin)
    {
        $this->gastosIndirectosCUCPrewin = $gastosIndirectosCUCPrewin;
    
        return $this;
    }

    /**
     * Get gastosIndirectosCUCPrewin
     *
     * @return float 
     */
    public function getGastosIndirectosCUCPrewin()
    {
        return $this->gastosIndirectosCUCPrewin;
    }

    /**
     * Set subTotalGastosCUPPrewin
     *
     * @param float $subTotalGastosCUPPrewin
     * @return CertificacionPrewin
     */
    public function setSubTotalGastosCUPPrewin($subTotalGastosCUPPrewin)
    {
        $this->subTotalGastosCUPPrewin = $subTotalGastosCUPPrewin;
    
        return $this;
    }

    /**
     * Get subTotalGastosCUPPrewin
     *
     * @return float 
     */
    public function getSubTotalGastosCUPPrewin()
    {
        return $this->subTotalGastosCUPPrewin;
    }

    /**
     * Set subTotalGastosCUCPrewin
     *
     * @param float $subTotalGastosCUCPrewin
     * @return CertificacionPrewin
     */
    public function setSubTotalGastosCUCPrewin($subTotalGastosCUCPrewin)
    {
        $this->subTotalGastosCUCPrewin = $subTotalGastosCUCPrewin;
    
        return $this;
    }

    /**
     * Get subTotalGastosCUCPrewin
     *
     * @return float 
     */
    public function getSubTotalGastosCUCPrewin()
    {
        return $this->subTotalGastosCUCPrewin;
    }

    /**
     * Set presIndFTCUPPrewin
     *
     * @param float $presIndFTCUPPrewin
     * @return CertificacionPrewin
     */
    public function setPresIndFTCUPPrewin($presIndFTCUPPrewin)
    {
        $this->presIndFTCUPPrewin = $presIndFTCUPPrewin;
    
        return $this;
    }

    /**
     * Get presIndFTCUPPrewin
     *
     * @return float 
     */
    public function getPresIndFTCUPPrewin()
    {
        return $this->presIndFTCUPPrewin;
    }

    /**
     * Set presIndFTCUCPrewin
     *
     * @param float $presIndFTCUCPrewin
     * @return CertificacionPrewin
     */
    public function setPresIndFTCUCPrewin($presIndFTCUCPrewin)
    {
        $this->presIndFTCUCPrewin = $presIndFTCUCPrewin;
    
        return $this;
    }

    /**
     * Get presIndFTCUCPrewin
     *
     * @return float 
     */
    public function getPresIndFTCUCPrewin()
    {
        return $this->presIndFTCUCPrewin;
    }

    /**
     * Set presIndOGACUPPrewin
     *
     * @param float $presIndOGACUPPrewin
     * @return CertificacionPrewin
     */
    public function setPresIndOGACUPPrewin($presIndOGACUPPrewin)
    {
        $this->presIndOGACUPPrewin = $presIndOGACUPPrewin;
    
        return $this;
    }

    /**
     * Get presIndOGACUPPrewin
     *
     * @return float 
     */
    public function getPresIndOGACUPPrewin()
    {
        return $this->presIndOGACUPPrewin;
    }

    /**
     * Set presIndOGACUCPrewin
     *
     * @param float $presIndOGACUCPrewin
     * @return CertificacionPrewin
     */
    public function setPresIndOGACUCPrewin($presIndOGACUCPrewin)
    {
        $this->presIndOGACUCPrewin = $presIndOGACUCPrewin;
    
        return $this;
    }

    /**
     * Get presIndOGACUCPrewin
     *
     * @return float 
     */
    public function getPresIndOGACUCPrewin()
    {
        return $this->presIndOGACUCPrewin;
    }

    /**
     * Set presIndGBCUPPrewin
     *
     * @param float $presIndGBCUPPrewin
     * @return CertificacionPrewin
     */
    public function setPresIndGBCUPPrewin($presIndGBCUPPrewin)
    {
        $this->presIndGBCUPPrewin = $presIndGBCUPPrewin;
    
        return $this;
    }

    /**
     * Get presIndGBCUPPrewin
     *
     * @return float 
     */
    public function getPresIndGBCUPPrewin()
    {
        return $this->presIndGBCUPPrewin;
    }

    /**
     * Set presIndGBCUCPrewin
     *
     * @param float $presIndGBCUCPrewin
     * @return CertificacionPrewin
     */
    public function setPresIndGBCUCPrewin($presIndGBCUCPrewin)
    {
        $this->presIndGBCUCPrewin = $presIndGBCUCPrewin;
    
        return $this;
    }

    /**
     * Get presIndGBCUCPrewin
     *
     * @return float 
     */
    public function getPresIndGBCUCPrewin()
    {
        return $this->presIndGBCUCPrewin;
    }

    /**
     * Set presIndSegCUPPrewin
     *
     * @param float $presIndSegCUPPrewin
     * @return CertificacionPrewin
     */
    public function setPresIndSegCUPPrewin($presIndSegCUPPrewin)
    {
        $this->presIndSegCUPPrewin = $presIndSegCUPPrewin;
    
        return $this;
    }

    /**
     * Get presIndSegCUPPrewin
     *
     * @return float 
     */
    public function getPresIndSegCUPPrewin()
    {
        return $this->presIndSegCUPPrewin;
    }

    /**
     * Set presIndSegCUCPrewin
     *
     * @param float $presIndSegCUCPrewin
     * @return CertificacionPrewin
     */
    public function setPresIndSegCUCPrewin($presIndSegCUCPrewin)
    {
        $this->presIndSegCUCPrewin = $presIndSegCUCPrewin;
    
        return $this;
    }

    /**
     * Get presIndSegCUCPrewin
     *
     * @return float 
     */
    public function getPresIndSegCUCPrewin()
    {
        return $this->presIndSegCUCPrewin;
    }

    /**
     * Set presIndImpCUPPrewin
     *
     * @param float $presIndImpCUPPrewin
     * @return CertificacionPrewin
     */
    public function setPresIndImpCUPPrewin($presIndImpCUPPrewin)
    {
        $this->presIndImpCUPPrewin = $presIndImpCUPPrewin;
    
        return $this;
    }

    /**
     * Get presIndImpCUPPrewin
     *
     * @return float 
     */
    public function getPresIndImpCUPPrewin()
    {
        return $this->presIndImpCUPPrewin;
    }

    /**
     * Set presIndImpCUCPrewin
     *
     * @param float $presIndImpCUCPrewin
     * @return CertificacionPrewin
     */
    public function setPresIndImpCUCPrewin($presIndImpCUCPrewin)
    {
        $this->presIndImpCUCPrewin = $presIndImpCUCPrewin;
    
        return $this;
    }

    /**
     * Get presIndImpCUCPrewin
     *
     * @return float 
     */
    public function getPresIndImpCUCPrewin()
    {
        return $this->presIndImpCUCPrewin;
    }

    /**
     * Set presIndTransCUPPrewin
     *
     * @param float $presIndTransCUPPrewin
     * @return CertificacionPrewin
     */
    public function setPresIndTransCUPPrewin($presIndTransCUPPrewin)
    {
        $this->presIndTransCUPPrewin = $presIndTransCUPPrewin;
    
        return $this;
    }

    /**
     * Get presIndTransCUPPrewin
     *
     * @return float 
     */
    public function getPresIndTransCUPPrewin()
    {
        return $this->presIndTransCUPPrewin;
    }

    /**
     * Set presIndTransCUCPrewin
     *
     * @param float $presIndTransCUCPrewin
     * @return CertificacionPrewin
     */
    public function setPresIndTransCUCPrewin($presIndTransCUCPrewin)
    {
        $this->presIndTransCUCPrewin = $presIndTransCUCPrewin;
    
        return $this;
    }

    /**
     * Get presIndTransCUCPrewin
     *
     * @return float 
     */
    public function getPresIndTransCUCPrewin()
    {
        return $this->presIndTransCUCPrewin;
    }

    /**
     * Set subTotalPresIndCUPPrewin
     *
     * @param float $subTotalPresIndCUPPrewin
     * @return CertificacionPrewin
     */
    public function setSubTotalPresIndCUPPrewin($subTotalPresIndCUPPrewin)
    {
        $this->subTotalPresIndCUPPrewin = $subTotalPresIndCUPPrewin;
    
        return $this;
    }

    /**
     * Get subTotalPresIndCUPPrewin
     *
     * @return float 
     */
    public function getSubTotalPresIndCUPPrewin()
    {
        return $this->subTotalPresIndCUPPrewin;
    }

    /**
     * Set subTotalPresIndCUCPrewin
     *
     * @param float $subTotalPresIndCUCPrewin
     * @return CertificacionPrewin
     */
    public function setSubTotalPresIndCUCPrewin($subTotalPresIndCUCPrewin)
    {
        $this->subTotalPresIndCUCPrewin = $subTotalPresIndCUCPrewin;
    
        return $this;
    }

    /**
     * Get subTotalPresIndCUCPrewin
     *
     * @return float 
     */
    public function getSubTotalPresIndCUCPrewin()
    {
        return $this->subTotalPresIndCUCPrewin;
    }

    /**
     * Set costoTotalCUPPrewin
     *
     * @param float $costoTotalCUPPrewin
     * @return CertificacionPrewin
     */
    public function setCostoTotalCUPPrewin($costoTotalCUPPrewin)
    {
        $this->costoTotalCUPPrewin = $costoTotalCUPPrewin;
    
        return $this;
    }

    /**
     * Get costoTotalCUPPrewin
     *
     * @return float 
     */
    public function getCostoTotalCUPPrewin()
    {
        return $this->costoTotalCUPPrewin;
    }

    /**
     * Set costoTotalCUCPrewin
     *
     * @param float $costoTotalCUCPrewin
     * @return CertificacionPrewin
     */
    public function setCostoTotalCUCPrewin($costoTotalCUCPrewin)
    {
        $this->costoTotalCUCPrewin = $costoTotalCUCPrewin;
    
        return $this;
    }

    /**
     * Get costoTotalCUCPrewin
     *
     * @return float 
     */
    public function getCostoTotalCUCPrewin()
    {
        return $this->costoTotalCUCPrewin;
    }

    /**
     * Set pcUtilidadPrewin
     *
     * @param float $pcUtilidadPrewin
     * @return CertificacionPrewin
     */
    public function setPcUtilidadPrewin($pcUtilidadPrewin)
    {
        $this->pcUtilidadPrewin = $pcUtilidadPrewin;
    
        return $this;
    }

    /**
     * Get pcUtilidadPrewin
     *
     * @return float 
     */
    public function getPcUtilidadPrewin()
    {
        return $this->pcUtilidadPrewin;
    }

    /**
     * Set utilidadCUPPrewin
     *
     * @param float $utilidadCUPPrewin
     * @return CertificacionPrewin
     */
    public function setUtilidadCUPPrewin($utilidadCUPPrewin)
    {
        $this->utilidadCUPPrewin = $utilidadCUPPrewin;
    
        return $this;
    }

    /**
     * Get utilidadCUPPrewin
     *
     * @return float 
     */
    public function getUtilidadCUPPrewin()
    {
        return $this->utilidadCUPPrewin;
    }

    /**
     * Set utilidadCUCPrewin
     *
     * @param float $utilidadCUCPrewin
     * @return CertificacionPrewin
     */
    public function setUtilidadCUCPrewin($utilidadCUCPrewin)
    {
        $this->utilidadCUCPrewin = $utilidadCUCPrewin;
    
        return $this;
    }

    /**
     * Get utilidadCUCPrewin
     *
     * @return float 
     */
    public function getUtilidadCUCPrewin()
    {
        return $this->utilidadCUCPrewin;
    }

    /**
     * Set precServConstCUPPrewin
     *
     * @param float $precServConstCUPPrewin
     * @return CertificacionPrewin
     */
    public function setPrecServConstCUPPrewin($precServConstCUPPrewin)
    {
        $this->precServConstCUPPrewin = $precServConstCUPPrewin;
    
        return $this;
    }

    /**
     * Get precServConstCUPPrewin
     *
     * @return float 
     */
    public function getPrecServConstCUPPrewin()
    {
        return $this->precServConstCUPPrewin;
    }

    /**
     * Set precServConstCUCPrewin
     *
     * @param float $precServConstCUCPrewin
     * @return CertificacionPrewin
     */
    public function setPrecServConstCUCPrewin($precServConstCUCPrewin)
    {
        $this->precServConstCUCPrewin = $precServConstCUCPrewin;
    
        return $this;
    }

    /**
     * Get precServConstCUCPrewin
     *
     * @return float 
     */
    public function getPrecServConstCUCPrewin()
    {
        return $this->precServConstCUCPrewin;
    }

    /**
     * Set presIndTributosCUPPrewin
     *
     * @param float $presIndTributosCUPPrewin
     * @return CertificacionPrewin
     */
    public function setPresIndTributosCUPPrewin($presIndTributosCUPPrewin)
    {
        $this->presIndTributosCUPPrewin = $presIndTributosCUPPrewin;
    
        return $this;
    }

    /**
     * Get presIndTributosCUPPrewin
     *
     * @return float 
     */
    public function getPresIndTributosCUPPrewin()
    {
        return $this->presIndTributosCUPPrewin;
    }

    /**
     * Set presIndTributosCUCPrewin
     *
     * @param float $presIndTributosCUCPrewin
     * @return CertificacionPrewin
     */
    public function setPresIndTributosCUCPrewin($presIndTributosCUCPrewin)
    {
        $this->presIndTributosCUCPrewin = $presIndTributosCUCPrewin;
    
        return $this;
    }

    /**
     * Get presIndTributosCUCPrewin
     *
     * @return float 
     */
    public function getPresIndTributosCUCPrewin()
    {
        return $this->presIndTributosCUCPrewin;
    }

    /**
     * Set precTotalServConstCUPPrewin
     *
     * @param float $precTotalServConstCUPPrewin
     * @return CertificacionPrewin
     */
    public function setPrecTotalServConstCUPPrewin($precTotalServConstCUPPrewin)
    {
        $this->precTotalServConstCUPPrewin = $precTotalServConstCUPPrewin;
    
        return $this;
    }

    /**
     * Get precTotalServConstCUPPrewin
     *
     * @return float 
     */
    public function getPrecTotalServConstCUPPrewin()
    {
        return $this->precTotalServConstCUPPrewin;
    }

    /**
     * Set precTotalServConstCUCPrewin
     *
     * @param float $precTotalServConstCUCPrewin
     * @return CertificacionPrewin
     */
    public function setPrecTotalServConstCUCPrewin($precTotalServConstCUCPrewin)
    {
        $this->precTotalServConstCUCPrewin = $precTotalServConstCUCPrewin;
    
        return $this;
    }

    /**
     * Get precTotalServConstCUCPrewin
     *
     * @return float 
     */
    public function getPrecTotalServConstCUCPrewin()
    {
        return $this->precTotalServConstCUCPrewin;
    }

    /**
     * Set idContrato
     *
     * @param \CCC\OfertasBundle\Entity\Contratos $idContrato
     * @return CertificacionPrewin
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