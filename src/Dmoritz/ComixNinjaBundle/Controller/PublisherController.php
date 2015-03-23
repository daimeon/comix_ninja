<?php
/**
 * Created by PhpStorm.
 * User: dmoritz
 * Date: 12.03.15
 * Time: 15:37
 */
namespace Dmoritz\ComixNinjaBundle\Controller;

use Dmoritz\ComixNinjaBundle\Service\PublisherServiceInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PublisherController extends Controller
{
    public function indexAction()
    {
        /** @var PublisherServiceInterface $_oPublisherService */
        $_oPublisherService = $this->get(PublisherServiceInterface::DIC_NAME);

        $_oPublisher = $_oPublisherService->getPublisherById(3);
        var_dump($_oPublisher);die;

        return $this->render(
            'DmoritzComixNinjaBundle:Publisher:index.html.twig'
        );
    }

    /**
     * @todo: move to parent class
     *
     * @param $id
     * @return mixed
     */
    public function get($id)
    {
        return $this->container->get($id);
    }
}