<?php

add_theme_support('menus');

function shine_up_register_theme_menus() {
  register_nav_menus(
    array(
      'top-menu' => __('Top Menu')
    )
  );
}

add_action('init', 'shine_up_register_theme_menus');

function shine_up_theme_styles() {
  wp_enqueue_style('style_css', get_template_directory_uri() . '/style.css');
}

add_action('wp_enqueue_scripts', 'shine_up_theme_styles');

function shine_up_fcs_theme_js() {
  wp_enqueue_script('script_js', get_template_directory_uri() . '/assets/build/js/app.js', array('jquery'), '', true);
}

add_action('wp_enqueue_scripts', 'shine_up_fcs_theme_js');

?>