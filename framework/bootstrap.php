<?php

require_once dirname( __FILE__ ) . '/custom-post-types.php';
require_once dirname( __FILE__ ) . '/custom-taxonomies.php';
require_once dirname( __FILE__ ) . '/shortcodes.php';


/*
Enable theme l18n support
*/
load_theme_textdomain( 'theme-name', get_template_directory() . '/languages' );


/*
add_theme_support
@link http://codex.wordpress.org/Function_Reference/add_theme_support
*/
add_theme_support( 'post-formats' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'custom-background' );
add_theme_support( 'custom-header' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'menus' );
add_theme_support( 'html5' );


/*
Theme menus
@link http://codex.wordpress.org/Function_Reference/register_nav_menu
*/
register_nav_menu('menu_id', 'Menu description');


function theme_scripts_styles() {

	// Example of loading JavaScript file.
	// wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer );
	// @link http://codex.wordpress.org/Function_Reference/wp_enqueue_script
	wp_enqueue_script( 'theme-script', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), 'YYYY-MM-DD', true );

	// Example of loading stylesheet file.
	// wp_enqueue_style( $handle, $src, $deps, $ver, $media );
	// @link http://codex.wordpress.org/Function_Reference/wp_enqueue_style
	wp_enqueue_style( 'theme-style', get_stylesheet_uri(), array(), 'YYYY-MM-DD' );
}
add_action( 'wp_enqueue_scripts', 'theme_scripts_styles' );

