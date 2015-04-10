<?php
/**
 * Created by PhpStorm.
 * User: dmoritz
 * Date: 10.04.15
 * Time: 15:01
 */

namespace Dmoritz\ComixNinjaBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ImpressumController extends DefaultController
{
    public function indexAction()
    {
        return $this->render(
            'DmoritzComixNinjaBundle:Impressum:index.html.twig'
        );
    }
}