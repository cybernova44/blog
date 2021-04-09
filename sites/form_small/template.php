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
    <form action="" method="post">
        
        <input type="text" name="name" id="name" placeholder="name" required="required"
               value="<?php echo htmlspecialchars((isset($_POST['name']) ? $_POST['name'] : $order['name'])); ?>"><br>
        <input type="text" name="phone" id="phone" placeholder="phone" required="required"
               value="<?php echo htmlspecialchars((isset($_POST['phone']) ? $_POST['phone'] : $order['phone'])); ?>"><br>
        <input type="submit" name="sb" value="send">
    </form>


<?php
/********** footer ********** */
include(DA_DIR_SITES . '_shared/footer.php');
/********** footer end ********** */
?>