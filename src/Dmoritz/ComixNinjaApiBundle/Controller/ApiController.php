<?php
/**
 * Created by PhpStorm.
 * User: dmoritz
 * Date: 21.07.15
 * Time: 10:39
 */

namespace Dmoritz\ComixNinjaApiBundle\Controller;

use Dmoritz\ComixNinjaBundle\Service\PublisherServiceInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ApiController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('DmoritzComixNinjaApiBundle:Default:index.html.twig', array('name' => $name));
    }

    public function handleRequestAction(Request $request)
    {
        $data = $request->getContent();
        var_dump($request);
        var_dump($data);die;
    }

    public function publishersAction(Request $request)
    {
        /** @var PublisherServiceInterface $_oPublisherService */
        $_oPublisherService = $this->get(PublisherServiceInterface::DIC_NAME);
        $_aPublishers = $_oPublisherService->getPublishers();

        $data = $request->getContent();
        var_dump($request);
        var_dump($data);die;

        return $this->render(
            'DmoritzComixNinjaBundle:Publisher:index.html.twig',
            array(
                'aPublishers' => $_aPublishers
            )
        );
    }
}
