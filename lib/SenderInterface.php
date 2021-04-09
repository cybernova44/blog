<?php

namespace lib;

interface SenderInterface
{

    public function send($url,$post_data=null,$headers = array(), $type = null);

}