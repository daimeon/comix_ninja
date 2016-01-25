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

        $form = $this->createFormBuilder($oPublisher)
            ->add('name', 'text')
            ->add('foundingYear', 'text')
            ->add('defunctYear', 'text', array('required' => false))
            ->add('logo', 'text')
            ->add('country', 'text')
            ->add('save', 'submit', array('label' => 'Create Publisher'))
            ->getForm();

        $form->handleRequest($request);

        /*if ($form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($oPublisher);
            $em->flush();
            return $this->redirectToRoute('publisher_success', array('aMessage' => 'deleted'));
        }*/

        return $this->render(
            'DmoritzComixNinjaBundle:Publisher:publisherForm.html.twig',
            array(
                'aPublishers' => $_aPublishers,
                'form' => $form
            )
        );
    }

}
