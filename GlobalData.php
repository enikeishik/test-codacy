<?php

namespace TestCodacy;

class GlobalData
{
    protected $get = [];
    protected $post = [];
    protected $cookie = [];
    protected $server = [];
    
    public function __construct($get, $post, $cookie, $server)
    {
        $this->get = $get;
        $this->post = $post;
        $this->cookie = $cookie;
        $this->server = $server;
    }
    
    public function getQs()
    {
        return $this->get;
    }
    
    public function getForm()
    {
        return $this->post;
    }
    
    public function getCookie()
    {
        return $this->cookie;
    }
    
    public function getServer()
    {
        return $this->server;
    }
}
