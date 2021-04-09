<?php

namespace lib;

final class APP
{

    private static $allowed_elements = array(
        'session'=>'Session',
        'da'=>'DA',
        'config'=>'config',
        'one_time_session'=>'OneTimeSession',
        'default_session'=>'DefaultSession',
        'cookie_session'=>'CookieSession',
        'curl_sender'=>'CurlSender',
        'dummy_sender'=>'DummySender',
        'current_site'=>'current_site'

    );

    private static $session_providers = array(
        'default'=>'default_session',
        'cookies'=>'cookie_session'
    );

    private static $mode = 'production';

    private static $instances = array();

    private static $lang = array();

    private static $version = '1.8';

    private static $domain = 'https://directaffiliate.com';

    public static function init($params = array()){

        static::$mode = isset($params['mode']) ? $params['mode'] : 'production';

        foreach (array('config', 'current_site') as $p) {
            if (isset($params[$p])) {
                static::$instances[$p] = $params[$p];
            }
        }

        foreach (array('config', 'session', 'da') as $p) {
            static::getElement($p);
        }

        if (isset($params['lang'])) {
            self::$lang = $params['lang'];
        }

    }

    public static function getElement($element)
    {

        if (!isset(static::$instances[$element])) {

            static::$instances[$element] = static::da_resolve($element);
        }

        return static::$instances[$element];
    }


    public static function da_resolve($element){

        if (!isset(self::$allowed_elements[$element])) {
            throw new \Exception('Invalid app element');
        }


        return self::createElement($element);


    }

    public static function createElement($element){

        if (!isset(self::$allowed_elements[$element])) {
            throw new \Exception('Can\'t crate instance of '. $element);
        }

        $instance_name = self::$allowed_elements[$element];

        $class_name = 'lib\\'.$instance_name;

        switch ($element) {
            case 'session':


                $session_provider = 'default_session';

                if (
                    isset(static::$instances['config'])
                    && isset(static::$instances['config']['session_type'])
                    && isset(static::$session_providers[static::$instances['config']['session_type']])
                ) {
                    $session_provider = static::$session_providers[static::$instances['config']['session_type']];
                } elseif (static::$mode == 'test') {
                    $session_provider = 'one_time_session';
                }


                return new $class_name(self::da_resolve($session_provider));
            case 'da':
                return new $class_name(
                    self::da_resolve(static::$mode == 'test' ? 'dummy_sender' : 'curl_sender'),
                    static::$mode == 'test'
                        ? 'https://example.com/api/orders/v'.static::$version.'/'
                        : static::$domain.'/api/orders/v'.static::$version.'/',
                    self::getElement('config')
                );
            case 'one_time_session':
            case 'default_session':
            case 'cookie_session':
                return $class_name::getInstance();
            case 'config':
                return include(realpath(__DIR__.'/../config.php'));
            case 'dummy_sender':
                return new $class_name();
            case 'curl_sender':
                return new $class_name();
            default:
                return null;

        }


    }

    public static function getConfig(){
        return isset(static::$instances['config']) ? static::$instances['config'] : null;
    }


    public static function getCurrentSite(){
        return isset(self::$instances['current_site']) ? self::$instances['current_site'] : null;
    }

    public static function disable(){
        self::$instances = array();
        self::$lang = array();

    }

    public static function lang(){

        return static::$lang;

    }

    public static function setLang($lang, $translations){

        static::$lang[$lang] = $translations;

    }


    private function __construct(){}

    private function __clone(){}


}
