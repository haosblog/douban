<?php

/**
 * Searching books by keyword
 *
 * @create 2017-8-8 15:34:01
 * @author hao
 */
namespace Haosblog\Douban\Book\Search;

class Keyword extends AbstractSearch
{

    /**
     * Searching the books by keyword
     * 
     * @param type $q
     */
    public function search($q, $star = 0, $count = 20)
    {
        $option = [
            'q' => $q,
            'star' => $star,
            'count' => $count,
        ];
        
        return $this->doSearch($option);
    }

}
