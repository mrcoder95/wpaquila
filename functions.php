<?php
/**
 * Theme Functions.
 *
 * @package Aquila
 */

if (! defined('AQUILA_DIR_PATH') ) {
    define( 'AQUILA_DIR_PATH', untrailingslashit( get_template_directory() ) );
}
require_once AQUILA_DIR_PATH . '/inc/helpers/autoloader.php';

function aquila_get_theme_instance()
{
    \AQUILA_THEME\Inc\AQUILA_THEME::get_instance();
}

aquila_get_theme_instance();

function aquila_enqueue_scripts() {
    // Registering and Enqueueing Together
    //wp_enqueue_style( 'stylesheet', get_template_directory_uri() . '/style.css', []);
    //wp_enqueue_style( 'style-css', get_stylesheet_uri(), [], filemtime( get_template_directory() . '/style.css'), 'all');
    //wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/main.js', [], filemtime( get_template_directory() . '/assets/main.js'), true );

    # Registering the style and script
    wp_register_style('style-css', get_stylesheet_uri(), [], filemtime( get_template_directory() . '/style.css'), 'all');
    wp_register_style('bootstrap-css', get_template_directory_uri() . '/assets/src/library/css/bootstrap.min.css', [], filemtime( get_template_directory() . '/assets/src/library/css/bootstrap.min.css'), 'all');
    wp_register_script('main-js', get_template_directory_uri() . '/assets/main.js', [], filemtime( get_template_directory() . '/assets/main.js'), true );
    wp_register_script('bootstrap-js', get_template_directory_uri() . '/assets/src/library/js/bootstrap.min.js', [ 'jquery' ], filemtime( get_template_directory() . '/assets/src/library/js/bootstrap.min.js'), true );

    # Enqueuing the Style and script
    wp_enqueue_style('style-css');
    wp_enqueue_style('bootstrap-css');
    wp_enqueue_script('main-js');
    wp_enqueue_script('bootstrap-js');
}

add_action( 'wp_enqueue_scripts', 'aquila_enqueue_scripts');
?>