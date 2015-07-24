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
	 * @ORM\Column(type="integer")
	 */
	public $series_id;
	
	/**
	 * @ORM\Column(type="string", length=255)
	 */
	public $title;
	
	/**
	 * @ORM\Column(type="integer")
	 */
	public $publisher_id;
}
