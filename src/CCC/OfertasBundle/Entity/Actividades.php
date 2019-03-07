<?php

namespace CCC\OfertasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Actividades
 *
 * @ORM\Table(name="actividades")
 * @ORM\Entity
 */
class Actividades
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
     * @ORM\Column(name="codigo", type="string", length=255)
     */
    private $codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="actividad", type="string", length=500)
     */
    private $actividad;

    /**
     * @var string
     *
     * @ORM\Column(name="um", type="string", length=255)
     */
    private $um;

    /**
     * @var float
     *
     * @ORM\Column(name="cantidad", type="float")
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
     * @ORM\Column(name="total", type="float", nullable = true)
     */
    private $total;

    /**
     * @var boolean
     *
     * @ORM\Column(name="cambioPlanificacion", type="boolean", nullable = true)
     */
    private $cambioPlanificacion;


    /**
     * @ORM\ManyToOne(targetEntity="GrupoActividadesObjetivo", inversedBy="actividades")
     * @ORM\JoinColumn(name="idgrupo", referencedColumnName="id")
     */
    private $idGrupo;



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
     * Set codigo
     *
     * @param string $codigo
     * @return Actividades
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    
        return $this;
    }

    /**
     * Get codigo
     *
     * @return string 
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set actividad
     *
     * @param string $actividad
     * @return Actividades
     */
    public function setActividad($actividad)
    {
        $this->actividad = $actividad;
    
        return $this;
    }

    /**
     * Get actividad
     *
     * @return string 
     */
    public function getActividad()
    {
        return $this->actividad;
    }

    /**
     * Set um
     *
     * @param string $um
     * @return Actividades
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
     * @return Actividades
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
     * @return Actividades
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
     * Set total
     *
     * @param float $total
     * @return Actividades
     */
    public function setTotal($total)
    {
        $this->total = $total;
    
        return $this;
    }

    /**
     * Get total
     *
     * @return float 
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Set cambioPlanificacion
     *
     * @param boolean $cambioPlanificacion
     * @return Actividades
     */
    public function setCambioPlanificacion($cambioPlanificacion)
    {
        $this->cambioPlanificacion = $cambioPlanificacion;
    
        return $this;
    }

    /**
     * Get cambioPlanificacion
     *
     * @return boolean 
     */
    public function getCambioPlanificacion()
    {
        return $this->cambioPlanificacion;
    }

    /**
     * Set idGrupo
     *
     * @param \CCC\OfertasBundle\Entity\GrupoActividadesObjetivo $idGrupo
     * @return Actividades
     */
    public function setIdGrupo(\CCC\OfertasBundle\Entity\GrupoActividadesObjetivo $idGrupo = null)
    {
        $this->idGrupo = $idGrupo;
    
        return $this;
    }

    /**
     * Get idGrupo
     *
     * @return \CCC\OfertasBundle\Entity\GrupoActividadesObjetivo 
     */
    public function getIdGrupo()
    {
        return $this->idGrupo;
    }
}