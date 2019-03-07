<?php

namespace CCC\OfertasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PresupuestoExcelComun
 *
 * @ORM\Table(name="presupuestoexcelcomun")
 * @ORM\Entity
 */
class PresupuestoExcelComun
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
     * @var float
     *
     * @ORM\Column(name="resumenpresupuestocup", type="float", nullable = true)
     */
    private $resumenpresupuestocup;

    /**
     * @var float
     *
     * @ORM\Column(name="resumenpresupuestocuc", type="float", nullable = true)
     */
    private $resumenpresupuestocuc;

    /**
     * @var float
     *
     * @ORM\Column(name="gastosdirectoscup", type="float", nullable = true)
     */
    private $gastosdirectoscup;

    /**
     * @var float
     *
     * @ORM\Column(name="gastosdirectoscuc", type="float", nullable = true)
     */
    private $gastosdirectoscuc;

    /**
     * @var float
     *
     * @ORM\Column(name="gastosgeneralescup", type="float", nullable = true)
     */
    private $gastosgeneralescup;

    /**
     * @var float
     *
     * @ORM\Column(name="gastosgeneralescuc", type="float", nullable = true)
     */
    private $gastosgeneralescuc;

    /**
     * @var float
     *
     * @ORM\Column(name="gastosindirectoscup", type="float", nullable = true)
     */
    private $gastosindirectoscup;

    /**
     * @var float
     *
     * @ORM\Column(name="gastosindirectoscuc", type="float", nullable = true)
     */
    private $gastosindirectoscuc;

    /**
     * @var float
     *
     * @ORM\Column(name="presupuestosindependientescup", type="float", nullable = true)
     */
    private $presupuestosindependientescup;

    /**
     * @var float
     *
     * @ORM\Column(name="presupuestosindependientescuc", type="float", nullable = true)
     */
    private $presupuestosindependientescuc;

    /**
     * @var float
     *
     * @ORM\Column(name="imprevistoscup", type="float", nullable = true)
     */
    private $imprevistoscup;

    /**
     * @var float
     *
     * @ORM\Column(name="imprevistoscuc", type="float", nullable = true)
     */
    private $imprevistoscuc;

    /**
     * @var float
     *
     * @ORM\Column(name="costototalcup", type="float", nullable = true)
     */
    private $costototalcup;

    /**
     * @var float
     *
     * @ORM\Column(name="costototalcuc", type="float", nullable = true)
     */
    private $costototalcuc;

    /**
     * @var float
     *
     * @ORM\Column(name="pcutilidad", type="float", nullable = true)
     */
    private $pcutilidad;

    /**
     * @var float
     *
     * @ORM\Column(name="utilidadcup", type="float", nullable = true)
     */
    private $utilidadcup;

    /**
     * @var float
     *
     * @ORM\Column(name="utilidadcuc", type="float", nullable = true)
     */
    private $utilidadcuc;

    /**
     * @var float
     *
     * @ORM\Column(name="precioservconstcup", type="float", nullable = true)
     */
    private $precioservconstcup;

    /**
     * @var float
     *
     * @ORM\Column(name="precioservconstcuc", type="float", nullable = true)
     */
    private $precioservconstcuc;

    /**
     * @var float
     *
     * @ORM\Column(name="pagotributoscup", type="float", nullable = true)
     */
    private $pagotributoscup;

    /**
     * @var float
     *
     * @ORM\Column(name="pagotributoscuc", type="float", nullable = true)
     */
    private $pagotributoscuc;

    /**
     * @var float
     *
     * @ORM\Column(name="preciomanoobracup", type="float", nullable = true)
     */
    private $preciomanoobracup;

    /**
     * @var float
     *
     * @ORM\Column(name="preciomanoobracuc", type="float", nullable = true)
     */
    private $preciomanoobracuc;

    /**
     * @var float
     *
     * @ORM\Column(name="preciomaterialescup", type="float", nullable = true)
     */
    private $preciomaterialescup;

    /**
     * @var float
     *
     * @ORM\Column(name="preciomaterialescuc", type="float", nullable = true)
     */
    private $preciomaterialescuc;

    /**
     * @var float
     *
     * @ORM\Column(name="preciototalcup", type="float", nullable = true)
     */
    private $preciototalcup;

    /**
     * @var float
     *
     * @ORM\Column(name="preciototalcuc", type="float", nullable = true)
     */
    private $preciototalcuc;

    /**
     * @var float
     *
     * @ORM\Column(name="tiempoejecuciondias", type="float", nullable = true)
     */
    private $tiempoejecuciondias;

    /**
     * @var integer
     *
     * @ORM\Column(name="canthombres", type="integer", nullable = true)
     */
    private $canthombres;

    /**
     * @ORM\ManyToOne(targetEntity="SolicitudOferta", inversedBy="presupuestoExcelComun")
     * @ORM\JoinColumn(name="idSolicitudOferta", referencedColumnName="id")
     */
    private $idSolicitudOferta;

    /**
     * @ORM\OneToMany(targetEntity="ObjetivosObra", mappedBy="idPresupuesto", cascade={"persist", "remove"})
     */
    private $objetivos;

    /**
     * @ORM\OneToMany(targetEntity="MaterialesPresExcelComun", mappedBy="idPresupuesto", cascade={"persist", "remove"})
     */
    private $materiales;






    /**
     * Constructor
     */
    public function __construct()
    {
        $this->objetivos = new \Doctrine\Common\Collections\ArrayCollection();
        $this->materiales = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set resumenpresupuestocup
     *
     * @param float $resumenpresupuestocup
     * @return PresupuestoExcelComun
     */
    public function setResumenpresupuestocup($resumenpresupuestocup)
    {
        $this->resumenpresupuestocup = $resumenpresupuestocup;
    
        return $this;
    }

    /**
     * Get resumenpresupuestocup
     *
     * @return float 
     */
    public function getResumenpresupuestocup()
    {
        return $this->resumenpresupuestocup;
    }

    /**
     * Set resumenpresupuestocuc
     *
     * @param float $resumenpresupuestocuc
     * @return PresupuestoExcelComun
     */
    public function setResumenpresupuestocuc($resumenpresupuestocuc)
    {
        $this->resumenpresupuestocuc = $resumenpresupuestocuc;
    
        return $this;
    }

    /**
     * Get resumenpresupuestocuc
     *
     * @return float 
     */
    public function getResumenpresupuestocuc()
    {
        return $this->resumenpresupuestocuc;
    }

    /**
     * Set gastosdirectoscup
     *
     * @param float $gastosdirectoscup
     * @return PresupuestoExcelComun
     */
    public function setGastosdirectoscup($gastosdirectoscup)
    {
        $this->gastosdirectoscup = $gastosdirectoscup;
    
        return $this;
    }

    /**
     * Get gastosdirectoscup
     *
     * @return float 
     */
    public function getGastosdirectoscup()
    {
        return $this->gastosdirectoscup;
    }

    /**
     * Set gastosdirectoscuc
     *
     * @param float $gastosdirectoscuc
     * @return PresupuestoExcelComun
     */
    public function setGastosdirectoscuc($gastosdirectoscuc)
    {
        $this->gastosdirectoscuc = $gastosdirectoscuc;
    
        return $this;
    }

    /**
     * Get gastosdirectoscuc
     *
     * @return float 
     */
    public function getGastosdirectoscuc()
    {
        return $this->gastosdirectoscuc;
    }

    /**
     * Set gastosgeneralescup
     *
     * @param float $gastosgeneralescup
     * @return PresupuestoExcelComun
     */
    public function setGastosgeneralescup($gastosgeneralescup)
    {
        $this->gastosgeneralescup = $gastosgeneralescup;
    
        return $this;
    }

    /**
     * Get gastosgeneralescup
     *
     * @return float 
     */
    public function getGastosgeneralescup()
    {
        return $this->gastosgeneralescup;
    }

    /**
     * Set gastosgeneralescuc
     *
     * @param float $gastosgeneralescuc
     * @return PresupuestoExcelComun
     */
    public function setGastosgeneralescuc($gastosgeneralescuc)
    {
        $this->gastosgeneralescuc = $gastosgeneralescuc;
    
        return $this;
    }

    /**
     * Get gastosgeneralescuc
     *
     * @return float 
     */
    public function getGastosgeneralescuc()
    {
        return $this->gastosgeneralescuc;
    }

    /**
     * Set gastosindirectoscup
     *
     * @param float $gastosindirectoscup
     * @return PresupuestoExcelComun
     */
    public function setGastosindirectoscup($gastosindirectoscup)
    {
        $this->gastosindirectoscup = $gastosindirectoscup;
    
        return $this;
    }

    /**
     * Get gastosindirectoscup
     *
     * @return float 
     */
    public function getGastosindirectoscup()
    {
        return $this->gastosindirectoscup;
    }

    /**
     * Set gastosindirectoscuc
     *
     * @param float $gastosindirectoscuc
     * @return PresupuestoExcelComun
     */
    public function setGastosindirectoscuc($gastosindirectoscuc)
    {
        $this->gastosindirectoscuc = $gastosindirectoscuc;
    
        return $this;
    }

    /**
     * Get gastosindirectoscuc
     *
     * @return float 
     */
    public function getGastosindirectoscuc()
    {
        return $this->gastosindirectoscuc;
    }

    /**
     * Set presupuestosindependientescup
     *
     * @param float $presupuestosindependientescup
     * @return PresupuestoExcelComun
     */
    public function setPresupuestosindependientescup($presupuestosindependientescup)
    {
        $this->presupuestosindependientescup = $presupuestosindependientescup;
    
        return $this;
    }

    /**
     * Get presupuestosindependientescup
     *
     * @return float 
     */
    public function getPresupuestosindependientescup()
    {
        return $this->presupuestosindependientescup;
    }

    /**
     * Set presupuestosindependientescuc
     *
     * @param float $presupuestosindependientescuc
     * @return PresupuestoExcelComun
     */
    public function setPresupuestosindependientescuc($presupuestosindependientescuc)
    {
        $this->presupuestosindependientescuc = $presupuestosindependientescuc;
    
        return $this;
    }

    /**
     * Get presupuestosindependientescuc
     *
     * @return float 
     */
    public function getPresupuestosindependientescuc()
    {
        return $this->presupuestosindependientescuc;
    }

    /**
     * Set imprevistoscup
     *
     * @param float $imprevistoscup
     * @return PresupuestoExcelComun
     */
    public function setImprevistoscup($imprevistoscup)
    {
        $this->imprevistoscup = $imprevistoscup;
    
        return $this;
    }

    /**
     * Get imprevistoscup
     *
     * @return float 
     */
    public function getImprevistoscup()
    {
        return $this->imprevistoscup;
    }

    /**
     * Set imprevistoscuc
     *
     * @param float $imprevistoscuc
     * @return PresupuestoExcelComun
     */
    public function setImprevistoscuc($imprevistoscuc)
    {
        $this->imprevistoscuc = $imprevistoscuc;
    
        return $this;
    }

    /**
     * Get imprevistoscuc
     *
     * @return float 
     */
    public function getImprevistoscuc()
    {
        return $this->imprevistoscuc;
    }

    /**
     * Set costototalcup
     *
     * @param float $costototalcup
     * @return PresupuestoExcelComun
     */
    public function setCostototalcup($costototalcup)
    {
        $this->costototalcup = $costototalcup;
    
        return $this;
    }

    /**
     * Get costototalcup
     *
     * @return float 
     */
    public function getCostototalcup()
    {
        return $this->costototalcup;
    }

    /**
     * Set costototalcuc
     *
     * @param float $costototalcuc
     * @return PresupuestoExcelComun
     */
    public function setCostototalcuc($costototalcuc)
    {
        $this->costototalcuc = $costototalcuc;
    
        return $this;
    }

    /**
     * Get costototalcuc
     *
     * @return float 
     */
    public function getCostototalcuc()
    {
        return $this->costototalcuc;
    }

    /**
     * Set pcutilidad
     *
     * @param float $pcutilidad
     * @return PresupuestoExcelComun
     */
    public function setPcutilidad($pcutilidad)
    {
        $this->pcutilidad = $pcutilidad;
    
        return $this;
    }

    /**
     * Get pcutilidad
     *
     * @return float 
     */
    public function getPcutilidad()
    {
        return $this->pcutilidad;
    }

    /**
     * Set utilidadcup
     *
     * @param float $utilidadcup
     * @return PresupuestoExcelComun
     */
    public function setUtilidadcup($utilidadcup)
    {
        $this->utilidadcup = $utilidadcup;
    
        return $this;
    }

    /**
     * Get utilidadcup
     *
     * @return float 
     */
    public function getUtilidadcup()
    {
        return $this->utilidadcup;
    }

    /**
     * Set utilidadcuc
     *
     * @param float $utilidadcuc
     * @return PresupuestoExcelComun
     */
    public function setUtilidadcuc($utilidadcuc)
    {
        $this->utilidadcuc = $utilidadcuc;
    
        return $this;
    }

    /**
     * Get utilidadcuc
     *
     * @return float 
     */
    public function getUtilidadcuc()
    {
        return $this->utilidadcuc;
    }

    /**
     * Set precioservconstcup
     *
     * @param float $precioservconstcup
     * @return PresupuestoExcelComun
     */
    public function setPrecioservconstcup($precioservconstcup)
    {
        $this->precioservconstcup = $precioservconstcup;
    
        return $this;
    }

    /**
     * Get precioservconstcup
     *
     * @return float 
     */
    public function getPrecioservconstcup()
    {
        return $this->precioservconstcup;
    }

    /**
     * Set precioservconstcuc
     *
     * @param float $precioservconstcuc
     * @return PresupuestoExcelComun
     */
    public function setPrecioservconstcuc($precioservconstcuc)
    {
        $this->precioservconstcuc = $precioservconstcuc;
    
        return $this;
    }

    /**
     * Get precioservconstcuc
     *
     * @return float 
     */
    public function getPrecioservconstcuc()
    {
        return $this->precioservconstcuc;
    }

    /**
     * Set pagotributoscup
     *
     * @param float $pagotributoscup
     * @return PresupuestoExcelComun
     */
    public function setPagotributoscup($pagotributoscup)
    {
        $this->pagotributoscup = $pagotributoscup;
    
        return $this;
    }

    /**
     * Get pagotributoscup
     *
     * @return float 
     */
    public function getPagotributoscup()
    {
        return $this->pagotributoscup;
    }

    /**
     * Set pagotributoscuc
     *
     * @param float $pagotributoscuc
     * @return PresupuestoExcelComun
     */
    public function setPagotributoscuc($pagotributoscuc)
    {
        $this->pagotributoscuc = $pagotributoscuc;
    
        return $this;
    }

    /**
     * Get pagotributoscuc
     *
     * @return float 
     */
    public function getPagotributoscuc()
    {
        return $this->pagotributoscuc;
    }

    /**
     * Set preciomanoobracup
     *
     * @param float $preciomanoobracup
     * @return PresupuestoExcelComun
     */
    public function setPreciomanoobracup($preciomanoobracup)
    {
        $this->preciomanoobracup = $preciomanoobracup;
    
        return $this;
    }

    /**
     * Get preciomanoobracup
     *
     * @return float 
     */
    public function getPreciomanoobracup()
    {
        return $this->preciomanoobracup;
    }

    /**
     * Set preciomanoobracuc
     *
     * @param float $preciomanoobracuc
     * @return PresupuestoExcelComun
     */
    public function setPreciomanoobracuc($preciomanoobracuc)
    {
        $this->preciomanoobracuc = $preciomanoobracuc;
    
        return $this;
    }

    /**
     * Get preciomanoobracuc
     *
     * @return float 
     */
    public function getPreciomanoobracuc()
    {
        return $this->preciomanoobracuc;
    }

    /**
     * Set preciomaterialescup
     *
     * @param float $preciomaterialescup
     * @return PresupuestoExcelComun
     */
    public function setPreciomaterialescup($preciomaterialescup)
    {
        $this->preciomaterialescup = $preciomaterialescup;
    
        return $this;
    }

    /**
     * Get preciomaterialescup
     *
     * @return float 
     */
    public function getPreciomaterialescup()
    {
        return $this->preciomaterialescup;
    }

    /**
     * Set preciomaterialescuc
     *
     * @param float $preciomaterialescuc
     * @return PresupuestoExcelComun
     */
    public function setPreciomaterialescuc($preciomaterialescuc)
    {
        $this->preciomaterialescuc = $preciomaterialescuc;
    
        return $this;
    }

    /**
     * Get preciomaterialescuc
     *
     * @return float 
     */
    public function getPreciomaterialescuc()
    {
        return $this->preciomaterialescuc;
    }

    /**
     * Set preciototalcup
     *
     * @param float $preciototalcup
     * @return PresupuestoExcelComun
     */
    public function setPreciototalcup($preciototalcup)
    {
        $this->preciototalcup = $preciototalcup;
    
        return $this;
    }

    /**
     * Get preciototalcup
     *
     * @return float 
     */
    public function getPreciototalcup()
    {
        return $this->preciototalcup;
    }

    /**
     * Set preciototalcuc
     *
     * @param float $preciototalcuc
     * @return PresupuestoExcelComun
     */
    public function setPreciototalcuc($preciototalcuc)
    {
        $this->preciototalcuc = $preciototalcuc;
    
        return $this;
    }

    /**
     * Get preciototalcuc
     *
     * @return float 
     */
    public function getPreciototalcuc()
    {
        return $this->preciototalcuc;
    }

    /**
     * Set tiempoejecuciondias
     *
     * @param float $tiempoejecuciondias
     * @return PresupuestoExcelComun
     */
    public function setTiempoejecuciondias($tiempoejecuciondias)
    {
        $this->tiempoejecuciondias = $tiempoejecuciondias;
    
        return $this;
    }

    /**
     * Get tiempoejecuciondias
     *
     * @return float 
     */
    public function getTiempoejecuciondias()
    {
        return $this->tiempoejecuciondias;
    }

    /**
     * Set canthombres
     *
     * @param integer $canthombres
     * @return PresupuestoExcelComun
     */
    public function setCanthombres($canthombres)
    {
        $this->canthombres = $canthombres;
    
        return $this;
    }

    /**
     * Get canthombres
     *
     * @return integer 
     */
    public function getCanthombres()
    {
        return $this->canthombres;
    }

    /**
     * Set idSolicitudOferta
     *
     * @param \CCC\OfertasBundle\Entity\SolicitudOferta $idSolicitudOferta
     * @return PresupuestoExcelComun
     */
    public function setIdSolicitudOferta(\CCC\OfertasBundle\Entity\SolicitudOferta $idSolicitudOferta = null)
    {
        $this->idSolicitudOferta = $idSolicitudOferta;
    
        return $this;
    }

    /**
     * Get idSolicitudOferta
     *
     * @return \CCC\OfertasBundle\Entity\SolicitudOferta 
     */
    public function getIdSolicitudOferta()
    {
        return $this->idSolicitudOferta;
    }

    /**
     * Add objetivos
     *
     * @param \CCC\OfertasBundle\Entity\ObjetivosObra $objetivos
     * @return PresupuestoExcelComun
     */
    public function addObjetivo(\CCC\OfertasBundle\Entity\ObjetivosObra $objetivos)
    {
        $this->objetivos[] = $objetivos;
    
        return $this;
    }

    /**
     * Remove objetivos
     *
     * @param \CCC\OfertasBundle\Entity\ObjetivosObra $objetivos
     */
    public function removeObjetivo(\CCC\OfertasBundle\Entity\ObjetivosObra $objetivos)
    {
        $this->objetivos->removeElement($objetivos);
    }

    /**
     * Get objetivos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getObjetivos()
    {
        return $this->objetivos;
    }

    /**
     * Add materiales
     *
     * @param \CCC\OfertasBundle\Entity\MaterialesPresExcelComun $materiales
     * @return PresupuestoExcelComun
     */
    public function addMateriale(\CCC\OfertasBundle\Entity\MaterialesPresExcelComun $materiales)
    {
        $this->materiales[] = $materiales;
    
        return $this;
    }

    /**
     * Remove materiales
     *
     * @param \CCC\OfertasBundle\Entity\MaterialesPresExcelComun $materiales
     */
    public function removeMateriale(\CCC\OfertasBundle\Entity\MaterialesPresExcelComun $materiales)
    {
        $this->materiales->removeElement($materiales);
    }

    /**
     * Get materiales
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMateriales()
    {
        return $this->materiales;
    }
}