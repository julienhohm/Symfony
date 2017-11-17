<?php

namespace JH\TourismeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Activities
 *
 * @ORM\Table(name="activity", indexes={@ORM\Index(name="FK_City", columns={"city_id"})})
 * @ORM\Entity
 */
class Activity
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100, nullable=false)
     */
    private $activityname;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=200, nullable=false)
     */
    private $activityaddress;

    /**
     * @var string
     *
     * @ORM\Column(name="website", type="string", length=100, nullable=false)
     */
    private $activitywebsite;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=500, nullable=false)
     */
    private $activitydescription;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $activityid;

    /**
     * @var \JH\TourismeBundle\Entity\Cities
     *
     * @ORM\ManyToOne(targetEntity="JH\TourismeBundle\Entity\City")
     * @ORM\JoinColumn(name="city_id", referencedColumnName="id")
     */
    private $city;


}

