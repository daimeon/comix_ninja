<?php
/**
 * Created by PhpStorm.
 * User: dmoritz
 * Date: 24.07.15
 * Time: 12:40
 */

namespace Dmoritz\ComixNinjaBundle\Entity;

/**
 * @ORM\Entity
 * @ORM\Table(name="Series")
 */
class Series
{
    /**
     * @ORM\Column(type="string", length=100)
     */
    public $series_id;

    /**
     * @ORM\Column(type="string", length=250)
     */
    public $title;

    /**
     * @ORM\Column(type="integer")
     */
    public $publisher_id;
}
