<?php
/**
 * Created by PhpStorm.
 * User: dmoritz
 * Date: 23.03.15
 * Time: 15:03
 */

namespace Dmoritz\ComixNinjaBundle\Service;

interface PublisherServiceInterface
{
    const DIC_NAME = 'ComixBundle.PublisherServiceInterface';

    /**
     * @return mixed
     */
    public function getPublishers();

    /**
     * @param $iPublisherId
     * @return mixed
     */
    public function getPublisherById($iPublisherId);

    /**
     * @param $sPublisherName
     * @return mixed
     */
    public function getPublisherByName($sPublisherName);
}


