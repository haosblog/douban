<?php

/**
 * Description of Search
 *
 * @create 2017-8-8 15:52:08
 * @author hao
 */

namespace Haosblog\Douban\Tests\Book;

use PHPUnit\Framework\TestCase;
use Haosblog\Douban\Book\Search;

class SearchTest extends TestCase
{
    /**
     * 
     */
    public function testSearchByKeyword()
    {
        $searchObj = new Search();
        $result = $searchObj->search('刘慈欣');
        $this->assertArrayHasKey('books', $result);
    }
    
    /**
     * 
     */
    public function testSearchByTag()
    {
        $searchObj = new Search();
        $result = $searchObj->byTag()->search('科幻');
        $this->assertArrayHasKey('books', $result);
    }
}
