<?php

/**
 * Get the book base info by isbn
 *
 * @create 2017-8-14 15:38:40
 * @author hao
 */
namespace Haosblog\Douban\Book\Info;


class InfoByIsbn extends AbstractInfo
{
    const API_BOOK_INFO_BY_ISBN = 'https://api.douban.com/v2/book/isbn/';
    
    /**
     * 
     * 
     * @param string $isbn
     */
    public function getInfo($isbn)
    {
        $url = self::API_BOOK_INFO_BY_ISBN .'/'. $isbn;
        
        return $this->getAndParseJson($url);
    }

}
