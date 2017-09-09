<?php

/**
 * Description of Info
 *
 * @create 2017-8-15 16:27:56
 * @author hao
 */

namespace Haosblog\Douban\Book;

use Exception;
use Haosblog\Douban\Core\AbstractAPI;

class Info extends AbstractAPI
{
    const API_BOOK_INFO = 'https://api.douban.com/v2/book';
    
    const API_BOOK_INFO_BY_ISBN = 'https://api.douban.com/v2/book/isbn/';
    
    private $findWay = 'id';
    
    /**
     * Get the book info
     * 
     * @param int $idOrIsbn
     * @return array
     */
    public function getInfo($idOrIsbn)
    {
        if($this->findWay == 'id') {
            $url = self::API_BOOK_INFO .'/'. $idOrIsbn;
        } else {
            $url = self::API_BOOK_INFO_BY_ISBN .'/'. $idOrIsbn;
        }
        
        try
        {
            return $this->getAndParseJson($url);
        } catch (\GuzzleHttp\Exception\RequestException $ex) {
            $errorInfo = $this->parseJSON($ex->getResponse()->getBody());
            throw new Exception($errorInfo['msg'], $errorInfo['code']);
        }
        
    }
    
    
    /**
     * Change the find way to id
     * 
     * @return $this
     */
    public function byId(){
        $this->findWay = 'id';
        
        return $this;
    }
    
    
    /**
     * Change the find way to isbn
     * 
     * @return $this
     */
    public function byIsbn(){
        $this->findWay = 'isbn';
        
        return $this;
    }
}
