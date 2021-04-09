<?php

namespace Tests;

use lib\APP;


class DATest extends Test
{

    private $da;

    private $order_api_reposne = [
        'id'=> "e1d770e0f1b8306a6b75d19ffc2b49f2",
        'uid'=> "a34cc6e0f1b6306b6b45d14ffc2a4991",
        'payment_url'=>'https://example.com/payments?name=name'

    ];

    public function testGet_js() {


//        $da = new DA;



        $this->assertTrue(true);

    }

    protected function setUp()
    {
        parent::setUp();
        $this->da = APP::getElement('da');

    }

    private function createOrder(){

        return array_merge($this->order, [
            'action' => 'form_big',
            'price'=>$this->config['product']['prices']['pl_PL']['price'],
            'currency'=>$this->config['product']['prices']['pl_PL']['currency']
        ]);
    }


    public function testInvalidPost(){


        $msg = '<pre style="    background: red !important;
    color: black !important;
    position: fixed !important;
    top: 0 !important;
    left: 0 !important;
    padding: 20px !important;
    font-size: 14px !important;
    margin: 0 !important;"></pre>';





        $this->expectOutputString($msg);

        $this->expectException(\Exception::class);

        $this->expectExceptionMessage('exit');



        $order = $this->createOrder();

        $order['force_invalid_response'] = true;


        $response = $this->da->createOrder($order, 'form_big');


    }

    public function testPostWithError(){


        $msg = '<pre style="    background: red !important;
    color: black !important;
    position: fixed !important;
    top: 0 !important;
    left: 0 !important;
    padding: 20px !important;
    font-size: 14px !important;
    margin: 0 !important;">error</pre>';





        $this->expectOutputString($msg);

        $this->expectException(\Exception::class);

        $this->expectExceptionMessage('exit');

        $order = $this->createOrder();

        $order['force_error'] = true;

        $response = $this->da->createOrder($order, 'form_big');


    }


    public function testCreateOrder(){

        $order = $this->createOrder();

        $resp = $this->da->createOrder($order, 'form_big');

        $this->assertEquals($resp, $this->order_api_reposne);
    }




    public function testUpdateOrder(){


        $order = $this->createOrder();

        $resp = $this->da->updateOrder($this->id, $order, 'form_big');

        $this->assertEquals($resp, $this->order_api_reposne);

    }



    public function testInvalidCreateOrder(){

        $this->invalidOrder('create');



    }

    public function testInvalidUpdateOrder(){



        $this->invalidOrder('update');
    }


    private function invalidOrder($type){

        $msg = '<pre style="    background: red !important;
    color: black !important;
    position: fixed !important;
    top: 0 !important;
    left: 0 !important;
    padding: 20px !important;
    font-size: 14px !important;
    margin: 0 !important;">invalid action type</pre>';



        $this->expectOutputString($msg);

        $this->expectException(\Exception::class);

        $this->expectExceptionMessage('exit');


        $order = $this->createOrder();

        if ($type == 'create') {
            $resp = $this->da->createOrder($order, 'invalid');
        } else if ($type == 'update') {
            $resp = $this->da->updateOrder($this->id, $order, 'invalid');
        }

    }




}
