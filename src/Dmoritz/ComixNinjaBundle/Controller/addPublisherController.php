<?php
/**
 * Created by PhpStorm.
 * User: dmoritz
 * Date: 09.09.15
 * Time: 11:19
 */

namespace Dmoritz\ComixNinjaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Dmoritz\ComixNinjaBundle\Entity\Publisher;
use Doctrine\ORM\EntityRepository;


class addPublisherController extends DefaultController
{
    public function indexAction(Request $request)
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
}
