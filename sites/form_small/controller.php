<?php if (!defined('DA_APP')) {
    exit;
}


// template file path
if (!empty($_POST)) {

    $err = array();
    $order = $_POST;

    $arr = array('name', 'phone');
    foreach ($arr as $k => $v) {
        if (!isset($_POST[$v]) || mb_strlen($_POST[$v]) < 2) {
            $err[$v] = __('is_required');
        }
    }


    $k = 'phone';
    if (!is_numeric($_POST[$k])) {
        $err[$k] = __('only_numbers');
    }


    if (empty($err)) {
        form_small($order);

        go_next_step();
        return;
    }


}


include($current_site_path . 'template.php');
