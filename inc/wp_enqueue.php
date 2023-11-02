<?php /*-----------------------------------------------------------------------------------*/
/* Enqueue Styles and Scripts
/*-----------------------------------------------------------------------------------*/

function base_scripts_styles()  { 
	// Define the version so we can easily replace it throughout the theme
	define( 'VERSION', 1.0 );

	// styles
	wp_enqueue_style('theme', get_stylesheet_uri(), [] );
	// wp_enqueue_style('swiper style', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css', [] );
	wp_enqueue_style('main style', get_template_directory_uri() . '/assets/css/style.css', [] );

	if (is_404()) {
        wp_enqueue_style('404-styles', get_template_directory_uri() . '/assets/css/style-404.css', []);
    }
	
	// scripts
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', ( 'https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js' ), array(), null, true );
	wp_enqueue_script( 'jquery' );
	// wp_enqueue_script('swiper script', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js', array(), VERSION, true );
	wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery' ), VERSION, true );

}
add_action( 'wp_enqueue_scripts', 'base_scripts_styles' );