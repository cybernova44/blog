<?php if (!defined('DA_APP')) {
    exit;
} ?>
<?php
$order = get_order_thx();
?>

<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="robots" content="index,follow">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <title><?php echo __('confirmation'); ?></title>

    <link rel=stylesheet type="text/css" href="<?php echo get_res("thx/res/css/reset.css"); ?>">
    <link rel=stylesheet type="text/css" href="<?php echo get_res("thx/res/css/order3.css"); ?>">

</head>

<body>
<div class="container">
    <div class="main wrapper">
        <div class="header-wrapper">
            <h1><?php echo __('dear'); ?></h1>
            <img src="<?php echo get_res("thx/res/img/accept.png"); ?>" alt="order confirmed">
        </div>
        <p>
            <?php echo str_replace('{param_prod_title}', get_product_info()['title'], __('thx_0')); ?>
            <br>
            <?php echo __('thx_0_1'); ?>
        </p>
        <div class="details">
            <div class="address">
                <h3 class="header" style="height:unset"><?php echo __('thx_1'); ?></h3>

                <?php
                foreach (array('name', 'surname', 'phone', 'address', 'pcode', 'city', 'country') as $value) {

                    echo '<span>' . $order[$value] . '</span>';

                }

                ?>

            </div>
            <table>
                <thead>
                <tr>
                    <th class="header"><?php echo __('thx_2'); ?></th>
                    <th class="header"><?php echo __('thx_3'); ?></th>
                    <th class="header"><?php echo __('thx_4'); ?></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><?php echo __('thx_5'); ?></td>
                    <td>1</td>
                    <td><?php echo(intval($order["price"])); ?><?php echo ' ' . get_currency(); ?></td>
                </tr>
                <tr>
                    <td><?php echo __('thx_6'); ?></td>
                    <td>1</td>
                    <td><?php echo get_shipment() . " " . get_currency(); ?></td>
                </tr>
                <tr>
                    <td class="header"><?php echo __('thx_7'); ?></td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td class="center">
                        <img src="<?php echo get_res("thx/res/img/" . ($order['extended'] ? $da_config['product']['code'].'_small.webp' : $da_config['product']['code'].'_big.webp')); ?>"
                             alt="product photo">
                        <span><?php echo get_product_info()['title']; ?></span>
                    </td>
                    <td>1</td>
                    <td></td>
                </tr>

                <tr>
                    <td class="header"><?php echo __('thx_8'); ?></td>
                    <td></td>
                    <td><?php echo (intval($order["price"])) + get_shipment(); ?><?php echo ' ' . get_currency(); ?></td>
                </tr>
                </tbody>
            </table>
        </div>

        <p><?php echo __('thx_9'); ?></p>
        <div style="float:right;text-align:right !important;">
            <p class="last" style="max-width: unset"><?php echo __('thx_10'); ?><br>
                <img src="<?php echo get_res("thx/res/img/" . __('country') . "_podpis.png"); ?>" style="float:none;">
            </p>
            <p class="last" style="max-width: unset"><?php echo __('thx_11'); ?><br>
                <?php echo __('thx_12'); ?><br>
                <?php echo __('thx_13'); ?> </p>

        </div>
        <div style="clear:both;"></div>

    </div>
</div>
</body>
</html>