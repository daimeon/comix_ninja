<?php
/**
 * Created by PhpStorm.
 * User: dmoritz
 * Date: 11.12.2015
 * Time: 12:58
 */

namespace Dmoritz\ComixNinjaBundle\Service;

use Doctrine\ORM\EntityManager;

interface SeriesServiceInterface
{
    const DIC_NAME = 'ComixNinja.SeriesServiceInterface';

    /**
     * @return mixed
     */
    public function getSeries();

}


