<?php
/**
 * Created by PhpStorm.
 * User: dmoritz
 * Date: 23.03.15
 * Time: 15:02
 */

namespace Dmoritz\ComixNinjaBundle\Service;

use Doctrine\ORM\EntityManager;

class PublisherService
{

    private $entityManager;

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }
    public function getPublishers()
    {
        $publisher = $this
            ->entityManager
            ->getRepository('Dmoritz\ComixNinjaBundle\Entity\Publisher')
            ->findAll();
        if (!$publisher)
        {
            return null;
        }
        return $publisher;
    }
}