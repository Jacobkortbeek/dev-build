<?php

  add_theme_support( 'menus' );
  add_theme_support( 'post-thumbnails' );

  function register_theme_menus() {
    register_nav_menus(
      array(
        'primary-menu' => __( 'Primary Menu' )
      )
    );
  }

  add_action( 'init', 'register_theme_menus' );

  if( function_exists('acf_add_options_page') ) {

      acf_add_options_page(array(
  		'page_title' 	=> 'Theme General Settings',
  		'menu_title'	=> 'Theme Settings',
  		'menu_slug' 	=> 'theme-general-settings',
  		'capability'	=> 'edit_posts',
  		'redirect'		=> false
  	));

  	acf_add_options_sub_page(array(
  		'page_title' 	=> 'Theme Header Settings',
  		'menu_title'	=> 'Header',
  		'parent_slug'	=> 'theme-general-settings',
  	));

  	acf_add_options_sub_page(array(
  		'page_title' 	=> 'Theme Footer Settings',
  		'menu_title'	=> 'Footer',
  		'parent_slug'	=> 'theme-general-settings',
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
