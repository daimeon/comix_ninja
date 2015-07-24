<?php

namespace Dmoritz\ComixNinjaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Series")
 */
class Volumes
{
    /**
     * @var integer
     */
    public $volume_id;

    /**
     * @var string
     */
    public $title;

    /**
     * @var integer
     */
    public $series_id;
}
