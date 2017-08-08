<?php

/**
 * the Factory for the AbstractSearch
 *
 * @create 2017-8-8 15:41:54
 * @author hao
 */

namespace Haosblog\Douban\Book\Search;

class Factory
{
    
    /**
     * get the Instance of the AbstractSearch
     * 
     * @param string $realizeName
     * @return AbstractSearch
     */
    public static function getInstance($realizeName)
    {
        $realizeName = strtolower($realizeName);
        
        $fullClassName = __NAMESPACE__ .'\\'. ucfirst($realizeName);
        if(!class_exists($fullClassName)){
            throw new \InvalidArgumentException('Unknow realize name '. $realizeName);
        }
        
        return new $fullClassName;
    }
}
 