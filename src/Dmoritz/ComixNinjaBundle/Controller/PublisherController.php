<?php
/**
 * Created by PhpStorm.
 * User: dmoritz
 * Date: 12.03.15
 * Time: 15:37
 */
namespace Dmoritz\ComixNinjaBundle\Controller;

use Dmoritz\ComixNinjaBundle\Service\PublisherService;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Dmoritz\ComixNinjaBundle\Service\Publisher\PublisherServiceInterface;

class PublisherController extends Controller
{
    public function indexAction()
    {
        // $_oRatingsManagerService = $this->get(RatingsManagerServiceInterface::DIC_NAME);
        $_oPublisherService = $this->get(PublisherServiceInterface::DIC_NAME);

        $_oPublisherService->getPublishers();
        var_dump($_oPublisherService);die;


        /*$publisher = new Publisher();
        $publisher->setName('Carlsen Comics');
        $publisher->setCountry('DE');
        $publisher->setFoundingYear(1967);
        $publisher->setLogo('carlsen_comics_logo.png');

        $em = $this->getDoctrine()->getManager();

        $em->persist($publisher);
        $em->flush();
$id = 1;

        $publisher = $this->getDoctrine()
            ->getRepository('Dmoritz\ComixNinjaBundle\Entity\Publisher');
        $publisher->findAll();
        if (!$publisher)
        {
            throw $this->createNotFoundException('No publisher found for ID ' . $id);
        }
        var_dump($publisher);die;*/

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