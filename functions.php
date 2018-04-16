<?php
  if( function_exists('acf_add_options_page') ) {

    acf_add_options_page((array(
		    'page_title' 	=> 'Theme General Settings'
    ));

  }

  function wpt_theme_styles() {
    wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'bootstrap_responsive', get_template_directory_uri() . '/css/bootstrap-theme.min.css' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
  }
  add_action( 'wp_enqueue_scripts', 'wpt_theme_styles' );

  function wpt_theme_js() {
    wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), ' ', true);
  }
  add_action( 'wp_enqueue_scripts', 'wpt_theme_js' );

?>
