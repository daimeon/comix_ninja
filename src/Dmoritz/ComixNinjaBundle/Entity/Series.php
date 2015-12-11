<?php

namespace Dmoritz\ComixNinjaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Series")
 */
class Series
{
	/**
	 * @var integer
	 */
	public $series_id;
	
	/**
	 * @var string
	 */
	public $title;
	
	/**
	 * @var integer
	 */
	public $publisher_id;

    /**
     * Set series_id
     *
     * @param integer $seriesId
     * @return Series
     */
    public function setSeriesId($seriesId)
    {
        $this->series_id = $seriesId;

        return $this;
    }

    /**
     * Get series_id
     *
     * @return integer 
     */
    public function getSeriesId()
    {
        return $this->series_id;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Series
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set publisher_id
     *
     * @param integer $publisherId
     * @return Series
     */
    public function setPublisherId($publisherId)
    {
        $this->publisher_id = $publisherId;

        return $this;
    }

    /**
     * Get publisher_id
     *
     * @return integer 
     */
    public function getPublisherId()
    {
        return $this->publisher_id;
    }
}
