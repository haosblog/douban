<?php

/**
 * Description of InfoTest
 *
 * @create 2017-8-14 16:51:31
 * @author hao
 */

namespace Haosblog\Douban\Tests\Book;

use PHPUnit\Framework\TestCase;
use Haosblog\Douban\Book\Info;

class InfoTest extends TestCase
{
    
    public function testGetByIsbn(){
        $threebodyInfo = (new Info())->byIsbn()->getInfo(9787536692930);
        
        $this->assertArrayNotHasKey('code', $threebodyInfo);
        $this->assertArrayHasKey('author', $threebodyInfo);
        $this->assertArrayHasKey('image', $threebodyInfo);
    }
    
    
    
    
    public function testGetById(){
        $threebodyInfo = (new Info())->getInfo(2567698);
        
        $this->assertArrayNotHasKey('code', $threebodyInfo);
        $this->assertArrayHasKey('author', $threebodyInfo);
        $this->assertArrayHasKey('image', $threebodyInfo);
    }
    
}
