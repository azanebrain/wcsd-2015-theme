<?php
/**
 * Twenty Fourteen functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link http://codex.wordpress.org/Theme_Development
 * @link http://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * @link http://codex.wordpress.org/Plugin_API
 *
 * @package WordPress
 * @subpackage WCSD 2015 Theme
 */

function wcsd_setup() { 
    register_nav_menus( array(
        'primary'   => __( 'Top primary menu', 'wcsd' ),
    ) );
    add_theme_support( 'post-thumbnails' ); 
}
add_action( 'after_setup_theme', 'wcsd_setup' );


function wcsd_scripts() {
    // Load our main stylesheet.
    wp_enqueue_style( 'wcsd-style', get_stylesheet_uri() );
    wp_enqueue_style( 'wcsd-fonts', get_stylesheet_directory_uri() . '/css/fonts.css' );
}
add_action( 'wp_enqueue_scripts', 'wcsd_scripts' );

function theme_slug_widgets_init() {
    register_sidebar( array(
        'name' => 'WCSD Sidebar',
        'id' => 'wcsd-sidebar',
        'description' => '"Side"-bar for the WCSD Theme Dev Workshop',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'theme_slug_widgets_init' );