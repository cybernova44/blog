<?php

namespace lib;

interface SessionInterface
{

    public function set($k, $v);

    public function get($k);

    public function remove($k);

    public function clear();

    public function getAll();

    public static function getInstance();

    public function setId($id);


    public function start();



}