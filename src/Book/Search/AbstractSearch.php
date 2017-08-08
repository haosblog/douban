<?php

/**
 * Description of AbstractSearch
 *
 * @create 2017-8-8 15:34:46
 * @author hao
 */

namespace Haosblog\Douban\Book\Search;

use Haosblog\Douban\Core\AbstractAPI;

abstract class AbstractSearch extends AbstractAPI
{
    
    const API_BOOK_SEARCH = 'https://api.douban.com/v2/book/search';
    
    /**
     * 搜索图书
     * 
     * @param array $options
     */
    protected function doSearch($options =[])
    {
        return $this->getAndParseJson(self::API_BOOK_SEARCH, $options);
    }
    
    abstract public function search($q);
}
