<?php
/**
 * Created by PhpStorm.
 * User: dmoritz
 * Date: 11.12.2015
 * Time: 12:53
 */

namespace Dmoritz\ComixNinjaBundle\Service;

use Doctrine\ORM\EntityManager;

class SeriesService
{

    private $entityManager;

    /**
     * @param EntityManager $entityManager
     */
    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * Get all
     *
     * @return null
     */
    public function getSeries()
    {
        $_repository = $this
            ->entityManager
            ->getRepository('Dmoritz\ComixNinjaBundle\Entity\Series');

        $_sQuery = $_repository->createQueryBuilder('s')
            ->orderBy('s.title', 'ASC')
            ->getQuery();
        $_aSeries = $_sQuery->getResult();
        if (!$_aSeries)
        {
            return null;
        }
        return $_aSeries;
    }
}
