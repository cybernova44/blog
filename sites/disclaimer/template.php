<?php if(!defined('DA_APP')){ exit; } ?>
<?php
if(!empty($err)){
    foreach($err as $k=>$v){
        echo '<p style="color:red">'.__('field').' '.__($k).': '.$v.'</p>';
    }
}

$order = get_order();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo __('disclaimer_1'); ?></title>
</head>
<body>
<p>
    <?php echo __('disclaimer_1'); ?>
</p>
<p>
    <?php echo __('disclaimer_2'); ?>
</p>
<p>
    <?php echo __('disclaimer_3'); ?>
</p>
<p>
    <?php echo __('disclaimer_4'); ?>
</p>
<p>
    <?php echo __('disclaimer_5'); ?>
</p>
<p>
    <?php echo __('disclaimer_6'); ?>
</p>
<p>
    <?php echo __('disclaimer_7'); ?>
</p>
</body>
</html>