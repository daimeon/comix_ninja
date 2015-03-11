<?php

namespace Dmoritz\ComixNinjaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('DmoritzComixNinjaBundle:Default:index.html.twig', array('name' => $name));
    }
}
