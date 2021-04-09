<?php

namespace lib;

final class CookieSession implements SessionInterface
{

    private static $instance = null;
    private $cookies = array();
    private $cookie_name = 'da_order';

    public static function getInstance()
    {
        if (static::$instance === null) {

            static::$instance = new static();
        }

        return static::$instance;
    }


    private function __construct(){}



    public function set($k, $v)
    {

        $this->cookies[$k] = $v;
        $this->updateCookies($k, $v);


    }

    public function get($k)
    {

        return isset(static::$instance->cookies[$k]) ? static::$instance->cookies[$k] : null;

    }


    public function remove($k)
    {
        unset($this->cookies[$k]);
        $this->updateCookies($k, null, 1);
    }

    public function clear(){

        foreach ($this->cookies as $k=>$v) {
            $this->updateCookies($k, null, 1);
        }

        $this->cookies = array();


    }

    public function getAll() {
        return $this->cookies;
    }

    private function updateCookies($key, $value, $time = null){

        setcookie(
            $this->cookie_name.'_'.$key,
            serialize($value),
            $time ? $time : time() + 21600,
            '/'
        );
    }


    public function setId($id){


        $this->cookie_name = $id;

    }

    public function start(){
        foreach ($_COOKIE as $k => $v) {
            if (strpos($k, $this->cookie_name . '_') === 0) {
                $k = str_replace($this->cookie_name . '_', '', $k);
                $v = @unserialize($v);
                $this->cookies[$k] = $v;
            }
        }
    }

}