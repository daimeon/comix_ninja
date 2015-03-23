<?php
/**
 * Created by PhpStorm.
 * User: dmoritz
 * Date: 23.03.15
 * Time: 12:43
 */

namespace Dmoritz\ComixNinjaBundle\Component\Db\Query;

class getPublisher
{
    const DIC_NAME = 'getPublisher';

    public function getPublisher($iPublisherId = null)
    {
        var_dump('aaaaaaa');
        $_sQuery  = 'SELECT *';
        $_sQuery .= ' FROM Publisher';
        $_sQuery .= ' ORDER BY name';

        $aResult = mysql_fetch_assoc($_sQuery);
        var_dump($aResult);
    }
}