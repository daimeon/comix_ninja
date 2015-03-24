<?php
/**
 * Created by PhpStorm.
 * User: dmoritz
 * Date: 12.03.15
 * Time: 15:37
 */
namespace Dmoritz\ComixNinjaBundle\Controller;

use Dmoritz\ComixNinjaBundle\Entity\Publisher;
use Dmoritz\ComixNinjaBundle\Service\PublisherServiceInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PublisherController extends DefaultController
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
     * @return mixed
     */
    public function addPublisherAction()
    {

        $oPublisher = new Publisher();

        $form = $this->createFormBuilder($oPublisher)
            ->add('name', 'text')
            ->add('foundingYear', 'text')
            ->add('defunctYear', 'text')
            ->add('logo', 'text')
            ->add('save', 'submit', array('label' => 'Create Publisher'))
        ->getForm();


        return $this->render(
            'DmoritzComixNinjaBundle:Publisher:publisherForm.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }

}