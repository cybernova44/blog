<?php

namespace lib;

class CurlSender implements SenderInterface
{

    public function send($url,$post_data=null,$headers = array(), $type = null){


        if (is_null($type)) {
            $type = 'POST';
        }


        if (!in_array($type, array('GET','POST', "PUT", "PATCH"))) {
            return;
        }

        $c = curl_init();
        curl_setopt($c, CURLOPT_URL, $url);
        curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($c, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($c, CURLOPT_REFERER, $url);
        curl_setopt($c, CURLOPT_HEADER, false);
        curl_setopt($c, CURLOPT_HTTPHEADER,$headers);
        curl_setopt($c, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($c, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($c, CURLOPT_CAINFO,DA_DIR.'cacert.pem');
        curl_setopt($c, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT x.y; Win64; x64; rv:10.0.1) Gecko/20100101 Firefox/10.0.1');
        curl_setopt($c, CURLOPT_CUSTOMREQUEST, $type);
        curl_setopt($c, CURLINFO_HEADER_OUT, true);

        if ($type == 'POST') {
            curl_setopt($c, CURLOPT_POSTFIELDS, $post_data);
        } elseif ($type == 'PUT') {
            curl_setopt($c, CURLOPT_POSTFIELDS, http_build_query($post_data));
        }

        $page = curl_exec($c);

        return $page;

    }

}