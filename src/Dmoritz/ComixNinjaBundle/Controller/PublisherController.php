<?php
/**
 * Created by PhpStorm.
 * User: dmoritz
 * Date: 12.03.15
 * Time: 15:37
 */
namespace Dmoritz\ComixNinjaBundle\Controller;

use Dmoritz\ComixNinjaBundle\Component\Db\Query\databaseConnect;
use Dmoritz\ComixNinjaBundle\Component\Db\Query\getPublisher;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Dmoritz\ComixNinjaBundle\Service\Publisher\PublisherServiceInterface;

class PublisherController extends Controller
{
    public function indexAction()
    {
        print_r($this->container);die;
        $oPublisherService = $this->get(PublisherServiceInterface::DIC_NAME);
        $_aPublishers = $oPublisherService->getPublisher();

        $_oConnection = new databaseConnect($this->container);
        $_oPublisherQuery = new getPublisher();
        $_aPublishers = $_oPublisherQuery->getPublisher();
        var_dump($_aPublishers);
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