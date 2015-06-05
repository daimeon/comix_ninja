<?php
/**
 * Created by PhpStorm.
 * User: dmoritz
 * Date: 05.06.15
 * Time: 14:33
 */

namespace Dmoritz\ComixNinjaBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class VintageCollectionController extends DefaultController
{
    public function indexAction()
    {
        return $this->render(
            'DmoritzComixNinjaBundle:VintageCollection:index.html.twig'
        );
    }
}