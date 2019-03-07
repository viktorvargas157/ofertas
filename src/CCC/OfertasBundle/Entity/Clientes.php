<?php

namespace CCC\OfertasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * clientes
 *
 * @ORM\Table(name="clientes")
 * @ORM\Entity
 */
class Clientes
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
     * @ORM\Column(name="cliente", type="string", length=255, nullable = true)
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
     * @ORM\Column(name="direccion", type="string", length=500, nullable = true)
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="nombrecontacto", type="string", length=255, nullable = true)
     */
    private $nombreContacto;

    /**
     * @var string
     *
     * @ORM\Column(name="direccionobra", type="string", length=255, nullable = true)
     */
    private $direccionObra;

    /**
     * @var string
     *
     * @ORM\Column(name="telefonocontacto", type="string", length=255, nullable = true)
     */
    private $telefonoContacto;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable = true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="nombreempresa", type="string", length=255, nullable = true)
     */
    private $nombreempresa;

    /**
     * @var string
     *
     * @ORM\Column(name="noresolucion", type="string", length=255, nullable = true)
     */
    private $noresolucion;

    /**
     * @var string
     *
     * @ORM\Column(name="fecharesolucion", type="string", nullable = true)
     */
    private $fecharesolucion;

    /**
     * @var string
     *
     * @ORM\Column(name="organismoemite", type="string", length=255, nullable = true)
     */
    private $organismoemite;

    /**
     * @var string
     *
     * @ORM\Column(name="nombreresolucion", type="string", length=255, nullable = true)
     */
    private $nombreresolucion;

    /**
     * @var string
     *
     * @ORM\Column(name="direccionresolucion", type="string", length=255, nullable = true)
     */
    private $direccionresolucion;

    /**
     * @var string
     *
     * @ORM\Column(name="reeup", type="string", length=255, nullable = true)
     */
    private $reeup;

    /**
     * @var string
     *
     * @ORM\Column(name="noidentributaria", type="string", length=255, nullable = true)
     */
    private $noidentributaria;

    /**
     * @var string
     *
     * @ORM\Column(name="cuentacuc", type="string", length=255, nullable = true)
     */
    private $cuentacuc;

    /**
     * @var string
     *
     * @ORM\Column(name="titularcuentacuc", type="string", length=255, nullable = true)
     */
    private $titularcuentacuc;

    /**
     * @var string
     *
     * @ORM\Column(name="bancocuentacuc", type="string", length=255, nullable = true)
     */
    private $bancocuentacuc;

    /**
     * @var string
     *
     * @ORM\Column(name="sucursalcuentacuc", type="string", length=255, nullable = true)
     */
    private $sucursalcuentacuc;

    /**
     * @var string
     *
     * @ORM\Column(name="direccioncuentacuc", type="string", length=255, nullable = true)
     */
    private $direccioncuentacuc;

    /**
     * @var string
     *
     * @ORM\Column(name="cuentacup", type="string", length=255, nullable = true)
     */
    private $cuentacup;

    /**
     * @var string
     *
     * @ORM\Column(name="titularcuentacup", type="string", length=255, nullable = true)
     */
    private $titularcuentacup;

    /**
     * @var string
     *
     * @ORM\Column(name="bancocuentacup", type="string", length=255, nullable = true)
     */
    private $bancocuentacup;

    /**
     * @var string
     *
     * @ORM\Column(name="sucursalcuentacup", type="string", length=255, nullable = true)
     */
    private $sucursalcuentacup;

    /**
     * @var string
     *
     * @ORM\Column(name="direccioncuentacup", type="string", length=255, nullable = true)
     */
    private $direccioncuentacup;

    /**
     * @var string
     *
     * @ORM\Column(name="nolicencia", type="string", length=255, nullable = true)
     */
    private $nolicencia;

    /**
     * @var string
     *
     * @ORM\Column(name="noregistro", type="string", length=255, nullable = true)
     */
    private $noregistro;

    /**
     * @var string
     *
     * @ORM\Column(name="replicencia", type="string", length=255, nullable = true)
     */
    private $replicencia;

    /**
     * @var string
     *
     * @ORM\Column(name="cargoreplicencia", type="string", length=255, nullable = true)
     */
    private $cargoreplicencia;

    /**
     * @var string
     *
     * @ORM\Column(name="noresolrep", type="string", length=255, nullable = true)
     */
    private $noresolrep;

    /**
     * @var string
     *
     * @ORM\Column(name="fecharesrep", type="string", nullable = true)
     */
    private $fecharesrep;

    /**
     * @var string
     *
     * @ORM\Column(name="emitidaresolrep", type="string", length=255, nullable = true)
     */
    private $emitidaresolrep;


    /**
     * @ORM\OneToMany(targetEntity="SolicitudOferta", mappedBy="idCliente", cascade={"persist", "remove"})
     */
    private $solicitudesOferta;

    /**
     * @ORM\OneToMany(targetEntity="Contactos", mappedBy="idCliente", cascade={"persist", "remove"})
     */
    private $contactos;








    /**
     * Constructor
     */
    public function __construct()
    {
        $this->solicitudesOferta = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set codigo
     *
     * @param string $codigo
     * @return Clientes
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
     * Set cliente
     *
     * @param string $cliente
     * @return Clientes
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
     * @return Clientes
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
     * @return Clientes
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
     * Set direccion
     *
     * @param string $direccion
     * @return Clientes
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    
        return $this;
    }

    /**
     * Get direccion
     *
     * @return string 
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set nombreContacto
     *
     * @param string $nombreContacto
     * @return Clientes
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
     * Set direccionObra
     *
     * @param string $direccionObra
     * @return Clientes
     */
    public function setDireccionObra($direccionObra)
    {
        $this->direccionObra = $direccionObra;
    
        return $this;
    }

    /**
     * Get direccionObra
     *
     * @return string 
     */
    public function getDireccionObra()
    {
        return $this->direccionObra;
    }

    /**
     * Set telefonoContacto
     *
     * @param string $telefonoContacto
     * @return Clientes
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
     * @return Clientes
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
     * Set nombreempresa
     *
     * @param string $nombreempresa
     * @return Clientes
     */
    public function setNombreempresa($nombreempresa)
    {
        $this->nombreempresa = $nombreempresa;
    
        return $this;
    }

    /**
     * Get nombreempresa
     *
     * @return string 
     */
    public function getNombreempresa()
    {
        return $this->nombreempresa;
    }

    /**
     * Set noresolucion
     *
     * @param string $noresolucion
     * @return Clientes
     */
    public function setNoresolucion($noresolucion)
    {
        $this->noresolucion = $noresolucion;
    
        return $this;
    }

    /**
     * Get noresolucion
     *
     * @return string 
     */
    public function getNoresolucion()
    {
        return $this->noresolucion;
    }

    /**
     * Set fecharesolucion
     *
     * @param string $fecharesolucion
     * @return Clientes
     */
    public function setFecharesolucion($fecharesolucion)
    {
        $this->fecharesolucion = $fecharesolucion;
    
        return $this;
    }

    /**
     * Get fecharesolucion
     *
     * @return string 
     */
    public function getFecharesolucion()
    {
        return $this->fecharesolucion;
    }

    /**
     * Set organismoemite
     *
     * @param string $organismoemite
     * @return Clientes
     */
    public function setOrganismoemite($organismoemite)
    {
        $this->organismoemite = $organismoemite;
    
        return $this;
    }

    /**
     * Get organismoemite
     *
     * @return string 
     */
    public function getOrganismoemite()
    {
        return $this->organismoemite;
    }

    /**
     * Set nombreresolucion
     *
     * @param string $nombreresolucion
     * @return Clientes
     */
    public function setNombreresolucion($nombreresolucion)
    {
        $this->nombreresolucion = $nombreresolucion;
    
        return $this;
    }

    /**
     * Get nombreresolucion
     *
     * @return string 
     */
    public function getNombreresolucion()
    {
        return $this->nombreresolucion;
    }

    /**
     * Set direccionresolucion
     *
     * @param string $direccionresolucion
     * @return Clientes
     */
    public function setDireccionresolucion($direccionresolucion)
    {
        $this->direccionresolucion = $direccionresolucion;
    
        return $this;
    }

    /**
     * Get direccionresolucion
     *
     * @return string 
     */
    public function getDireccionresolucion()
    {
        return $this->direccionresolucion;
    }

    /**
     * Set reeup
     *
     * @param string $reeup
     * @return Clientes
     */
    public function setReeup($reeup)
    {
        $this->reeup = $reeup;
    
        return $this;
    }

    /**
     * Get reeup
     *
     * @return string 
     */
    public function getReeup()
    {
        return $this->reeup;
    }

    /**
     * Set noidentributaria
     *
     * @param string $noidentributaria
     * @return Clientes
     */
    public function setNoidentributaria($noidentributaria)
    {
        $this->noidentributaria = $noidentributaria;
    
        return $this;
    }

    /**
     * Get noidentributaria
     *
     * @return string 
     */
    public function getNoidentributaria()
    {
        return $this->noidentributaria;
    }

    /**
     * Set cuentacuc
     *
     * @param string $cuentacuc
     * @return Clientes
     */
    public function setCuentacuc($cuentacuc)
    {
        $this->cuentacuc = $cuentacuc;
    
        return $this;
    }

    /**
     * Get cuentacuc
     *
     * @return string 
     */
    public function getCuentacuc()
    {
        return $this->cuentacuc;
    }

    /**
     * Set titularcuentacuc
     *
     * @param string $titularcuentacuc
     * @return Clientes
     */
    public function setTitularcuentacuc($titularcuentacuc)
    {
        $this->titularcuentacuc = $titularcuentacuc;
    
        return $this;
    }

    /**
     * Get titularcuentacuc
     *
     * @return string 
     */
    public function getTitularcuentacuc()
    {
        return $this->titularcuentacuc;
    }

    /**
     * Set bancocuentacuc
     *
     * @param string $bancocuentacuc
     * @return Clientes
     */
    public function setBancocuentacuc($bancocuentacuc)
    {
        $this->bancocuentacuc = $bancocuentacuc;
    
        return $this;
    }

    /**
     * Get bancocuentacuc
     *
     * @return string 
     */
    public function getBancocuentacuc()
    {
        return $this->bancocuentacuc;
    }

    /**
     * Set sucursalcuentacuc
     *
     * @param string $sucursalcuentacuc
     * @return Clientes
     */
    public function setSucursalcuentacuc($sucursalcuentacuc)
    {
        $this->sucursalcuentacuc = $sucursalcuentacuc;
    
        return $this;
    }

    /**
     * Get sucursalcuentacuc
     *
     * @return string 
     */
    public function getSucursalcuentacuc()
    {
        return $this->sucursalcuentacuc;
    }

    /**
     * Set direccioncuentacuc
     *
     * @param string $direccioncuentacuc
     * @return Clientes
     */
    public function setDireccioncuentacuc($direccioncuentacuc)
    {
        $this->direccioncuentacuc = $direccioncuentacuc;
    
        return $this;
    }

    /**
     * Get direccioncuentacuc
     *
     * @return string 
     */
    public function getDireccioncuentacuc()
    {
        return $this->direccioncuentacuc;
    }

    /**
     * Set cuentacup
     *
     * @param string $cuentacup
     * @return Clientes
     */
    public function setCuentacup($cuentacup)
    {
        $this->cuentacup = $cuentacup;
    
        return $this;
    }

    /**
     * Get cuentacup
     *
     * @return string 
     */
    public function getCuentacup()
    {
        return $this->cuentacup;
    }

    /**
     * Set titularcuentacup
     *
     * @param string $titularcuentacup
     * @return Clientes
     */
    public function setTitularcuentacup($titularcuentacup)
    {
        $this->titularcuentacup = $titularcuentacup;
    
        return $this;
    }

    /**
     * Get titularcuentacup
     *
     * @return string 
     */
    public function getTitularcuentacup()
    {
        return $this->titularcuentacup;
    }

    /**
     * Set bancocuentacup
     *
     * @param string $bancocuentacup
     * @return Clientes
     */
    public function setBancocuentacup($bancocuentacup)
    {
        $this->bancocuentacup = $bancocuentacup;
    
        return $this;
    }

    /**
     * Get bancocuentacup
     *
     * @return string 
     */
    public function getBancocuentacup()
    {
        return $this->bancocuentacup;
    }

    /**
     * Set sucursalcuentacup
     *
     * @param string $sucursalcuentacup
     * @return Clientes
     */
    public function setSucursalcuentacup($sucursalcuentacup)
    {
        $this->sucursalcuentacup = $sucursalcuentacup;
    
        return $this;
    }

    /**
     * Get sucursalcuentacup
     *
     * @return string 
     */
    public function getSucursalcuentacup()
    {
        return $this->sucursalcuentacup;
    }

    /**
     * Set direccioncuentacup
     *
     * @param string $direccioncuentacup
     * @return Clientes
     */
    public function setDireccioncuentacup($direccioncuentacup)
    {
        $this->direccioncuentacup = $direccioncuentacup;
    
        return $this;
    }

    /**
     * Get direccioncuentacup
     *
     * @return string 
     */
    public function getDireccioncuentacup()
    {
        return $this->direccioncuentacup;
    }

    /**
     * Set nolicencia
     *
     * @param string $nolicencia
     * @return Clientes
     */
    public function setNolicencia($nolicencia)
    {
        $this->nolicencia = $nolicencia;
    
        return $this;
    }

    /**
     * Get nolicencia
     *
     * @return string 
     */
    public function getNolicencia()
    {
        return $this->nolicencia;
    }

    /**
     * Set noregistro
     *
     * @param string $noregistro
     * @return Clientes
     */
    public function setNoregistro($noregistro)
    {
        $this->noregistro = $noregistro;
    
        return $this;
    }

    /**
     * Get noregistro
     *
     * @return string 
     */
    public function getNoregistro()
    {
        return $this->noregistro;
    }

    /**
     * Set replicencia
     *
     * @param string $replicencia
     * @return Clientes
     */
    public function setReplicencia($replicencia)
    {
        $this->replicencia = $replicencia;
    
        return $this;
    }

    /**
     * Get replicencia
     *
     * @return string 
     */
    public function getReplicencia()
    {
        return $this->replicencia;
    }

    /**
     * Set cargoreplicencia
     *
     * @param string $cargoreplicencia
     * @return Clientes
     */
    public function setCargoreplicencia($cargoreplicencia)
    {
        $this->cargoreplicencia = $cargoreplicencia;
    
        return $this;
    }

    /**
     * Get cargoreplicencia
     *
     * @return string 
     */
    public function getCargoreplicencia()
    {
        return $this->cargoreplicencia;
    }

    /**
     * Set noresolrep
     *
     * @param string $noresolrep
     * @return Clientes
     */
    public function setNoresolrep($noresolrep)
    {
        $this->noresolrep = $noresolrep;
    
        return $this;
    }

    /**
     * Get noresolrep
     *
     * @return string 
     */
    public function getNoresolrep()
    {
        return $this->noresolrep;
    }

    /**
     * Set fecharesrep
     *
     * @param string $fecharesrep
     * @return Clientes
     */
    public function setFecharesrep($fecharesrep)
    {
        $this->fecharesrep = $fecharesrep;
    
        return $this;
    }

    /**
     * Get fecharesrep
     *
     * @return string 
     */
    public function getFecharesrep()
    {
        return $this->fecharesrep;
    }

    /**
     * Set emitidaresolrep
     *
     * @param string $emitidaresolrep
     * @return Clientes
     */
    public function setEmitidaresolrep($emitidaresolrep)
    {
        $this->emitidaresolrep = $emitidaresolrep;
    
        return $this;
    }

    /**
     * Get emitidaresolrep
     *
     * @return string 
     */
    public function getEmitidaresolrep()
    {
        return $this->emitidaresolrep;
    }

    /**
     * Add solicitudesOferta
     *
     * @param \CCC\OfertasBundle\Entity\solicitudoferta $solicitudesOferta
     * @return Clientes
     */
    public function addSolicitudesOferta(\CCC\OfertasBundle\Entity\solicitudoferta $solicitudesOferta)
    {
        $this->solicitudesOferta[] = $solicitudesOferta;
    
        return $this;
    }

    /**
     * Remove solicitudesOferta
     *
     * @param \CCC\OfertasBundle\Entity\solicitudoferta $solicitudesOferta
     */
    public function removeSolicitudesOferta(\CCC\OfertasBundle\Entity\solicitudoferta $solicitudesOferta)
    {
        $this->solicitudesOferta->removeElement($solicitudesOferta);
    }

    /**
     * Get solicitudesOferta
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSolicitudesOferta()
    {
        return $this->solicitudesOferta;
    }

    /**
     * Add contactos
     *
     * @param \CCC\OfertasBundle\Entity\Contactos $contactos
     * @return Clientes
     */
    public function addContacto(\CCC\OfertasBundle\Entity\Contactos $contactos)
    {
        $this->contactos[] = $contactos;
    
        return $this;
    }

    /**
     * Remove contactos
     *
     * @param \CCC\OfertasBundle\Entity\Contactos $contactos
     */
    public function removeContacto(\CCC\OfertasBundle\Entity\Contactos $contactos)
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