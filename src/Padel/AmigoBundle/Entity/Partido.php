<?php

namespace Padel\AmigoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Partido
 *
 * @ORM\Table(name="padel_partido")
 * @ORM\Entity
 */
class Partido
{
    /**
     * @var integer
     *
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(name="nivel", type="string", length=2, nullable=true)
     */
    private $nivel;

    /**
     * @var \DateTime
     * @ORM\Column(name="hora_inicio", type="datetime", nullable=true)
     */
    private $horaInicio;

    /**
     * @var integer
     * @ORM\Column(name="duracion", type="integer", nullable=true)
     */
    private $duracion;

    /**
     * @var float
     * @ORM\Column(name="precio_final", type="float", nullable=true)
     */
    private $precioFinal;

    /**
     * @var integer
     * @ORM\Column(name="n_participantes", type="integer", nullable=true)
     */
    private $nParticipantes;

    /**
     * @var boolean
     * @ORM\Column(name="aviso", type="boolean", nullable=true)
     */
    private $aviso;

    /**
     * @var string
     * @ORM\Column(name="texto_aviso", type="string", length=50, nullable=true)
     */
    private $textoAviso;

    /**
     * @var \Padel\AmigoBundle\Entity\User
     * @ORM\ManyToOne(targetEntity="Padel\AmigoBundle\Entity\User") 
     */
    private $user;

    /**
     * @var \Padel\AmigoBundle\Entity\Pista
     * @ORM\ManyToOne(targetEntity="Padel\AmigoBundle\Entity\Pista") 
     */
    private $pista;


 

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
     * Set nivel
     *
     * @param string $nivel
     * @return Partido
     */
    public function setNivel($nivel)
    {
        $this->nivel = $nivel;

        return $this;
    }

    /**
     * Get nivel
     *
     * @return string 
     */
    public function getNivel()
    {
        return $this->nivel;
    }

    /**
     * Set horaInicio
     *
     * @param \DateTime $horaInicio
     * @return Partido
     */
    public function setHoraInicio($horaInicio)
    {
        $this->horaInicio = $horaInicio;

        return $this;
    }

    /**
     * Get horaInicio
     *
     * @return \DateTime 
     */
    public function getHoraInicio()
    {
        return $this->horaInicio;
    }

    /**
     * Set duracion
     *
     * @param integer $duracion
     * @return Partido
     */
    public function setDuracion($duracion)
    {
        $this->duracion = $duracion;

        return $this;
    }

    /**
     * Get duracion
     *
     * @return integer 
     */
    public function getDuracion()
    {
        return $this->duracion;
    }

    /**
     * Set precioFinal
     *
     * @param float $precioFinal
     * @return Partido
     */
    public function setPrecioFinal($precioFinal)
    {
        $this->precioFinal = $precioFinal;

        return $this;
    }

    /**
     * Get precioFinal
     *
     * @return float 
     */
    public function getPrecioFinal()
    {
        return $this->precioFinal;
    }

    /**
     * Set nParticipantes
     *
     * @param integer $nParticipantes
     * @return Partido
     */
    public function setNParticipantes($nParticipantes)
    {
        $this->nParticipantes = $nParticipantes;

        return $this;
    }

    /**
     * Get nParticipantes
     *
     * @return integer 
     */
    public function getNParticipantes()
    {
        return $this->nParticipantes;
    }

    /**
     * Set aviso
     *
     * @param boolean $aviso
     * @return Partido
     */
    public function setAviso($aviso)
    {
        $this->aviso = $aviso;

        return $this;
    }

    /**
     * Get aviso
     *
     * @return boolean 
     */
    public function getAviso()
    {
        return $this->aviso;
    }

    /**
     * Set textoAviso
     *
     * @param string $textoAviso
     * @return Partido
     */
    public function setTextoAviso($textoAviso)
    {
        $this->textoAviso = $textoAviso;

        return $this;
    }

    /**
     * Get textoAviso
     *
     * @return string 
     */
    public function getTextoAviso()
    {
        return $this->textoAviso;
    }

    /**
     * Set user
     *
     * @param \Padel\AmigoBundle\Entity\User $user
     * @return Partido
     */
    public function setUser(\Padel\AmigoBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Padel\AmigoBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set pista
     *
     * @param \Padel\AmigoBundle\Entity\Pista $pista
     * @return Partido
     */
    public function setPista(\Padel\AmigoBundle\Entity\Pista $pista = null)
    {
        $this->pista = $pista;

        return $this;
    }

    /**
     * Get pista
     *
     * @return \Padel\AmigoBundle\Entity\Pista 
     */
    public function getPista()
    {
        return $this->pista;
    }
}