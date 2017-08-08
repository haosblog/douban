<?php

/**
 * Description of Search
 *
 * @create 2017-8-8 15:52:08
 * @author hao
 */

namespace Haosblog\Douban\Tests\Book;

use PHPUnit\Framework\TestCase;
use Haosblog\Douban\Book\Search\Factory;

class SearchTest extends TestCase
{
    /**
     * 
     */
    public function testSearchByKeyword()
    {
        $result = Factory::getInstance('keyword')->search('刘慈欣');
        $this->assertArrayHasKey('books', $result);
    }
    
    /**
     * 
     */
    public function testSearchByTag()
    {
        $result = Factory::getInstance('tag')->search('科幻');
        $this->assertArrayHasKey('books', $result);
    }
}
