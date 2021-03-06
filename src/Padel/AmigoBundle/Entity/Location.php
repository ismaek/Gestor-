<?php

namespace Padel\AmigoBundle\Entity;

use Jul\LocationBundle\Entity\Location as BaseLocation;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="padel_location")
 */
class Location extends BaseLocation
{
    /**
     * @var string
     * @ORM\Column(name="cp", type="string", length=5, nullable=true)
     */
    protected $cp;

    /**
     * @ORM\ManyToOne(targetEntity="City")
     * @ORM\JoinColumn(onDelete="set null")
     */
    protected $city;

    public function setCity( $city )
    {
        $this->city = $city;
    }

    public function getCity()
    {
        return $this->city;
    }
    
    public function setCp( $cp )
    {
        $this->cp = $cp;
    }

    public function getCp()
    {
        return $this->cp;
    }
}