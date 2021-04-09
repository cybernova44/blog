<?php

use lib\APP;
use lib\Session;
use lib\DA;

function go_next_step()
{
    da_redirect(get_next_step_url());
}


function init_customs($customs)
{


    $current_customs = get_customs();

    if (!empty($current_customs)) {

        if(
            !empty($current_customs['custom1'])
            ||  !empty($current_customs['custom2'])
            || 	!empty($current_customs['custom3'])
            || 	!empty($current_customs['custom4'])

        ){
            return;
        }


    }



    if(empty($customs) || (empty($customs['custom1']) && empty($customs['custom2'])  && empty($customs['custom3'])  && empty($customs['custom4']) )  ){
        return;
    }


    set_customs($customs);

}


function get_customs()
{
    return da_session()->has('da_customs') ? da_session()->get('da_customs') : array();
}


function set_customs($customs)
{
    da_session()->set('da_customs', $customs);
}


function order_get_id()
{
    if (da_session()->get('da_id_time') < time()) {
        return null;
    }
    return da_session()->get('da_id');
}


function order_set_id($id)
{
    da_session()->set('da_id', $id);
    da_session()->set('da_id_time',  strtotime('+2 hours'));
}


function order_get_uid()
{
    return da_session()->get('da_uid');
}


function order_set_uid($id)
{
    da_session()->set('da_uid', $id);
}

function form_small($order){

    $DA = da_app('da');

    if (!isset($order['price'])) {
        $order['price'] = get_price();
    }
    if (!isset($order['currency'])) {
        $order['currency'] = get_currency();
    }

    $order_data = $DA->createOrder($order, 'form_small');

    $order['oc_cost'] = get_shipment();

    order_parse_return($order_data['id'], $order_data['uid'], $order);

}


function form_big($order){

    $DA = da_app('da');

    if (!isset($order['price'])) {
        $order['price'] = get_price();
    }
    if (!isset($order['currency'])) {
        $order['currency'] = get_currency();
    }

    if (!isset($order['country'])) {
        $str = explode('_', get_lang(), 2);
        $order['country'] = strtoupper($str[0]);
    }

    if ($id = order_get_id()) {

        $order = array_merge(get_order(), $order);

        $order_data = $DA->updateOrder($id, $order, 'form_big');

    } else {


        $order_data = $DA->createOrder($order, 'form_big');


        $order['oc_cost'] = get_shipment();


    }


    order_parse_return($order_data['id'], $order_data['uid'], $order, isset($order_data['payment_url']) ? $order_data['payment_url'] : null);

}


function form_extension($order){

    $DA = da_app('da');

    if (!$id = order_get_id()) {

        $da_config = APP::getConfig();

        $return_step = '';

        if (in_array('form_small', $da_config['routing_path'])) {
            $return_step = 'form_small';
        } elseif (in_array('form_big', $da_config['routing_path'])) {
            $return_step = 'form_big';
        }

        $url_params  = $return_step ? array('site'=>$return_step) : null;

        da_redirect(uri($url_params));


    }




    $order_data = $DA->updateOrder($id, $order, 'extension');

    $order = array_merge(get_order(), $order);

    order_parse_return($order_data['id'], $order_data['uid'], $order, $order_data['payment_url']);

}


function order_parse_return($id, $uid, $order, $payment_url = null)
{
    order_set_id($id);
    order_set_uid($uid);
    set_order($order);

    if (!is_null($payment_url)) {
        set_payment_url($payment_url);
    }

}


function order_close()
{
    if ($id = order_get_id()) {

        $keys = array_keys(da_session()->getAll());

        foreach ($keys as $k) {
            if ($k == 'da_order_thx') {
                continue;
            }
            da_session()->remove($k);
        }
    }
}


function set_pay_on_delivery($pay_on_delivery = false)
{

    da_session()->set('da_pay_on_delivery', $pay_on_delivery);

}

function get_pay_on_delivery()
{

    return da_session()->has('da_pay_on_delivery') ? da_session()->get('da_pay_on_delivery') : false;


}


function set_payment_url($payment_url)
{

    da_session()->set('da_payment_url', $payment_url);

}

function get_payment_url()
{
    return da_session()->has('da_payment_url') ? da_session()->get('da_payment_url') : null;

}


function get_next_step_url($params = array())
{
    return uri(array_merge(array('site' => get_next_step()), $params));
}


function get_next_step()
{
    $current_site = APP::getCurrentSite();
    $da_config = APP::getConfig();

    $is = false;
    $next_site = $current_site;
    foreach ($da_config['routing_path'] as $k => $v) {
        if ($is) {
            $next_site = $v;
            break;
        }
        if ($v == $current_site) {
            $is = true;
        }
    }

    return $next_site;
}


function get_lang()
{
    $da_config = APP::getConfig();
    return $da_config['lang'];
}


function get_url($absolute = false)
{

    $da_config = APP::getConfig();

    if (!$absolute) {

        $uri = $_SERVER['REQUEST_URI'];


        if (empty($da_config['original_url'])) {
            $uri = str_replace('/index.php', '', $uri);
        }

        if (!empty($da_config['relative_path'])) {

            $segments = explode('?', $uri, 2);

            return  isset($segments[1]) ? '?'.$segments[1] : '';

        }
    }


    $s = $_SERVER;
    $ssl = (!empty($s['HTTPS']) && $s['HTTPS'] == 'on') ? true : false;
    $sp = strtolower($s['SERVER_PROTOCOL']);
    $protocol = substr($sp, 0, strpos($sp, '/')) . (($ssl) ? 's' : '');
    $port = $s['SERVER_PORT'];
    $port = ((!$ssl && $port == '80') || ($ssl && $port == '443')) ? '' : ':' . $port;
    $host = isset($s['HTTP_X_FORWARDED_HOST']) ? $s['HTTP_X_FORWARDED_HOST'] : (isset($s['HTTP_HOST']) ? $s['HTTP_HOST'] : null);
    $host = isset($host) ? $host : $s['SERVER_NAME'] . $port;
    $uri = $protocol . '://' . $host . $s['REQUEST_URI'];

    if (empty($da_config['original_url'])) {
        $uri = str_replace('/index.php', '', $uri);
    }

    $segments = explode('?', $uri, 2);
    $url = $segments[0];
    return $uri;
}




function get_uri($absolute = false)
{

    $da_config = APP::getConfig();


    if (!$absolute) {

        if (!empty($da_config['relative_path'])) {
            return '';
        }

    }

    if (!empty($da_config['url'])) {
        $url = explode('?', $da_config['url'], 2);
        return $url[0];
    }


    $s = $_SERVER;
    $ssl = (!empty($s['HTTPS']) && $s['HTTPS'] == 'on') ? true : false;
    $sp = strtolower($s['SERVER_PROTOCOL']);
    $protocol = substr($sp, 0, strpos($sp, '/')) . (($ssl) ? 's' : '');
    $port = $s['SERVER_PORT'];
    $port = ((!$ssl && $port == '80') || ($ssl && $port == '443')) ? '' : ':' . $port;
    $host = isset($s['HTTP_X_FORWARDED_HOST']) ? $s['HTTP_X_FORWARDED_HOST'] : (isset($s['HTTP_HOST']) ? $s['HTTP_HOST'] : null);
    $host = isset($host) ? $host : $s['SERVER_NAME'] . $port;
    $uri = $protocol . '://' . $host . $s['REQUEST_URI'];

    if (empty($da_config['original_url'])) {
        $uri = str_replace('/index.php', '', $uri);
    }

    $segments = explode('?', $uri, 2);
    $url = $segments[0];
    return $url;
}



function get_current_site() {
    return APP::getCurrentSite();
}

function get_res($file)
{


    $da_config = APP::getConfig();

    if(isset($da_config['iframe']) && $da_config['iframe']) {
        return '/examples/php/simple_standard_extended/sites/'.$file;

    }

    if (!empty($da_config['relative_path'])) {
        return 'sites/' . $file;
    }

    $uri = get_uri(true);

    $uri = str_replace('/index.php', '', $uri);


    if (substr($uri, -1, 1) != '/') {
        $uri .= '/';
    }

    return $uri . 'sites/' . $file;
}


function get_ua()
{



    return isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : null;
}


function get_ip()
{

    foreach (['HTTP_X_REAL_IP','HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR'] as $p) {

        if (isset($_SERVER[$p])) {
            return $_SERVER[$p];
        }

    }

    return '127.0.0.1';

}

function get_product_info()
{
    $da_config = APP::getConfig();
    return $da_config['product'];
}

function get_product_prices()
{
    $pro = get_product_info();
    return $pro['prices'][get_lang()];
}

function get_currency()
{
    $prices = get_product_prices();

    return $prices['currency'];
}


function get_price()
{
    $prices = get_product_prices();
    return $prices['price'];
}

function get_shipment()
{
    $prices = get_product_prices();
    return $prices['price_shipment'];
}


function get_price_old()
{
    $prices = get_product_prices();

    if (empty($prices['price_old'])) {
        return round((floatval($prices['price']) / 100) * 130);
    }

    return $prices['price_old'];
}


function get_price_extended()
{
    $prices = get_product_prices();
    return $prices['price_extended'];

}

function get_price_extended_old()
{
    $prices = get_product_prices();

    if (empty($prices['price_extended_old'])) {
        return round((floatval($prices['price']) / 100) * 130);
    }

    return $prices['price_extended_old'];

}

function set_order($order)
{
    da_session()->set('da_order', $order);
    da_session()->set('da_order_thx', $order);

}

function get_order()
{
    return da_session()->has('da_order') ? da_session()->get('da_order') : array();
}


function get_order_thx()
{
    return da_session()->has('da_order_thx') ? da_session()->get('da_order_thx') : array();
}


function get_final_price()
{
    $r = get_order();
    return $r['price'];
}


function is_extended(){

    $ext = da_session()->get('extended');


    return !empty($ext);
}

function set_extended($ext=true) {

    da_session()->set('extended', $ext);

}



function safe_path($str)
{
    $str = preg_replace("/[^a-z0-9_]+/i", "", $str);
    return $str;
}


// translate
function __lang($str)
{

    $da_lang = APP::lang();

    $lang = get_lang();

    if (empty($da_lang) || empty($da_lang[$lang])) {

        APP::setLang($lang, include(DA_DIR . 'lang/' . safe_path($lang) . '.php'));

    }

    return isset($da_lang[$lang][$str]) ? $da_lang[$lang][$str] : $str;
}


// generate url
function da_url($params = null)
{




    $da_config = APP::getConfig();

    if(!empty($da_config['url']) && empty($da_config['relative_path'])){
        $url = $da_config['url'];
    }else{
        $url = get_url();
    }



    if (empty($params)) {
        return $url;
    }

    if (is_array($params)) {
        $p = $params;
    } else {
        parse_str($params, $p);
    }

    $p = array_merge($_GET, $p);

    $url = explode('?', $url, 2);


    $url = $url[0];

    if (!empty($p)) {
        $url .= '?' . http_build_query($p);
    }


    return $url;


}

function uri($params = null)
{

    $url = get_uri();

    if (empty($params)) {
        return $url;
    }

    if (is_array($params)) {
        $p = $params;
    } else {
        parse_str($params, $p);
    }


    $url = explode('?', $url, 2);

    $url = $url[0] . '?' . http_build_query($p);


    return $url;


}

function url_site($site)
{
    return uri(array('site' => $site));
}


function parse_template($str)
{
    $DA = da_app('da');


    $page_type = get_current_site();


    $pixels_type = array(
        'blog'=>'prelanding',
        'form_big'=>'landing',
        'extension'=>'conversion'
    );

    $pixel = '';





    if (isset($pixels_type[$page_type]) && file_exists(__DIR__ . '/../pixels/' .$pixels_type[$page_type].'.txt')) {

        $pixel = file_get_contents(__DIR__ . '/../pixels/' .$pixels_type[$page_type].'.txt');


        $customs = get_customs();

        for ($i = 1; $i < 4; $i++) {

            $custom = 'custom'.$i;


            if (isset($customs[$custom])) {

                $pixel =  str_replace(["{URL_custom$i}", "{custom$i}"], $customs[$custom], $pixel);

            }


        }


    }



    $str = str_replace('</body>', $pixel.PHP_EOL.'<script src="' . $DA->get_js() . '"></script></body>', $str);

    return $str;

}


function get_error($msg)
{
    return '<pre style="    background: red !important;
    color: black !important;
    position: fixed !important;
    top: 0 !important;
    left: 0 !important;
    padding: 20px !important;
    font-size: 14px !important;
    margin: 0 !important;">' . $msg . "</pre>";
}

function show_error($msg) {
    echo get_error($msg);
    terminate();
}

function get_countries()
{
    return require_once('countries.php');
}

function da_is_mobile()
{
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);

}

function da_app($element){
    return APP::getElement($element);
}

function da_session(){
    return da_app('session');
}


function da(){
    return da_app('da');

}
function da_resolve($name){

    return APP::da_resolve($name);

}


if (!function_exists('terminate')) {
    function terminate() {
        exit;
    }
}

if (!function_exists('da_redirect')) {

    function da_redirect($url)
    {
        header('Location: ' . $url, true, 302);
        die();
    }

}


if (!function_exists('redirect')) {

    function redirect($url){
        return da_redirect($url);
    }


}

if (!function_exists('url')) {

    function url($params){
        return da_url($params);
    }


}

if (!function_exists('__')) {

    function __($str){
        return __lang($str);
    }


}



