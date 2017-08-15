<?php

/**
 * Reallize of the Search
 *
 * @create 2017-8-15 11:53:43
 * @author hao
 */

namespace Haosblog\Douban\Book;

use Haosblog\Douban\Core\AbstractAPI;

class Search extends AbstractAPI
{
    
    const API_BOOK_SEARCH = 'https://api.douban.com/v2/book/search';
    
    /**
     * The way to search the books
     * by default, set it to 'q'
     * 
     * @var type 
     */
    private $searchType = 'q';
    
    /**
     * search books
     * 
     * @param string $keyword
     * @param int $star
     * @param int $count
     * @return array
     */
    public function search($keyword, $star = 0, $count = 20)
    {
        $options = [
            $this->searchType => $keyword,
            'star' => $star,
            'count' => $count,
        ];
        
        return $this->getAndParseJson(self::API_BOOK_SEARCH, $options);
    }
    
    /**
     * Change the search way to q
     * 
     * @return $this
     */
    public function byQ(){
        $this->searchType = 'q';
        
        return $this;
    }
    
    /**
     * Change the search way to tag
     * 
     * @return $this
     */
    public function byTag(){
        $this->searchType = 'tag';
        
        return $this;
    }
}
