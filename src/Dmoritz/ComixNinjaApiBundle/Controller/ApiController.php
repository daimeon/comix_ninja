<?php
/**
 * Created by PhpStorm.
 * User: dmoritz
 * Date: 21.07.15
 * Time: 10:39
 */

namespace Dmoritz\ComixNinjaApiBundle\Controller;

use Dmoritz\ComixNinjaBundle\Entity\Publisher;
use Dmoritz\ComixNinjaBundle\Service\PublisherServiceInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ApiController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('DmoritzComixNinjaApiBundle:Default:index.html.twig', array('name' => $name));
    }

    public function handleRequestAction(Request $oRequest)
    {
        $data = $oRequest->getContent();
        var_dump($oRequest);
        var_dump($data);die;
    }

    public function publishersAction(Request $oRequest)
    {
        /** @var PublisherServiceInterface $_oPublisherService */
        $_oPublisherService = $this->get(PublisherServiceInterface::DIC_NAME);
        $_aPublishers = $_oPublisherService->getPublishers();

        if ($oRequest->isMethod('GET'))
        {
            return $this->render(
                'DmoritzComixNinjaApiBundle:Default:publishers.json.twig',
                array(
                    'aPublishers' => $_aPublishers
                )
            );
        }
        else if($oRequest->isMethod('POST'))
        {
            $_aData = json_decode($oRequest->getContent(), true);
            $_oPublisher = new Publisher();
            $_oPublisher->setName($_aData['name']);
            $_oPublisher->setFoundingYear($_aData['foundingYear']);
            $_oPublisher->setDefunctYear($_aData['defunctYear']);
            $_oPublisher->setCountry($_aData['country']);

            var_dump($_oPublisher);
            $_response = new Response('It worked, trust me', 201);

            return $_response;
        }
        else
        {
            return $this->render('DmoritzComixNinjaApiBundle:Default:unsupported.html.twig');
        }


    }
}
