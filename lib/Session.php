<?php

namespace lib;

class Session
{
    private $store = null;


    public function __construct(SessionInterface $store)
    {
        $this->store = $store;



    }


    public function set($k, $v)
    {
        $this->store->set($k, $v);
    }

    public function get($k)
    {

        return $this->store->get($k);

    }


    public function remove($k)
    {
        $this->store->remove($k);
    }

    public function has($k)
    {
        return !is_null($this->store->get($k));
    }

    public function clear()
    {
        $this->store->clear();
    }

    public function getAll()
    {
        return $this->store->getAll();
    }

    public function setId($id){
        $this->store->setId($id);
    }

    public function start(){
        $this->store->start();
    }



}