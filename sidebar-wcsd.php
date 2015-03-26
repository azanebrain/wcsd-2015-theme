<?php
/**
 * A sidebar template to display the WCSD widgets area
 *
 * @package WordPress
 * @subpackage WCSD 2015 Theme
 *
 * @link https://codex.wordpress.org/Function_Reference/dynamic_sidebar
 */

if ( is_active_sidebar( 'wcsd-sidebar' ) ) {
    dynamic_sidebar( 'wcsd-sidebar' );
}