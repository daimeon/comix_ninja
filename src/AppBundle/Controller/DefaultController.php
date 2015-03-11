<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Dmoritz\ComixNinjaBundle\Entity\Publisher;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/app/example", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('default/index.html.twig');
    }

    public function createAction()
    {
        $oPublisher = new Publisher();
        $oPublisher->setName('Ideenschmiede Paul & Paul (IPP)');
        $oPublisher->setFoundingYear(1999);
        $oPublisher->setDefunctYear(null);
        $oPublisher->setCountry('DE');

        $em = $this->getDoctrine()->getManager;
        $em->persist($oPublisher);
        $em->flush();

        return new Response('Created publisher id ' . $oPublisher->getId());
    }
}
