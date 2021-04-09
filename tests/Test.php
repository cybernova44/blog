<?php


namespace Tests;

use PHPUnit\Framework\TestCase;
use lib\APP;

define('DA_APP',true);
define('DA_DIR', __DIR__.'/../');
define('DA_DIR_SITES', DA_DIR.'sites/');

include('lib/dummy_functions.php');

abstract class Test extends TestCase
{


    protected $customs = array(
        'custom1'=>'custom1',
        'custom2'=>'custom2',
        'custom3'=>'custom3',
        'custom4'=>'custom4',
    );


    protected $id = 'e1d770e0f1b8306a6b75d19ffc2b49f2';
    protected $uid = 'a34cc6e0f1b6306b6b45d14ffc2a4991';
    protected $url = 'https://example.com';
    protected $config = array(
        'nick'=>'user',
        'product'=>array(
            'code'=>'prod',
            'title'=>'Prod',
            'prices'=>array(
                'pl_PL' => array(
                    'currency'=>'PLN',
                    'price'=>'10.00',
                    'price_old'=>'15.00',
                    'price_extended'=>'20.00',
                    'price_extended_old'=>'25.00',
                    'price_shipment' => 5,
                    'price_promo' => '',
                    'price_extended_promo' => '',
                )
            )
        ),
        'lang' => 'pl_PL',
        'customs'=>[
            'custom1'=>'custom1',
            'custom2'=>'custom2',
            'custom3'=>'custom3',
            'custom4'=>'custom4',
        ],
        'ip'=>'127.0.0.1',
        'ua'=>'',
        'url'=>'',
        'routing_path'=> array('blog', 'form_big', 'extension', 'thx', 'privacy', 'contact', 'gift', 'voucher'),
        'mode'=>'production'
    );
    protected $order = array(
        'name' => 'lorem',
        'phone' => '44444444',
        'address' => 'street 1, city',
        'city' => 'city',
        'pcode' => '200',
        'country' => 'PL',
        'note' => '',
        'pay_on_delivery' => '0',
        'action' => 'form_big',
        'price'=>10
    );


    protected $server = [
        'HTTP_HOST' => 'example.com',
        'HTTP_CONNECTION' => 'keep-alive',
        'HTTP_CACHE_CONTROL' => 'max-age=0',
        'HTTP_UPGRADE_INSECURE_REQUESTS' => '1',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/79.0.3945.79 Chrome/79.0.3945.79 Safari/537.36',
        'HTTP_ACCEPT' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
        'HTTP_ACCEPT_ENCODING' => 'gzip, deflate',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US,en;q=0.9',
        'HTTP_COOKIE' => '',
        'PATH' => '/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin',
        'SERVER_SIGNATURE' => '<address>Apache/2.4.29 (Ubuntu) Server at example.com Port 443</address>',
        'SERVER_SOFTWARE' => 'Apache/2.4.29 (Ubuntu)',
        'SERVER_NAME' => 'example.com',
        'SERVER_ADDR' => '127.0.0.1',
        'SERVER_PORT' => '443',
        'REMOTE_ADDR' => '127.0.0.1',
        'DOCUMENT_ROOT' => '/var/www/html',
        'REQUEST_SCHEME' => 'http',
        'CONTEXT_PREFIX' => '',
        'CONTEXT_DOCUMENT_ROOT' => '/var/www/html',
        'SERVER_ADMIN' => '',
        'SCRIPT_FILENAME' => '/var/www/html/index.php',
        'REMOTE_PORT' => '38460',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'REQUEST_METHOD' => 'GET',
        'QUERY_STRING' => '',
        'REQUEST_URI' => '',
        'SCRIPT_NAME' => 'index.php',
        'PHP_SELF' => 'index.php',
        'REQUEST_TIME_FLOAT' =>  1581056099.646,
        'REQUEST_TIME' =>  1581056099,
        'HTTPS'=>'on'
    ];


    protected $lang = array(
        'field'=>'pole',
        'is_required'=>'jest wymagane',
        'only_numbers'=>'musi zawierać jedynie cyfry',
        'phone'=>'telefon',
        'name'=>'imię',

    );


    protected function setUp()
    {

        APP::init(array('current_site'=>'form_big', 'mode'=>'test', 'config'=>$this->config));
        APP::getElement('session');

        $_SERVER = $this->server;

    }
    
    
    
    
}