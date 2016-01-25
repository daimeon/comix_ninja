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
        $repository = $this
            ->entityManager
            ->getRepository('Dmoritz\ComixNinjaBundle\Entity\Publisher');

        $query = $repository->createQueryBuilder('p')
            ->orderBy('p.name', 'ASC')
            ->getQuery();
        $aPublishers = $query->getResult();
        if (!$aPublishers)
        {
            return null;
        }
        return $aPublishers;
    }

    public function getPublisherById($iPublisherId)
    {
        $oPublisher = $this
            ->entityManager
            ->getRepository('Dmoritz\ComixNinjaBundle\Entity\Publisher')
            ->find($iPublisherId);
        if(!$oPublisher)
        {
            return null;
        }
        return $oPublisher;
    }
}
