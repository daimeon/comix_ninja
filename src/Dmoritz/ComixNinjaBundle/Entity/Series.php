<?php

namespace Dmoritz\ComixNinjaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Series
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
}
