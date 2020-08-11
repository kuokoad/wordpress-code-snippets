<?php
// Enqueue Custom styles 
function my_login_stylesheet() {
  wp_enqueue_style( 'custom-login', get_stylesheet_directory_uri() . '/path/to/style.css' );
}
add_action( 'login_enqueue_scripts', 'my_login_stylesheet', 15 );


/* Enqueue JS File  - File Make placeholder in admin login page */
function gd_login_enqueue_scripts() {
    wp_enqueue_script( 'placeholder.js', get_stylesheet_directory_uri() . '/path/to/script.js', array( 'jquery' ), 1.0 );
}
add_action( 'login_enqueue_scripts', 'gd_login_enqueue_scripts', 10 );


/* Change the Login Logo URL */
function my_login_logo_url() {
  return get_bloginfo( 'url' );
}


/* Logo URL */
function my_login_logo_url_title() {
  return 'Goddy Design';
}
add_filter( 'login_headerurl', 'my_login_logo_url' );
add_filter( 'login_headertitle', 'my_login_logo_url_title' );


// Hide the Login Error Message 
function login_error_override()
{
  return 'Incorrect login details.';
}
add_filter('login_errors', 'login_error_override');

// Change The Login Error Message 
function custom_login_error_message()
{
  return "Yikes, that wasn't quite right. Please try again.";
}
add_filter('login_errors', 'custom_login_error_message');


// Remove the Login Page Shake 
function my_login_head() {
  remove_action('login_head', 'wp_shake_js', 12);
}
add_action('login_head', 'my_login_head');


/* Button text */
add_action('login_form', 'wpse17709_login_form');
    function wpse17709_login_form()
    {
      add_filter('gettext', 'wpse17709_gettext', 10, 2);
    }

    function wpse17709_gettext($translation, $text)
    {
      if ('Log In' == $text) {
        return 'LogMe In';
      }
      return $translation;
    }


/* Support Text */
function my_loginfooter() { ?>
  <p style="text-align: center; margin-top: 1em;">
    <a style="color: #000000; text-decoration: none;" href="mailto:admin@jovatrading.com">If you have any questions, Send us a mail.
    </a>
  </p>
<?php }
add_action('login_footer','my_loginfooter');

/* Dashboard Text */
function website_name_modify_footer_admin () {

  echo '<span id="footer-thankyou">Web Development by <a href="#" target="_blank">Amazing Motive, LLC</a></span>';
}
add_filter( 'admin_footer_text', 'website_name_modify_footer_admin' );

/**
 * Change some text.
 *
 * @param String $text WordPress Text Stream.
 * @return String
 */
function gd_change_some_text( $text ) {
    if ( 'Lost your password?' === $text ) {
        $text = 'Reset Password';
    }
	 if ('Register' === $text) 
		 $text = 'Sign Up';
    return $text;
}
add_action( 'gettext','gd_change_some_text' );
