<?php


function terminate(){


    throw new \Exception('exit');


}



function da_redirect($url){

    throw new \Exception('redirect '.$url);

}