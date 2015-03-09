<?php
/*
 * @package WordPress
 * @subpackage LaFata
 * @since La Fata 1.0
 */

/* Add jquery support to Wordpress theme */

function theme_add_jquery() {
	if (!is_admin()) {
		wp_deregister_script('jquery'); 
		wp_register_script('jquery', '/wp-includes/js/jquery/jquery.js', false, '1.3.2', true);
		wp_enqueue_script('jquery');
	}
}

add_action('wp_enqueue_scripts', 'theme_add_jquery');

/* Add bootstrap support to the Wordpress theme*/

function theme_add_bootstrap() {
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'style-css', get_template_directory_uri() . '/style.css' );
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.3.2', true );
}

add_action( 'wp_enqueue_scripts', 'theme_add_bootstrap' );