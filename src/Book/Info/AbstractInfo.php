<?php

/**
 * Description of AbstractInfo
 *
 * @create 2017-8-8 16:43:35
 * @author hao
 */

namespace Haosblog\Douban\Book\Search;

use Haosblog\Douban\Core\AbstractAPI;

abstract class AbstractInfo extends AbstractAPI
{
    
    abstract public function getInfo($id);
}
