<?php

/**
 * 豆瓣图书接口SDK
 *
 * @create 2017-7-31 17:08:03
 * @author hao
 */

namespace App\Service\Douban;

class Book extends AbstractAPI
{
    const API_BOOK_SEARCH = 'https://api.douban.com/v2/book/search';
    
    /**
     * 根据关键词查找图书
     * 
     * @param string $q
     * @param int $star
     * @param int $count
     * @return type
     */
    public function searchByKeyword($q, $star = 0, $count = 20)
    {
        $option = [
            'q' => $q,
            'star' => $star,
            'count' => $count,
        ];
        
        return $this->search($option);
    }
    
    /**
     * 根据标签查找图书
     * 
     * @param string $tag
     * @param int $star
     * @param int $count
     * @return type
     */
    public function searchByTag($tag, $star = 0, $count = 20)
    {
        $option = [
            'tag' => $tag,
            'star' => $star,
            'count' => $count,
        ];
        
        return $this->search($option);
    }
    
    
    /**
     * 搜索图书
     * 
     * @param array $options
     */
    public function search($options =[])
    {
        return $this->get(self::API_BOOK_SEARCH, $options);
    }
}
