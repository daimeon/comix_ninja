<?php

namespace Dmoritz\ComixNinjaBundle\Entity;

class Comics
{

    /**
     * @var integer
     */
    public $comics_id;

    /**
     * @var string
     */
    public $cn_id;

    /**
     * @var string
     */
    public $isbn;

    /**
     * @var string
     */
    public $title;

    /**
     * @var integer
     */
    public $issue_no;

    /**
     * @var integer
     */
    public $volume_id;
}
