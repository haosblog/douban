<?php

/**
 * Searching books by tag
 *
 * @create 2017-8-8 15:38:58
 * @author hao
 */

namespace Haosblog\Douban\Book\Search;

class Tag extends AbstractSearch
{

    /**
     * Searching the books by tag
     * 
     * @param type $q
     */
    public function search($q, $star = 0, $count = 20)
    {
        $option = [
            'tag' => $q,
            'star' => $star,
            'count' => $count,
        ];
        
        return $this->search($option);
    }
    
}
