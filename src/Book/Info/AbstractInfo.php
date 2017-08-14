<?php

/**
 * Abstract of the book info
 *
 * @create 2017-8-8 16:43:35
 * @author hao
 */

namespace Haosblog\Douban\Book\Info;

use Haosblog\Douban\Core\AbstractAPI;

abstract class AbstractInfo extends AbstractAPI
{
    
    abstract public function getInfo($id);
}
