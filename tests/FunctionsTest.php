<?php

namespace Tests;

use lib\APP;

include('lib/functions.php');


class functionsTest extends Test
{

    private function updateServer($params){

        $this->server = array_merge($_SERVER, $params);

        $_SERVER = $this->server;

    }

    private $script = 'https://example.com/api/orders/v1.8/getJs?n=user&p=prod&v=1.8&l=pl_PL&t=2';

    protected function tearDown()
    {

        $_SERVER = [];
        da_session()->clear();
    }
    
    public function testinit_customs()
    {

        init_customs($this->customs);
        $this->assertEquals(da_session()->get('da_customs'), $this->customs);

        init_customs($this->customs);
        $this->assertEquals(da_session()->get('da_customs'), $this->customs);


    }

    public function testAlreadyExistingCustoms()
    {

        init_customs($this->customs);
        $this->assertEquals(da_session()->get('da_customs'), $this->customs);


        $customs2 = array(
            'custom1'=>'custom11',
            'custom2'=>'custom22',
            'custom3'=>'custom33',
            'custom4'=>'custom44',
        );

        init_customs($customs2);

        $this->assertEquals(da_session()->get('da_customs'), $this->customs);


    }

    public function testinitEmptyCustoms()
    {

        init_customs(array());
        $this->assertTrue(is_null(da_session()->get('da_customs')));

        init_customs(array('custom1'=>'', 'custom2'=>'', 'custom3'=>'', 'custom4'=>''));

        $this->assertTrue(is_null(da_session()->get('da_customs')));


    }

    public function testGet_customs()
    {

        da_session()->set('da_customs', $this->customs);

        $customs = get_customs();

        $this->assertTrue(is_array($customs));

        $this->assertEquals($customs, $this->customs);

        da_session()->remove('da_customs');

        $customs = get_customs();

        $this->assertTrue(is_array($customs) && empty($customs));


    }


    public function testSet_customs()
    {

        set_customs($this->customs);

        $this->assertEquals(da_session()->get('da_customs'), $this->customs);


    }


    public function testorder_get_id()
    {

        $now = time();


        da_session()->set('da_id', $this->id);

        da_session()->set('da_id_time', $now+1);

        $this->assertEquals(order_get_id(),  $this->id);


        da_session()->set('da_id_time', $now - 1);


        $this->assertEquals(order_get_id(), null);


    }

    public function testorder_set_id(){


        order_set_id($this->id);

        da_session()->get('da_id');

        $this->assertEquals(  da_session()->get('da_id'), $this->id);


    }

    public function testorder_get_uid(){

        da_session()->set('da_uid', $this->uid);

        $this->assertEquals(order_get_uid(), $this->uid);

    }

    public function testorder_set_uid(){

        order_set_uid($this->uid);

        $this->assertEquals(da_session()->get('da_uid', $this->uid), $this->uid);

    }


    public function testform_small()
    {


        $order = array(
            'action' => 'form_small',
            'name' => 'Lorem',
            'phone' => '35435345353'
        );


        $final_order = array(
            'action' => 'form_small',
            'name' => 'Lorem',
            'phone' => '35435345353',
            'currency'=>'PLN',
            'oc_cost'=>5,
            'price'=>10

        );

        form_small($order);



        $this->assertEquals(get_payment_url(), null);

        da_session()->remove('da_id_time');


        $this->assertEquals(array(
            'da_id' => $this->id,
            'da_uid' => $this->uid,
            'da_order' => $final_order,
            'da_order_thx' => $final_order

        ), da_session()->getAll());

    }

    public function testform_big()
    {

        $order = $this->order;

        form_big($order);

        $this->assertEquals(get_payment_url(), $this->url.'/payments?name=name');


        $this->assertEquals(da_session()->get('da_id'), $this->id);

        $this->assertEquals(da_session()->get('da_uid'), $this->uid);





    }


    public function testUpdateWithform_big()
    {



        $order = $this->order;

        form_big($order);

        $this->assertEquals(get_payment_url(), $this->url.'/payments?name=name');

        $this->assertEquals(da_session()->get('da_id'), $this->id);

        $this->assertEquals(da_session()->get('da_uid'), $this->uid);


        $order['price'] = 20;


        form_big($order);

        $this->assertEquals(get_payment_url(), $this->url.'/payments?name=name');

        $this->assertEquals(da_session()->get('da_id'), $this->id);

        $this->assertEquals(da_session()->get('da_uid'), $this->uid);





    }

    public function testform_bigDefaultValues()
    {



        $order = $this->order;

        unset($order['price']);

        unset($order['country']);


        form_big($order);

        $this->assertEquals(get_payment_url(), $this->url.'/payments?name=name');


        $this->assertEquals(da_session()->get('da_id'), $this->id);

        $this->assertEquals(da_session()->get('da_uid'), $this->uid);





    }


    public function testform_extension(){


        da_session()->set('da_order', array_merge($this->order,
            array(
                'action' => 'form_big',
                'price'=>$this->config['product']['prices']['pl_PL']['price'],
                'currency'=>$this->config['product']['prices']['pl_PL']['currency']
            )
        ));


        da_session()->set('da_id', $this->id);
        da_session()->set('da_uid', $this->uid);
        da_session()->set('da_id_time', time());

        $order = array(
            'extended'=>1,
            'price'=>$this->config['product']['prices']['pl_PL']['price_extended'],
            'action' => 'extension'
        );

        form_extension($order);

        $this->assertEquals(get_payment_url(), $this->url.'/payments?name=name');


        $this->assertEquals(  da_session()->get('da_id'), $this->id);

        $this->assertEquals(  da_session()->get('da_uid'), $this->uid);


        $order = da_session()->get('da_order');

        $price = is_array($order) && isset($order['price']) ? $order['price'] : null;

        $this->assertEquals(
            $price,
            $this->config['product']['prices']['pl_PL']['price_extended']
        );


    }


    public function testInvalidform_extension(){

        $msg = '<pre style="    background: red !important;
    color: black !important;
    position: fixed !important;
    top: 0 !important;
    left: 0 !important;
    padding: 20px !important;
    font-size: 14px !important;
    margin: 0 !important;">Order id is required</pre>';



//        $this->expectOutputString($msg);

        $this->expectException(\Exception::class);

        $this->expectExceptionMessage('redirect https://example.com?site=form_big');


        form_extension($this->order);




    }



    public function testOrder_parse_return()
    {

        $order = $this->order;

        order_parse_return($this->id, $this->uid, $order, $this->url);



        $data = da_session()->getAll();

        unset($data['da_id_time']);


        $this->assertEquals($data, [
            'da_id' => $this->id,
            'da_uid' => $this->uid,
            'da_order' => $order,
            'da_order_thx' => $order,
            'da_payment_url' => $this->url
        ]);

    }

    public function testorder_close(){

        da_session()->set('da_id', $this->id);

        da_session()->set('da_id_time', time());

        da_session()->set('da_order_thx', $this->order);

        order_close();

        $this->assertTrue(is_null(da_session()->get('da_id')));

        $this->assertTrue(is_null(da_session()->get('da_id_time')));

        $this->assertEquals(da_session()->get('da_order_thx'), $this->order);


    }



    public function testset_pay_on_delivery(){

        set_pay_on_delivery(true);

        $this->assertTrue(da_session()->get('da_pay_on_delivery'));


    }


    public function testGet_pay_on_delivery(){


        $this->assertEquals(get_pay_on_delivery(), false);


        da_session()->set('da_pay_on_delivery', true);

        $this->assertTrue(get_pay_on_delivery());


    }

    public function testSet_payment_url(){

        set_payment_url($this->url);

        $this->assertEquals(da_session()->get('da_payment_url'), $this->url);

    }






    public function testGet_payment_url(){



        $this->assertEquals(get_payment_url(), null);


        da_session()->set('da_payment_url', $this->url);


        $this->assertEquals(get_payment_url(), $this->url);



    }


    public function  testGo_next_step()
    {

        $this->expectException(\Exception::class);

        $this->expectExceptionMessage('redirect https://example.com?site=extension');

        go_next_step();

    }

    public function testGet_next_step_url(){


        $uri = get_next_step_url();


        $this->assertEquals($this->url.'?site=extension', $uri);

        $uri = get_next_step_url(array('a'=>1, 'b'=>2));

        $this->assertEquals($this->url.'?site=extension&a=1&b=2', $uri);




    }

    public function testGet_next_step(){

        $this->assertEquals(get_next_step(), 'extension');

    }


    public function testGet_lang(){



        $this->assertEquals(get_lang(), 'pl_PL');


    }

    public function testGet_urlAbsolute(){


        $this->assertEquals(get_url(true), 'https://example.com');


    }




    public function testget_resAbsolule(){



        $this->assertEquals(get_res('form_big/res/img/example.png'), $this->url.'/sites/form_big/res/img/example.png');


    }


    public function testget_ua(){



        $this->assertEquals(get_ua(), $this->server['HTTP_USER_AGENT']);

    }




    public function testget_ip(){


        foreach (['REMOTE_ADDR', 'HTTP_FORWARDED', 'HTTP_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_FORWARDED_FOR', 'HTTP_CLIENT_IP'] as $k=>$p) {


            $this->updateServer([$p=>'127.0.0.'.($k+1)]);



            $this->assertEquals(get_ip(),'127.0.0.'.($k+1) );


        }



        $_SERVER = [];


        $this->assertEquals(get_ip(),'127.0.0.1');


    }



    public function testget_product_info(){

        $this->assertEquals(
            get_product_info(),
            $this->config['product']
        );

    }
//
//
//
    public function testget_product_prices(){


        $this->assertEquals(
            get_product_prices(),
            $this->config['product']['prices']['pl_PL']
        );




    }

    public function testGetPrices(){


        $prices = $this->config['product']['prices']['pl_PL'];

        foreach (array('currency', 'price', 'price_old', 'price_extended', 'price_extended_old') as $p) {


            $fx = 'get_'.$p;

            $this->assertEquals($fx(), $prices[$p]);


        }

        $this->assertEquals(get_shipment(), $prices['price_shipment']);
        

    }




    public function testSet_order(){




        set_order($this->order);


        $this->assertEquals(da_session()->get('da_order'), $this->order);


        $this->assertEquals(da_session()->get('da_order_thx'), $this->order);









    }

    public function testGet_order(){


        $this->assertTrue(empty(get_order()));

        da_session()->set('da_order', $this->order);


        $this->assertEquals(get_order(), $this->order);


    }


    public function testGet_order_thx(){


        $this->assertTrue(empty(get_order_thx()));

        da_session()->set('da_order_thx', $this->order);


        $this->assertEquals(get_order_thx(), $this->order);



    }


    public function testGet_final_price(){


        da_session()->set('da_order', $this->order);




        $this->assertEquals(get_final_price(), $this->order['price']);



    }

    public function testIs_extended(){


        $this->assertTrue(is_extended()===false);
        da_session()->set('extended', true);

        $this->assertTrue(is_extended());


    }


    public function testset_extended(){


        set_extended();
        $this->assertTrue( da_session()->get('extended'));

        set_extended(false);
        $this->assertTrue( !da_session()->get('extended'));



    }


//    public function testsafe_path(){
//
//
//
//
//
//
//    }

    public function testurl(){

        $url = da_url();

        $this->assertEquals($url, $this->url);


        $url = da_url(array('a'=>1, 'b'=>2));

        $this->assertEquals($this->url.'?a=1&b=2', $url);

        $url = da_url('a=1&b=2');

        $this->assertEquals($this->url.'?a=1&b=2', $url);






    }
    public function testuri(){

        $url = uri();

        $this->assertEquals($url, $this->url);


        $url = uri(array('a'=>1, 'b'=>2));

        $this->assertEquals($this->url.'?a=1&b=2', $url);

        $url = uri('a=1&b=2');

        $this->assertEquals($this->url.'?a=1&b=2', $url);



    }
    public function testurl_site(){


        $url = url_site('extension');

        $this->assertEquals($this->url.'?site=extension', $url);






    }
    public function testparse_template(){


        $str = parse_template('<html><body></body></html>');

        $this->assertEquals('<html><body><script src="'.$this->script.'"></script></body></html>', $str);




    }


    public function testGet_error(){


        $msg = '<pre style="    background: red !important;
    color: black !important;
    position: fixed !important;
    top: 0 !important;
    left: 0 !important;
    padding: 20px !important;
    font-size: 14px !important;
    margin: 0 !important;">error</pre>';



        $this->assertEquals($msg, get_error('error'));

    }


    public function testShow_error(){


        $msg = '<pre style="    background: red !important;
    color: black !important;
    position: fixed !important;
    top: 0 !important;
    left: 0 !important;
    padding: 20px !important;
    font-size: 14px !important;
    margin: 0 !important;">error</pre>';


        $this->expectException(\Exception::class);

        $this->expectOutputString($msg);


        show_error('error');


    }


    public function testLang(){

        $this->assertEquals('undefined trans', __lang('undefined trans'));


        $this->assertEquals('pole', __lang('field'));




    }

    public function testda_is_mobile(){

        $this->assertTrue(!da_is_mobile());


        $this->updateServer(array('HTTP_USER_AGENT'=>'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.79 Mobile Safari/537.36'));


        $this->assertTrue(da_is_mobile() ? true : false);

    }

    public function testGet_countries() {



        $this->assertEquals(get_countries(), $countries = include(realpath('lib/countries.php')));


    }

    public function testda_app(){


        $this->assertInstanceOf(\lib\Session::class, da_app('session'));

    }


    public function testda_session(){


        $this->assertInstanceOf(\lib\Session::class, da_session());


    }



    public function testDa(){


        $this->assertInstanceOf(\lib\DA::class, da());


    }


    public function testda_resolve(){


        $this->assertInstanceOf(\lib\DA::class, da_resolve('da'));
        $this->assertInstanceOf(\lib\Session::class, da_resolve('session'));


    }



}
