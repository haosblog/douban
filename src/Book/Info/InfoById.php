<?php

/**
 * Get the book info by id
 *
 * @create 2017-8-14 15:37:59
 * @author hao
 */

namespace Haosblog\Douban\Book\Info;


class InfoById extends AbstractInfo
{
    
    const API_BOOK_INFO = 'https://api.douban.com/v2/book';
    
    public function getInfo($id)
    {
        $url = self::API_BOOK_INFO .'/'. $id;
        
        return $this->getAndParseJson($url);
    }

}
