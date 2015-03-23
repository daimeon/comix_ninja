<?php
/**
 * Created by PhpStorm.
 * User: dmoritz
 * Date: 23.03.15
 * Time: 13:25
 */

namespace Dmoritz\ComixNinjaBundle\Service\Publisher;

class PublisherService
{
    public function getPublisher($iPublisherId = null)
    {
        return array('DC', 'Marvel', 'IDW');
    }
}