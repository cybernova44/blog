<?php

namespace lib;

final class DefaultSession implements SessionInterface
{

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
        $_SESSION[$k] = $v;
    }

    public function get($k)
    {

        return isset($_SESSION[$k]) ? $_SESSION[$k] : null;

    }


    public function remove($k)
    {
        unset($_SESSION[$k]);
    }

    public function clear(){
        $_SESSION = array();
    }

    public function getAll() {
        return $_SESSION;
    }

    public function setId($id){

        session_name($id);

    }

    public function start() {
        session_start();
    }

}