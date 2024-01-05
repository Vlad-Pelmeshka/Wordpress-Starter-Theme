<?php /*-----------------------------------------------------------------------------------*/
/* Add post thumbnail/featured image support
/*-----------------------------------------------------------------------------------*/
add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag');

/*-----------------------------------------------------------------------------------*/
/* Register main menu for Wordpress use
/*-----------------------------------------------------------------------------------*/
register_nav_menus( 
	array(
		'primary' => 'Primary Menu',
		'footer_menu' => 'Footer Menu'
	)
);

// ACFPro options page setup
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page();
    acf_add_options_sub_page('Site settings');
}

// Define the sitename
define("SITENAME", "vladenCH");
// Define the version
define("VERSION", 1.0 );

/*
// Add woocommerce support
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
   add_theme_support( 'woocommerce' );
}     
*/

