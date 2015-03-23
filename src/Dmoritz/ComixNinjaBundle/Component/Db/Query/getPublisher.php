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
        $_sQuery  = 'SELECT *';
        $_sQuery .= ' FROM Publisher';
        $_sQuery .= ' ORDER BY name';

        $retval = mysql_query($_sQuery);
        $aResult = mysql_fetch_assoc($retval);

        return $aResult;
    }
}