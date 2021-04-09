<?php if (!defined('DA_APP')) {
    exit;
}


// template file path
if (!empty($_POST['action']) || !empty($_GET['action'])) {

    $ext = false;
    $price = get_price();
    if (!empty($_POST['ext']) || !empty($_GET['ext'])) {
        $ext = true;
        $price = get_price_extended();
    }
    set_extended($ext);
    form_extension(array(
        'price' => $price,
        'currency' => get_currency(),
        'extended' => $ext,
        'action'=>'extension'
    ));



    go_next_step();
}


include($current_site_path . 'template.php');
