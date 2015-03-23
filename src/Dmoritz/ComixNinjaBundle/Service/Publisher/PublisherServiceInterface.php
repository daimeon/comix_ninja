<?php
/**
 * Created by PhpStorm.
 * User: dmoritz
 * Date: 23.03.15
 * Time: 13:23
 */

namespace Dmoritz\ComixNinjaBundle\Service\Publisher;

interface PublisherServiceInterface
{
    const DIC_NAME = 'ComixNinja.PublisherServiceInterface';

    /**
     * @param null $iPublisherId
     * @return mixed
     */
    public function getPublisher($iPublisherId = null);
}