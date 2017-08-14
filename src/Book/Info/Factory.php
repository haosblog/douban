<?php

/**
 * the Factory for the AbstractSearch
 *
 * @create 2017-8-8 15:41:54
 * @author hao
 */

namespace Haosblog\Douban\Book\Info;

class Factory
{
    
    /**
     * get the Instance of the AbstractSearch
     * 
     * @param string $realizeName
     * @return AbstractInfo
     */
    public static function getInstance($realizeName)
    {
        $realizeName = strtolower($realizeName);
        if(in_array($realizeName, ['id', 'isbn'])){
            $realizeName = 'InfoBy'. ucfirst($realizeName);
        }
        
        $fullClassName = __NAMESPACE__ .'\\'. ucfirst($realizeName);
        if(!class_exists($fullClassName)){
            throw new \InvalidArgumentException('Unknow realize name '. $realizeName);
        }
        
        return new $fullClassName;
    }
}
 