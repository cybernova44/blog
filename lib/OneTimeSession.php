<?php

namespace lib;

final class OneTimeSession implements SessionInterface
{

    private $session = array();

    private static $instance = null;

    public static function getInstance()
    {
        if (static::$instance === null) {
            static::$instance = new static();
        }

        return static::$instance;
    }

    public function set($k, $v)
    {
        static::$instance->session[$k] = $v;
    }

    public function get($k)
    {

        return isset(static::$instance->session[$k]) ? static::$instance->session[$k] : null;

    }


    public function remove($k)
    {
        unset(static::$instance->session[$k]);
    }

    public function clear(){
        static::$instance->session = array();
    }

    public function getAll() {
        return static::$instance->session;
    }

    private function __construct()
    {
    }

   
    private function __clone()
    {
    }

    public function setId($id){
    }

    public function start() {

    }
    
}