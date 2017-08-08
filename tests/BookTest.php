<?php

/**
 * SDK的Book类单元测试
 *
 * @create 2017-8-7 18:17:15
 * @author hao
 */

namespace Haosblog\Douban\Test;

use PHPUnit\Framework\TestCase;
use Haosblog\Douban\Book;

class BookTest extends TestCase
{
    
    public function testSearch()
    {
        $bookObj = new Book();
        $result = $bookObj->searchByKeyword('刘慈欣');
        $this->assertArrayHasKey('books', $result);
    }
}
