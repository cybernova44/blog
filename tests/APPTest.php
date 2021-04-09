<?php

namespace Tests;

use lib\OneTimeSession;
use PHPUnit\Framework\TestCase;
use lib\APP;
use lib\Session;
use lib\DA;

class APPTest extends Test
{

//    public function testCreateClassInstance(){
//
//
//
//        $instance = $this->getMockBuilder(APP::class)
//            ->disableOriginalConstructor()
//            ->setMethods(['createClassInstance'])
//            ->getMock();
//
//        $instance
//            ->method('createClassInstance')
//            ->with('session')
//            ->willReturn(new da_session(new OneTimeda_session()));
//
//
//        $instance->createClassInstance('session');
//
//
//
//    }
//

    protected function tearDown()
    {

        APP::disable();
    }

//    public function testInit(){
//
//    }
//


    public function testGetElement(){

        APP::init(array('mode'=>'test'));

        $firstCall = APP::getElement('session');

        $secondCall = APP::getElement('session');

        $this->assertInstanceOf(Session::class, $firstCall);
        $this->assertSame($firstCall, $secondCall);

    }


    public function testGetConfig(){


        $this->assertEquals(APP::getConfig(), $this->config);


    }


    public function testGetCurrentSite(){

        $this->assertEquals(APP::getCurrentSite(), 'form_big');

    }

    public function testDisable(){


        APP::disable();

        $this->assertTrue(empty(APP::lang()));



    }


    public function testSetLang(){

        APP::setLang('pl', $this->lang);

        $lang = APP::lang();


        $this->assertEquals(isset($lang['pl']) ? $lang['pl'] : [], $this->lang);


    }


    public function testLang(){

        $this->assertEquals(APP::lang(), array());

        APP::setLang('pl', $this->lang);

        $lang = APP::lang();

        $this->assertEquals(isset($lang['pl']) ? $lang['pl'] : [], $this->lang);

    }


    public function testda_resolve(){


        $this->assertInstanceOf(\lib\Session::class, APP::da_resolve('session'));
        $this->assertInstanceOf(\lib\DA::class, APP::da_resolve('da'));

        $this->expectException(\Exception::class);

        $this->expectExceptionMessage('Invalid app element');


        APP::da_resolve('invalid');


    }



    public function testCreateElement(){


        $this->assertInstanceOf(\lib\Session::class, APP::createElement('session'));
        $this->assertInstanceOf(\lib\DA::class, APP::createElement('da'));
        $this->assertInstanceOf(\lib\CurlSender::class, APP::createElement('curl_sender'));

        $this->assertTrue(is_array(APP::createElement('config')));

        $this->expectException(\Exception::class);

        $this->expectExceptionMessage('Can\'t crate instance of invalid');


        APP::createElement('invalid');



    }





}