<?php

namespace lib;

class DummySender implements SenderInterface
{


    public function send($url,$post_data=null,$headers = array(), $type = null) {


        if (isset($post_data['force_invalid_response'])) {
            return null;
        }

        if (isset($post_data['force_error'])) {
            return json_encode(array('error'=>'error'));
        }

        return json_encode([
            'id'=> "e1d770e0f1b8306a6b75d19ffc2b49f2",
            'uid'=> "a34cc6e0f1b6306b6b45d14ffc2a4991",
            'payment_url'=>'https://example.com/payments?name=name'
        ]);

    }


}