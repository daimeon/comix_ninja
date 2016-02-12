<?php
/**
 * Created by PhpStorm.
 * User: dmoritz
 * Date: 11.12.15
 * Time: 15:21
 */

namespace Dmoritz\ComixNinjaBundle\Service;

use Dmoritz\ComixNinjaBundle\Entity\ComicFilter;
use Doctrine\ORM\EntityManager;

class ComicsService
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
     * General method of getting all comics, ordered by title
     * #nothing fancy here
     *
     * @return null
     */
    public function getComics()
    {
        $_repository = $this
            ->entityManager
            ->getRepository('Dmoritz\ComixNinjaBundle\Entity\Comics');

        $_sQuery = $_repository->createQueryBuilder('c')
            ->orderBy('c.title', 'ASC')
            ->getQuery();
        $_aComics = $_sQuery->getResult();
        if(!$_aComics)
        {
            return null;
        }
        return $_aComics;
    }

    public function searchComics(ComicFilter $comicFilter = null)
    {
        $_repository = $this
            ->entityManager
            ->getRepository('Dmoritz\ComixNinjaBundle\Entity\Comics');

        $_sQuery = $_repository
            ->createQueryBuilder('c')
            ->orderBy('c.title', 'ASC')
            ->getQuery();

        $_aComics = $_sQuery->getResult();
        if(!$_aComics)
        {
            return null;
        }
        return $_aComics;
    }
}
