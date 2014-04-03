<?php

namespace Padel\AmigoBundle\Entity;


use Jul\LocationBundle\Entity\City as BaseCity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="padel_city")
 */
class City extends BaseCity
{

}