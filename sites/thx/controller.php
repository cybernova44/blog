<?php if(!defined('DA_APP')){ exit; }

$redirect_url = get_payment_url();
$get_pay_on_delivery=get_pay_on_delivery();
set_payment_url(null);
order_close();	

if(!$get_pay_on_delivery && $redirect_url){
	redirect($redirect_url);
}


// template file path
include($current_site_path.'template.php');
