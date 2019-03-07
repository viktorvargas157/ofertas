<?php

namespace CCC\OfertasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Nomenclador
 *
 * @ORM\Table(name="nomenclador")
 * @ORM\Entity
 */
class Nomenclador
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
     * @ORM\Column(name="clasificador", type="string", length=255)
     */
    private $clasificador;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="um", type="string", length=255, nullable = true)
     */
    private $um;


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
     * Set clasificador
     *
     * @param string $clasificador
     * @return Nomenclador
     */
    public function setClasificador($clasificador)
    {
        $this->clasificador = $clasificador;
    
        return $this;
    }

    /**
     * Get clasificador
     *
     * @return string 
     */
    public function getClasificador()
    {
        return $this->clasificador;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Nomenclador
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    
        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set um
     *
     * @param string $um
     * @return Nomenclador
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
}