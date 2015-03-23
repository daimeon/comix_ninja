<?php
/**
 * Created by PhpStorm.
 * User: dmoritz
 * Date: 23.03.15
 * Time: 15:02
 */

namespace Dmoritz\ComixNinjaBundle\Service;

class PublisherService
{

    public function getPublishers()
    {
        $publisher = $this->getDoctrine()
            ->getRepository('Dmoritz\ComixNinjaBundle\Entity\Publisher')
            ->findAll();
        if (!$publisher)
        {
            return null;
        }
        return $publisher;
    }
}