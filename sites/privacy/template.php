<?php if (!defined('DA_APP')) {
    exit;
} ?>

<?php
if (!empty($err)) {
    foreach ($err as $k => $v) {
        echo '<p style="color:red">' . __('field') . ' ' . __($k) . ': ' . $v . '</p>';
    }
}

$order = get_order();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="https://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="initial-scale=1"/>
    <meta name="robots" content="noindex,nofollow,noarchive"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Datenschutzerklärung</title>
    <link rel="stylesheet" href="<?php echo get_res("privacy/res/css/style.css"); ?>">
    <style>.k9a37709b {
            width: 1px !important;
            height: 1px !important;
            border: 0 !important;
            background: none !important;
            border-style: none !important;
            position: absolute;
        }</style>
    <style>.kd0b14563 {
            width: 2px !important;
            height: 2px !important;
            border: 0 !important;
            background: none !important;
            border-style: none !important;
            position: absolute;
        }</style>
</head>
<div class="container">
    <img src="<?php echo get_res("privacy/res/img/privacy.png"); ?>" alt=""/>
</div>
<img class="kd0b14563"/>
<script type="text/javascript" src="<?php echo get_res("privacy/res/js/fp.min.js"); ?>"></script>
</body></html>