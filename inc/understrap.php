<?php
/**
 * Enqueue scripts and styles.
 */
function _strap_scripts() {

  /* Add Bootstrap CSS */
  wp_enqueue_style('_s-bootstrap', get_template_directory_uri() . '/bootstrap/dist/css/bootstrap.min.css' );
  /* Add Custom CSS */
  wp_enqueue_style( '_s-style', get_stylesheet_uri() );
  /* Add Bootstrap JS */
  wp_enqueue_script( '_s-bootstrap-js', get_template_directory_uri() . '/bootstrap/dist/js/bootstrap.min.js', array('jquery'), '3.3.6', true );
  /* Add Custom JS */
  wp_enqueue_script( '_s-strap-js', get_template_directory_uri() . '/js/understrap.js', array('jquery'), '0.1', true );

}
add_action( 'wp_enqueue_scripts', '_strap_scripts' );

// Register Custom Navigation Walker
require get_template_directory() . '/wp-bootstrap-navwalker/wp_bootstrap_navwalker.php';
