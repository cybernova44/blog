<?php

namespace Tests;

use lib\APP;

include('lib/functions.php');


class functionsTest2 extends Test {


    protected function setUp()
    {

        $this->config['relative_path'] = true;

        APP::init(array('current_site'=>'form_big', 'mode'=>'test', 'config'=>$this->config));
        APP::getElement('session');

        $_SERVER = $this->server;

    }


    public function testget_resRelative(){



        $this->assertEquals(get_res('form_big/res/img/example.png'), 'sites/form_big/res/img/example.png');


    }

    public function testGet_urlRelative(){


        $this->assertEquals(get_url(), '');


    }

}