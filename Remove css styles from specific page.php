<?php
function goddy_design_remove_scripts() {

    // Check for the page you want to target
    if ( is_page( '' ) ) {

        // Remove Styles
        wp_dequeue_style( 'parent-style' );
        wp_dequeue_style( 'child-style' );
        wp_dequeue_style( 'parent-style-css' );
        wp_deregister_style( 'parent-style' );
        wp_deregister_style( 'child-style' );
        wp_deregister_style( 'parent-style-css' );
    }
}
add_action( 'wp_enqueue_scripts', 'goddy_design_remove_scripts' , 1 );
