<?php
add_filter( 'generate_navigation_search_output', function() {
    $current_language = '';

    if ( function_exists( 'pll_current_language' ) ) {
        $current_language = pll_current_language();

        if ( 'sk' == $current_language ) {
	    $current_language = '';
        }
    }

    return sprintf( // WPCS: XSS ok, sanitization ok.
        '<form method="get" class="search-form navigation-search" action="%1$s">
            <input type="search" class="search-field" value="%2$s" name="s" title="%3$s" />
        </form>',
        esc_url( home_url( '/' . $current_language ) ),
        esc_attr( get_search_query() ),
        esc_attr_x( 'Search', 'label', 'generatepress' )
    );
} );
