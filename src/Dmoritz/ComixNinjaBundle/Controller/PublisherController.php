<?php
/**
 * Created by PhpStorm.
 * User: dmoritz
 * Date: 12.03.15
 * Time: 15:37
 */
namespace Dmoritz\ComixNinjaBundle\Controller;

use Dmoritz\ComixNinjaBundle\Component\Db\Query\databaseConnect;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PublisherController extends Controller
{
    public function indexAction()
    {
        $_oConnection = new databaseConnect($this->container);

        return $this->render(
            'DmoritzComixNinjaBundle:Publisher:index.html.twig'
        );
    }
}