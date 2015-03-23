<?php
/**
 * Created by PhpStorm.
 * User: dmoritz
 * Date: 23.03.15
 * Time: 11:35
 */

namespace Dmoritz\ComixNinjaBundle\Component\Db\Query;


class databaseConnect
{

    public function __construct(Container $c)
    {
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