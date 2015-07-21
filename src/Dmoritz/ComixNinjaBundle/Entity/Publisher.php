<?php

namespace Dmoritz\ComixNinjaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Publisher
 */
class Publisher
{
    /**
     * @var integer
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var integer
     */
    public $foundingYear;

    /**
     * @var integer
     */
    public $defunctYear;

    /**
     * @var string
     */
    public $country;

    /**
     * @var string
     */
    public $logo;


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
     * Set name
     *
     * @param string $name
     * @return Publisher
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set foundingYear
     *
     * @param integer $foundingYear
     * @return Publisher
     */
    public function setFoundingYear($foundingYear)
    {
        $this->foundingYear = $foundingYear;

        return $this;
    }

    /**
     * Get foundingYear
     *
     * @return integer 
     */
    public function getFoundingYear()
    {
        return $this->foundingYear;
    }

    /**
     * Set defunctYear
     *
     * @param integer $defunctYear
     * @return Publisher
     */
    public function setDefunctYear($defunctYear)
    {
        $this->defunctYear = $defunctYear;

        return $this;
    }

    /**
     * Get defunctYear
     *
     * @return integer 
     */
    public function getDefunctYear()
    {
        return $this->defunctYear;
    }

    /**
     * Set country
     *
     * @param string $country
     * @return Publisher
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Get logo
     *
     * @return string
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Set logo
     *
     * @param string $logo
     * @return Publisher
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;

        return $this;
    }
}
