<?php
/**
 * Created by PhpStorm.
 * User: dmoritz
 * Date: 21.07.15
 * Time: 10:39
 */

namespace Dmoritz\ComixNinjaApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ApiController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('DmoritzComixNinjaApiBundle:Default:index.html.twig', array('name' => $name));
    }
}
