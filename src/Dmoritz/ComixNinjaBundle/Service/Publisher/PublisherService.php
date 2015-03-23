<?php
/**
 * Created by PhpStorm.
 * User: dmoritz
 * Date: 23.03.15
 * Time: 13:25
 */

namespace Dmoritz\ComixNinjaBundle\Service\Publisher;

use Dmoritz\ComixNinjaBundle\Component\Db\Query\databaseConnect;
use Dmoritz\ComixNinjaBundle\Component\Db\Query\getPublisher;

class PublisherService
{
    public function getPublisher($iPublisherId = null)
    {
        $_oConnection = new databaseConnect($this->container);
        $_oPublisherQuery = new getPublisher();
        $_aPublishers = $_oPublisherQuery->getPublisher();

        return $_aPublishers;
    }
}