<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use lib\Session;
use lib\OneTimeSession;

class SessionTest extends TestCase
{

    private $session = null;

    protected function setUp()
    {
        $this->session = OneTimeSession::getInstance();
    }

    protected function tearDown(){
        $this->session = null;
    }

    public function testOperationsOnData(){


        $foo = $this->session->get('foo');

        $this->assertNull($foo);

        $this->session->set('foo', 'bar');

        $this->assertEquals($this->session->get('foo'), 'bar');



    }

    public function testRemove(){

        $this->session->set('foo', 'bar');

        $foo = $this->session->remove('foo');

        $this->assertNull($foo);


    }


    public function testHas(){

        $this->session->set('foo', 'bar');

        $foo = $this->session->remove('foo');

        $this->assertNull($foo);


    }






}