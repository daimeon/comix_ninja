<?php

namespace Dmoritz\ComixNinjaBundle\Controller;

use Symfony\Bundle\FramworkBundle\Controller\Controller;

class RandomController extends Controller
{
  public function indexAction($limit)
  {
    $number = rand(1, $limit);

    return $this->render(
        'DmoritzComixNinjaBundle:Random:index.html.twig',
        array('number' => $number)
    );
  }
}
