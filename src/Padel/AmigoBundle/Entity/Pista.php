<?php

namespace Padel\AmigoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pista
 * 
 * @ORM\Table(name="padel_pista")
 * @ORM\Entity
 */
class Pista
{
   /**
    * @ORM\Id
    * @ORM\Column(type="integer")
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    protected $id;

    /**
     * @var string
     * @ORM\Column(name="tipo", type="string", length=10, nullable=false)
     */
    private $tipo;
    
    /**
     * @var float
     * @ORM\Column(name="importe", type="float", nullable=false)
     */
    private $importe;

    /**
     * @var float
     * @ORM\Column(name="importeConLuz", type="float", nullable=false)
     */
    private $importeConluz;

    /**
     * @var integer
     * @ORM\Column(name="nJugadores", type="integer", nullable=false)
     */
    private $nJugadores;
    
    /**
     * @var \Padel\AmigoBundle\Entity\Club
     * @ORM\ManyToOne(targetEntity="Padel\AmigoBundle\Entity\Club") 
     */
    private $club;

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
     * Set tipo
     *
     * @param string $tipo
     * @return Pista
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string 
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set importe
     *
     * @param float $importe
     * @return Pista
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
     * Set importeConluz
     *
     * @param float $importeConluz
     * @return Pista
     */
    public function setImporteConluz($importeConluz)
    {
        $this->importeConluz = $importeConluz;

        return $this;
    }

    /**
     * Get importeConluz
     *
     * @return float 
     */
    public function getImporteConluz()
    {
        return $this->importeConluz;
    }

    /**
     * Set nJugadores
     *
     * @param integer $nJugadores
     * @return Pista
     */
    public function setNJugadores($nJugadores)
    {
        $this->nJugadores = $nJugadores;

        return $this;
    }

    /**
     * Get nJugadores
     *
     * @return integer 
     */
    public function getNJugadores()
    {
        return $this->nJugadores;
    }

    /**
     * Set club
     *
     * @param \Padel\AmigoBundle\Entity\Club $club
     * @return Pista
     */
    public function setClub(\Padel\AmigoBundle\Entity\Club $club = null)
    {
        $this->club = $club;

        return $this;
    }

    /**
     * Get club
     *
     * @return \Padel\AmigoBundle\Entity\Club 
     */
    public function getClub()
    {
        return $this->club;
    }
}