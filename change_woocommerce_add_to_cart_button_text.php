<?php
function gd_btntext_cart() {
    return __( 'Go To Checkout', 'woocommerce' );
}
add_filter( 'woocommerce_product_single_add_to_cart_text', 'gd_btntext_cart' );
add_filter( 'woocommerce_product_add_to_cart_text', 'gd_btntext_cart' );
