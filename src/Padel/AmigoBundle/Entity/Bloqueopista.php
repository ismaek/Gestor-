<?php

namespace Padel\AmigoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bloqueopista
 * 
 * @ORM\Table(name="padel_bloqueopista")
 * @ORM\Entity
 */
class Bloqueopista
{
   /**
    * @var id
    * 
    * @ORM\Id
    * @ORM\Column(type="integer")
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    private $id;

    /**
     * @var \DateTime
     * @ORM\Column(name="fechaInicio", type="datetime", nullable=false)
     */
    private $dateTimeIni;

    /**
     * @var \DateTime
     * @ORM\Column(name="fechaFin", type="datetime", nullable=false)
     */
    private $dateTimeFin;

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
     * Set dateTimeIni
     *
     * @param \DateTime $dateTimeIni
     * @return Bloqueopista
     */
    public function setDateTimeIni($dateTimeIni)
    {
        $this->dateTimeIni = $dateTimeIni;

        return $this;
    }

    /**
     * Get dateTimeIni
     *
     * @return \DateTime 
     */
    public function getDateTimeIni()
    {
        return $this->dateTimeIni;
    }

    /**
     * Set dateTimeFin
     *
     * @param \DateTime $dateTimeFin
     * @return Bloqueopista
     */
    public function setDateTimeFin($dateTimeFin)
    {
        $this->dateTimeFin = $dateTimeFin;

        return $this;
    }

    /**
     * Get dateTimeFin
     *
     * @return \DateTime 
     */
    public function getDateTimeFin()
    {
        return $this->dateTimeFin;
    }

    /**
     * Set pista
     *
     * @param \Padel\AmigoBundle\Entity\Pista $pista
     * @return Bloqueopista
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