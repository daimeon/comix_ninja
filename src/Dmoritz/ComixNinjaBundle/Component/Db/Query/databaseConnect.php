<?php
/**
 * Created by PhpStorm.
 * User: dmoritz
 * Date: 23.03.15
 * Time: 11:35
 */

namespace Dmoritz\ComixNinjaBundle\Component\Db\Query;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class databaseConnect
{

    private $container;

    public function __construct($c)
    {
        var_dump('doing connect');
        $this->container = $c;
        $_bDatabaseConnection = mysql_connect(
            $this->container->getParameter('database_host'),
            $this->container->getParameter('database_user'),
            $this->container->getParameter('database_password')
        );
        if (!$_bDatabaseConnection)
        {
            die('Connection failed');
        }
        mysql_close($_bDatabaseConnection);
    }
}