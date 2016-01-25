<?php
/**
 * Created by PhpStorm.
 * User: dmoritz
 * Date: 25.01.2016
 * Time: 13:07
 */
namespace Dmoritz\ComixNinjaBundle\Controller;

use Dmoritz\ComixNinjaBundle\Entity\Publisher;
use Dmoritz\ComixNinjaBundle\Service\PublisherServiceInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityRepository;

class InputController extends DefaultController
{
    public function indexAction()
    {
        /** @var PublisherServiceInterface $_oPublisherService */
        $_oPublisherService = $this->get(PublisherServiceInterface::DIC_NAME);
        $_aPublishers = $_oPublisherService->getPublishers();

        $_oPublisher = new Publisher();
        $oForm = $this->createFormBuilder($_oPublisher)
            ->add('name', TextType::class)
            ->add('country', DateType::class)
            ->add('save', SubmitType::class, array('label' => 'Create Task'))
            ->getForm();


        return $this->render(
            'DmoritzComixNinjaBundle:Publisher:inputForm.html.twig',
            array(
                'aPublishers' => $_aPublishers,
                'form' => $oForm
            )
        );
    }

}
