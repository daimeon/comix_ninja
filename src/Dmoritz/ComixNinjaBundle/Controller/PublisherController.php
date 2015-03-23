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

        $_aPublishers = $_oPublisherService->getPublishers();

        return $this->render(
            'DmoritzComixNinjaBundle:Publisher:index.html.twig',
            array(
                'aPublishers' => $_aPublishers
            )
        );
    }

    /**
     * showing detailed information about a publisher
     *
     * @param $iPublisherId
     * @return mixed
     */
    public function showDetailsAction($iPublisherId)
    {
        /** @var PublisherServiceInterface $_oPublisherService */
        $_oPublisherService = $this->get(PublisherServiceInterface::DIC_NAME);

        $_oPublisher = $_oPublisherService->getPublisherById($iPublisherId);

        return $this->render(
            'DmoritzComixNinjaBundle:Publisher:details.html.twig',
            array(
                'oPublisher' => $_oPublisher,
            )

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