<?php
/**
 * Created by PhpStorm.
 * User: dmoritz
 * Date: 11.12.15
 * Time: 15:19
 */

namespace Dmoritz\ComixNinjaBundle\Service;

use Doctrine\ORM\EntityManager;

interface ComicsServiceInterface
{
    const DIC_NAME = 'ComixNinja.ComicsServiceInterface';

    /**
     * @return mixed
     */
    public function getComics();
}
