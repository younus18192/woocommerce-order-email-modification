<?php
/*
 * plugin name: woocommerce order email modification
 */

add_action( 'woocommerce_email_before_order_table', 'woo_order_email_mod');

function woo_order_email_mod() {
echo "This text is inserted in the email with a custom plugin";
}

?>