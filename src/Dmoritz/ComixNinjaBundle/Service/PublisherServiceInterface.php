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
    const DIC_NAME = 'ComixBungle.PublisherServiceInterface';

    /**
     * @param null $iPublisherId
     * @return mixed
     */
    public function getPublisher($iPublisherId = null);

}


