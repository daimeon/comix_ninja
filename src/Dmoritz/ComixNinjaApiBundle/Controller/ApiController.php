<?php
/**
 * Created by PhpStorm.
 * User: dmoritz
 * Date: 21.07.15
 * Time: 10:39
 */

namespace Dmoritz\ComixNinjaApiBundle\Controller;

use Dmoritz\ComixNinjaBundle\Entity\Publisher;
use Dmoritz\ComixNinjaBundle\Entity\Series;
use Dmoritz\ComixNinjaBundle\Service\PublisherServiceInterface;
use Dmoritz\ComixNinjaBundle\Service\SeriesServiceInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityRepository;

class ApiController extends Controller
{

    /**
     * @param Request $oRequest
     * @return Response
     */
    public function publisherAction(Request $oRequest)
    {
        if ($oRequest->isMethod('GET'))
        {
            /** @var PublisherServiceInterface $_oPublisherService */
            $_oPublisherService = $this->get(PublisherServiceInterface::DIC_NAME);
            $_aPublishers = $_oPublisherService->getPublishers();

            $response = new Response(json_encode($_aPublishers), 200);
            $response->headers->set('Content-Type', 'application/json');
            return $response;
        }
        else if($oRequest->isMethod('POST'))
        {
            $_aData = json_decode($oRequest->getContent(), true);
            $_oPublisher = new Publisher();
            $_oPublisher->setName($_aData['name']);
            $_oPublisher->setFoundingYear($_aData['foundingYear']);
            if (array_key_exists('defunctYear', $_aData))
            {
                $_oPublisher->setDefunctYear($_aData['defunctYear']);
            }
            else
            {
                $_oPublisher->setDefunctYear(null);
            }
            $_oPublisher->setCountry($_aData['country']);

            $em = $this->getDoctrine()->getManager();
            $em->persist($_oPublisher);
            $em->flush();

            $_response = new Response('It worked, trust me', 201);

            return $_response;
        }
        else
        {
            return new Response('Method not supported', 404);
        }

    }

    public function seriesAction(Request $oRequest)
    {
        if ($oRequest->isMethod('GET'))
        {
            /** @var SeriesServiceInterface $_oSeriesService */
            $_oSeriesService = $this->get(SeriesServiceInterface::DIC_NAME);
            $_aSeries = $_oSeriesService->getSeries();

            $response = new Response(json_encode($_aSeries), 200);
            $response->headers->set('Content-Type', 'application/json');
            return $response;
        }
        else
        {
            $_aData = json_decode($oRequest->getContent(), true);
            $_oSeries = new Series();
            $_oSeries->setTitle($_aData['title']);
            $_oSeries->setPublisherId($_aData['publisherId']);
            $em = $this->getDoctrine()->getManager();
            $em->persis($_oSeries);
            $em->flush();

            $_response = new Response('It worked, trust me', 201);

            return $_response;
        }
    }
}
