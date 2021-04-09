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
<meta name="viewport" content="initial-scale=1"/>
<link href="<?php echo get_res("contact/res/css/contact_rwd.css"); ?>" rel="stylesheet"
      type="text/css"/>         <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"              "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><title><?php echo __('Kontakt'); ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="robots" content="noindex,nofollow,noarchive">
    <META HTTP-EQUIV="PRAGMA" CONTENT="NO-CACHE">
    <link href="<?php echo get_res("contact/res/css/style.css"); ?>" rel="stylesheet" type="text/css"/>
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
<style>          body {
        font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
    }

    input {
        border: 1px solid #b8b3aa;
        height: 23px;
        width: 230px;
        margin-bottom: 8px;
    }

    label {
        font-size: 14px;
        color: #666;
    }

    textarea {
        border: 1px solid #b8b3aa;
        width: 360px;
        height: 100px;
    }

    #send {
        height: 30px;
        width: 100px;
        background: #beb8ae;
        border: 1px solid #a09b92;
    }

    .div-img-contact {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
    }

    .div-img-contact img {
        margin: 20px 0;
    }

    input, textarea {
        max-width: 100%;
    }      </style>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="480" border="0" align="center" cellpadding="4" cellspacing="4" bordercolor="#F5F4F4">
    <tr>
        <td bgcolor="#F5F4F4">
            <div align="center" class="naglowki"><strong><?php echo __('Kontakt'); ?></strong></div>
            <p align="center" class="text"></p><em> </em></p>
            <div style="margin: 0 10px; padding:10px; border-top: 1px solid gray;">
                <form name="contact_form" id="contact_form" method="post" onSubmit="return submitForm();" action="<?php echo url_site("contact_send"); ?>" style="margin: 0;">
                      <label for="cf_name" class="text" style="margin-top:15px;"><?php echo __('Vorname und Nachname*'); ?></label>
                      <br/>
                        <input name="cf_name" type="text" id="cf_name"/><br/> <label
                            for="cf_phone" class="text" style="margin-top:15px;"><?php echo __('Telefonnummer*'); ?></label><br/>
                    <input name="cf_phone" type="text" id="cf_phone"/><br/> <label for="cf_email" class="text"><?php echo __('E-Mail-Adresse*'); ?></label><br/> <input name="cf_email" type="text" id="cf_email"/><br/> <label for="cf_info" class="text"><?php echo __('Ihre Nachricht*'); ?></label><br/> <textarea name="cf_info" id="cf_info"></textarea><br/><br/> <input
                            name="submit" type="submit" value="<?php echo __('Senden'); ?>" id="send"/></form>
            </div>
        </td>
    </tr>
</table>
<script src="<?php echo get_res("contact/res/js/script_1.js"); ?>"></script>
</body>
</html>
