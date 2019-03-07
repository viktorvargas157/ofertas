<?php

namespace CCC\OfertasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PosibleCliente
 *
 * @ORM\Table(name="posiblecliente")
 * @ORM\Entity
 */
class PosibleCliente
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
     * @ORM\Column(name="cliente", type="string", length=255)
     */
    private $cliente;

    /**
     * @var string
     *
     * @ORM\Column(name="empresa", type="string", length=255, nullable = true)
     */
    private $empresa;

    /**
     * @var string
     *
     * @ORM\Column(name="sector", type="string", length=255, nullable = true)
     */
    private $sector;

    /**
     * @var string
     *
     * @ORM\Column(name="direcccion", type="string", length=500, nullable = true)
     */
    private $direcccion;

    /**
     * @var string
     *
     * @ORM\Column(name="nombreContacto", type="string", length=255, nullable = true)
     */
    private $nombreContacto;

    /**
     * @var string
     *
     * @ORM\Column(name="telefonoContacto", type="string", length=255, nullable = true)
     */
    private $telefonoContacto;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable = true)
     */
    private $email;

    /**
     * @ORM\OneToMany(targetEntity="ContactosPosibleCliente", mappedBy="idPosibleCliente", cascade={"persist", "remove"})
     */
    private $contactos;



    /**
     * Constructor
     */
    public function __construct()
    {
        $this->contactos = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set cliente
     *
     * @param string $cliente
     * @return PosibleCliente
     */
    public function setCliente($cliente)
    {
        $this->cliente = $cliente;
    
        return $this;
    }

    /**
     * Get cliente
     *
     * @return string 
     */
    public function getCliente()
    {
        return $this->cliente;
    }

    /**
     * Set empresa
     *
     * @param string $empresa
     * @return PosibleCliente
     */
    public function setEmpresa($empresa)
    {
        $this->empresa = $empresa;
    
        return $this;
    }

    /**
     * Get empresa
     *
     * @return string 
     */
    public function getEmpresa()
    {
        return $this->empresa;
    }

    /**
     * Set sector
     *
     * @param string $sector
     * @return PosibleCliente
     */
    public function setSector($sector)
    {
        $this->sector = $sector;
    
        return $this;
    }

    /**
     * Get sector
     *
     * @return string 
     */
    public function getSector()
    {
        return $this->sector;
    }

    /**
     * Set direcccion
     *
     * @param string $direcccion
     * @return PosibleCliente
     */
    public function setDirecccion($direcccion)
    {
        $this->direcccion = $direcccion;
    
        return $this;
    }

    /**
     * Get direcccion
     *
     * @return string 
     */
    public function getDirecccion()
    {
        return $this->direcccion;
    }

    /**
     * Set nombreContacto
     *
     * @param string $nombreContacto
     * @return PosibleCliente
     */
    public function setNombreContacto($nombreContacto)
    {
        $this->nombreContacto = $nombreContacto;
    
        return $this;
    }

    /**
     * Get nombreContacto
     *
     * @return string 
     */
    public function getNombreContacto()
    {
        return $this->nombreContacto;
    }

    /**
     * Set telefonoContacto
     *
     * @param string $telefonoContacto
     * @return PosibleCliente
     */
    public function setTelefonoContacto($telefonoContacto)
    {
        $this->telefonoContacto = $telefonoContacto;
    
        return $this;
    }

    /**
     * Get telefonoContacto
     *
     * @return string 
     */
    public function getTelefonoContacto()
    {
        return $this->telefonoContacto;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return PosibleCliente
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Add contactos
     *
     * @param \CCC\OfertasBundle\Entity\ContactosPosibleCliente $contactos
     * @return PosibleCliente
     */
    public function addContacto(\CCC\OfertasBundle\Entity\ContactosPosibleCliente $contactos)
    {
        $this->contactos[] = $contactos;
    
        return $this;
    }

    /**
     * Remove contactos
     *
     * @param \CCC\OfertasBundle\Entity\ContactosPosibleCliente $contactos
     */
    public function removeContacto(\CCC\OfertasBundle\Entity\ContactosPosibleCliente $contactos)
    {
        $this->contactos->removeElement($contactos);
    }

    /**
     * Get contactos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getContactos()
    {
        return $this->contactos;
    }
}