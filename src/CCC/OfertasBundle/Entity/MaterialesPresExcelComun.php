<?php

namespace CCC\OfertasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MaterialesPresExcelComun
 *
 * @ORM\Table(name="materialespresexcelcomun")
 * @ORM\Entity
 */
class MaterialesPresExcelComun
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
     * @var string
     *
     * @ORM\Column(name="material", type="string", length=255)
     */
    private $material;

    /**
     * @var string
     *
     * @ORM\Column(name="um", type="string", length=255, nullable = true)
     */
    private $um;

    /**
     * @var float
     *
     * @ORM\Column(name="cantidad", type="float", nullable = true)
     */
    private $cantidad;

    /**
     * @var float
     *
     * @ORM\Column(name="precio", type="float", nullable = true)
     */
    private $precio;

    /**
     * @var float
     *
     * @ORM\Column(name="importe", type="float", nullable = true)
     */
    private $importe;

    /**
     * @var boolean
     *
     * @ORM\Column(name="porccc", type="boolean", nullable = true)
     */
    private $porCCC;

    /**
     * @var boolean
     *
     * @ORM\Column(name="transportacionccc", type="boolean", nullable = true)
     */
    private $transportacionCCC;

    /**
     * @ORM\ManyToOne(targetEntity="PresupuestoExcelComun", inversedBy="materiales")
     * @ORM\JoinColumn(name="idpresupuesto", referencedColumnName="id")
     */
    private $idPresupuesto;




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
     * Set material
     *
     * @param string $material
     * @return MaterialesPresExcelComun
     */
    public function setMaterial($material)
    {
        $this->material = $material;
    
        return $this;
    }

    /**
     * Get material
     *
     * @return string 
     */
    public function getMaterial()
    {
        return $this->material;
    }

    /**
     * Set um
     *
     * @param string $um
     * @return MaterialesPresExcelComun
     */
    public function setUm($um)
    {
        $this->um = $um;
    
        return $this;
    }

    /**
     * Get um
     *
     * @return string 
     */
    public function getUm()
    {
        return $this->um;
    }

    /**
     * Set cantidad
     *
     * @param float $cantidad
     * @return MaterialesPresExcelComun
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;
    
        return $this;
    }

    /**
     * Get cantidad
     *
     * @return float 
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set precio
     *
     * @param float $precio
     * @return MaterialesPresExcelComun
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;
    
        return $this;
    }

    /**
     * Get precio
     *
     * @return float 
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set importe
     *
     * @param float $importe
     * @return MaterialesPresExcelComun
     */
    public function setImporte($importe)
    {
        $this->importe = $importe;
    
        return $this;
    }

    /**
     * Get importe
     *
     * @return float 
     */
    public function getImporte()
    {
        return $this->importe;
    }

    /**
     * Set porCCC
     *
     * @param boolean $porCCC
     * @return MaterialesPresExcelComun
     */
    public function setPorCCC($porCCC)
    {
        $this->porCCC = $porCCC;
    
        return $this;
    }

    /**
     * Get porCCC
     *
     * @return boolean 
     */
    public function getPorCCC()
    {
        return $this->porCCC;
    }

    /**
     * Set transportacionCCC
     *
     * @param boolean $transportacionCCC
     * @return MaterialesPresExcelComun
     */
    public function setTransportacionCCC($transportacionCCC)
    {
        $this->transportacionCCC = $transportacionCCC;
    
        return $this;
    }

    /**
     * Get transportacionCCC
     *
     * @return boolean 
     */
    public function getTransportacionCCC()
    {
        return $this->transportacionCCC;
    }

    /**
     * Set idPresupuesto
     *
     * @param \CCC\OfertasBundle\Entity\PresupuestoExcelComun $idPresupuesto
     * @return MaterialesPresExcelComun
     */
    public function setIdPresupuesto(\CCC\OfertasBundle\Entity\PresupuestoExcelComun $idPresupuesto = null)
    {
        $this->idPresupuesto = $idPresupuesto;
    
        return $this;
    }

    /**
     * Get idPresupuesto
     *
     * @return \CCC\OfertasBundle\Entity\PresupuestoExcelComun 
     */
    public function getIdPresupuesto()
    {
        return $this->idPresupuesto;
    }
}