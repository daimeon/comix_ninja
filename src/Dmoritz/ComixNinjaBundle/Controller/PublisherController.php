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
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityRepository;

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
     * add a new publisher. Form and success @todo add success
     *
     * @return mixed
     */
    public function addPublisherAction(Request $request)
    {

        $oPublisher = new Publisher();

        $form = $this->createFormBuilder($oPublisher)
            ->add('name', 'text')
            ->add('foundingYear', 'text')
            ->add('defunctYear', 'text', array('required' => false))
            ->add('logo', 'text')
            ->add('country', 'text')
            ->add('save', 'submit', array('label' => 'Create Publisher'))
        ->getForm();

        $form->handleRequest($request);

        if ($form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($oPublisher);
            $em->flush();
            return $this->redirectToRoute('publisher_success', array('aMessage' => 'deleted'));
        }

        return $this->render(
            'DmoritzComixNinjaBundle:Publisher:publisherForm.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }

    /**
     * @param $iPublisherId
     * @return mixed
     */
    public function deletePublisher($iPublisherId)
    {
        $em = $this->getDoctrine()->getManager();
        /** @var PublisherServiceInterface $_oPublisherService */
        $_oPublisherService = $this->get(PublisherServiceInterface::DIC_NAME);
        $_oPublisher = $_oPublisherService->getPublisherById($iPublisherId);
        $em->remove($_oPublisher);
        $em->flush();


        return $this->render(
            'DmoritzComixNinjaBundle:Publisher:success.html.twig',
            array(
                'sMessage' => 'Publisher deleted'
            )
        );
    }

    /**
     * @return mixed
     */
    public function successAction()
    {
        return $this->render(
            'DmoritzComixNinjaBundle:Publisher:success.html.twig',
            array(
                'sMessage' => 'Publisher created'
            )
        );
    }
}
