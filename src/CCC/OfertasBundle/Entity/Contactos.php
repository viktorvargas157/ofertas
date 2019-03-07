<?php

namespace CCC\OfertasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contactos
 *
 * @ORM\Table(name="contactos")
 * @ORM\Entity
 */
class Contactos
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
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable = true)
     */
    private $email;


    /**
     * @ORM\ManyToOne(targetEntity="Clientes", inversedBy="contactos")
     * @ORM\JoinColumn(name="idCliente", referencedColumnName="id")
     */
    private $idCliente;

    /**
     * @ORM\OneToMany(targetEntity="TelefonosContacto", mappedBy="idContacto", cascade={"persist", "remove"})
     */
    private $telefonos;




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
     * Set nombre
     *
     * @param string $nombre
     * @return Contactos
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
     * Set email
     *
     * @param string $email
     * @return Contactos
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
     * Set idCliente
     *
     * @param \CCC\OfertasBundle\Entity\Clientes $idCliente
     * @return Contactos
     */
    public function setIdCliente(\CCC\OfertasBundle\Entity\Clientes $idCliente = null)
    {
        $this->idCliente = $idCliente;
    
        return $this;
    }

    /**
     * Get idCliente
     *
     * @return \CCC\OfertasBundle\Entity\Clientes 
     */
    public function getIdCliente()
    {
        return $this->idCliente;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->telefonos = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add telefonos
     *
     * @param \CCC\OfertasBundle\Entity\TelefonosContacto $telefonos
     * @return Contactos
     */
    public function addTelefono(\CCC\OfertasBundle\Entity\TelefonosContacto $telefonos)
    {
        $this->telefonos[] = $telefonos;
    
        return $this;
    }

    /**
     * Remove telefonos
     *
     * @param \CCC\OfertasBundle\Entity\TelefonosContacto $telefonos
     */
    public function removeTelefono(\CCC\OfertasBundle\Entity\TelefonosContacto $telefonos)
    {
        $this->telefonos->removeElement($telefonos);
    }

    /**
     * Get telefonos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTelefonos()
    {
        return $this->telefonos;
    }
}