<?php
/**
 * Created by PhpStorm.
 * User: dmoritz
 * Date: 25.01.2016
 * Time: 13:07
 */
namespace Dmoritz\ComixNinjaBundle\Controller;

use Dmoritz\ComixNinjaBundle\Entity\Comics;
use Dmoritz\ComixNinjaBundle\Entity\Publisher;
use Dmoritz\ComixNinjaBundle\Service\PublisherServiceInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityRepository;

class InputController extends DefaultController
{
    public function indexAction(Request $request)
    {
        /** @var PublisherServiceInterface $_oPublisherService */
        $_oPublisherService = $this->get(PublisherServiceInterface::DIC_NAME);
        $_aPublishers = $_oPublisherService->getPublishers();

        $_oPublisher = new Publisher();
        $oForm = $this->createFormBuilder($_oPublisher)
            ->add('name', 'text')
            ->add('foundingYear', 'text')
            ->add('defunctYear', 'text', array('required' => false))
            ->add('logo', 'text')
            ->add('country', 'text')
            ->add('save', 'submit', array('label' => 'Create Publisher'))
            ->getForm();

        $oForm->handleRequest($request);


        $_oComic = new Comics();
        $_oComicForm = $this->createFormBuilder($_oComic)
            ->add('isbn', 'text')
            ->add('title', 'text')
            ->add('save', 'submit', array('label' => 'Create Comic'))
            ->getForm();

        $_oComicForm->handleRequest($request);

        if ($oForm->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($_oPublisher);
            $em->flush();
            return $this->redirectToRoute('publisher_success', array('aMessage' => 'created'));
        }

        return $this->render(
            'DmoritzComixNinjaBundle:Publisher:inputForm.html.twig',
            array(
                'aPublishers' => $_aPublishers,
                'form' => $oForm->createView(),
                'comic_form' => $_oComicForm->createView()
            )
        );
    }

}
