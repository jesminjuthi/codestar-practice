<?php 
// file include
require_once(get_theme_file_path('inc/codestar-functions.php'));

// Basic setup

function codestar_setup() {
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
}

add_action('after_setup_theme', 'codestar_setup');

// Styles and scripts 

function codestar_enqueue_scripts() {
    wp_enqueue_style('codestar-fonts', '//fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap');
    wp_enqueue_style('codestar-bootstrap-css', '//cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css');
    wp_enqueue_style('codestar-icons', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css');
    wp_enqueue_style('codestar-stylesheet', get_stylesheet_uri());
    wp_enqueue_style('reponsive-css', get_template_directory_uri() . '/responsive.css', array(), '1.0', 'all');
    wp_enqueue_script('codestar-bootstrap-js', '//cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js');
}

add_action('wp_enqueue_scripts', 'codestar_enqueue_scripts');

// get value from codestar

if ( ! function_exists( 'codestar_get_option' ) ) {
    function codestar_get_option( $option = '', $default = null ) {
      $options = get_option( 'codestar_options' );
      return ( isset( $options[$option] ) ) ? $options[$option] : $default;
    }
}











?>