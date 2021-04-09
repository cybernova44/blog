<?php

namespace lib;

Class DA {

    private $version = '1.6';
    private $url = null;
    private $da_config = null;
    private $sender = null;

    private $urls = array(
        'form_small'=>'formSmall',
        'form_big'=>'formBig',
        'extension'=>'setExtension'
    );


    public function __construct(SenderInterface $sender, $url, $ada_config=null) {

        $this->da_config=$ada_config;
        $this->sender = $sender;
        $this->url = $url;

        if($this->da_config===null){
            $this->da_config=APP::getConfig();
        }

        if (strpos($url, 'v1.7')!==false) {
            $this->version = '1.7';
        }

        if (strpos($url, 'v1.8')!==false) {
            $this->version = '1.8';
        }





        if($this->da_config['mode'] == 'developer'){
            $this->url = 'http://da/api/orders/v'.$this->version.'/';
        }

    }

    /**
     * curl post helper
     * @param string  $url
     * @param array  $post_data
     * param array  $headers
     * @return json|string
     */
    private function sendRequest($url,$post_data=null,$headers = array(), $type = null){

        $page = $this->sender->send($url,$post_data, $headers, $type);

        $json=@json_decode($page);

        $json=(array)$json;

        if(empty($json)){
            show_error($page);
        }elseif(isset($json['error'])){
            show_error($json['error']);
        }

        return $json;
    }





    public function createOrder($order, $action){



        if (!isset($this->urls[$action])) {
            show_error('invalid action type');
        }

        $post = array_merge(
            array(
                'test_mode'=>isset($this->da_config['test_mode']) && $this->da_config['test_mode'] ? true : false,
                'nick'=>$this->da_config['nick'],
                'url'=>get_url(true),
                'product_code'=>$this->da_config['product']['code'],
                'product_title'=>$this->da_config['product']['title'],
                'locale'=>$this->da_config['lang'],
                'ip'=>$this->da_config['ip'],
                'ua'=>$this->da_config['ua'],
                'extended'=>is_extended(),
            ),
            get_customs(),
            $order);
        ;

        return $this->sendRequest($this->url.$this->urls[$action],$post, array(), 'POST');

    }

    public function updateOrder($id,$order, $action){

        if (!isset($this->urls[$action])) {
            show_error('invalid action type');
        }

        $post = array_merge(
            array(
                'id'=>$id,
                'test_mode'=>isset($this->da_config['test_mode']) && $this->da_config['test_mode'] ? true : false,
                'url'=>get_url(true),
                'locale'=>$this->da_config['lang'],
                'ip'=>$this->da_config['ip'],
                'ua'=>$this->da_config['ua'],
                'uid'=>order_get_uid(),
                'extended'=>is_extended(),
            ),
            get_customs(),
            $order);

        if ($this->version == '1.8' && $action == 'form_big') {
            $post['nick'] = $this->da_config['nick'];
        }


        $request_type = $this->version != '1.6' ? 'PUT' : 'POST';


        return $this->sendRequest($this->url.$this->urls[$action],$post, array(), $request_type);
    }


    public function get_js()
    {


        if ($this->version != '1.8') {
            return $this->url . 'getJs?' . http_build_query(array(
                    'n' => urlencode($this->da_config['nick']),
                    'p' => urlencode($this->da_config['product']['code']),
                    'v' => urlencode($this->version),
                ));
        }

        $customs = get_customs();

        $customs_qs = array();

        if (is_array($customs)) {
            for ($i = 1; $i < 5; $i++) {

                if (!empty($customs['custom' . $i])) {
                    $customs_qs['c' . $i] = urlencode($customs['custom' . $i]);
                }

            }
        }

        return $this->url . 'getJs?' . http_build_query(array_merge(array(
                    'n' => urlencode($this->da_config['nick']),
                    'p' => urlencode($this->da_config['product']['code']),
                    'v' => urlencode($this->version),
                    'l' => urlencode($this->da_config['lang']),
                    't' => urlencode(get_current_site() == 'blog' ? 1 : 2),
                ), $customs_qs)

            );
    }

}



