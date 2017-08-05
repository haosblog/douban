<?php

/**
 * 豆瓣SDK抽象基类
 *
 * @create 2017-7-31 17:21:31
 * @author hao
 */

namespace Haosblog\Douban\Core;

use InvalidArgumentException;

use GuzzleHttp\Client;

class AbstractAPI
{
    
    protected $http;

    /**
     * Get the Http instance
     * 
     * @return Http
     */
    protected function getHttp()
    {
        if(!$this->http instanceof Http){
            $this->http = new Http();
        }
        
        return $this->http;
    }
    
    
    /**
     * GET request.
     *
     * @param string $url
     * @param array  $options
     *
     * @return ResponseInterface
     *
     * @throws HttpException
     */
    public function get($url, array $options = [])
    {
        return $this->request($url, 'GET', ['query' => $options]);
    }

    /**
     * POST request.
     *
     * @param string       $url
     * @param array|string $options
     *
     * @return ResponseInterface
     *
     * @throws HttpException
     */
    public function post($url, $options = [])
    {
        $key = is_array($options) ? 'form_params' : 'body';

        return $this->request($url, 'POST', [$key => $options]);
    }
    
    /**
     * 请求api
     * 
     * @param type $url
     * @param type $method
     * @param type $options
     * @return type
     */
    protected function request($url, $method = 'GET', $options = [])
    {
        $method = strtoupper($method);
        $response = (new Client())->request($method, $url, $options);
        
        $content = $response->getBody();

        return $content;
    }
    
}
