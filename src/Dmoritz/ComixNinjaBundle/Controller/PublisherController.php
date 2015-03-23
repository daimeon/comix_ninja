<?php
/**
 * Created by PhpStorm.
 * User: dmoritz
 * Date: 12.03.15
 * Time: 15:37
 */
namespace Dmoritz\ComixNinjaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PublisherController extends Controller
{
    public function indexAction()
    {
        $_dbName = $this->container->getParameter('database_name');
        return $this->render(
            'DmoritzComixNinjaBundle:Publisher:index.html.twig'
        );
    }
}