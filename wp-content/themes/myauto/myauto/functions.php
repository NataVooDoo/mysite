<?php  

add_action( 'wp_enqueue_scripts', 'load_css_js');

function load_css_js(){
  wp_enqueue_style( 'google_ips', 'https://fonts.googleapis.com');
  wp_enqueue_style( 'gstatic', 'https://fonts.gstatic.com');
  wp_enqueue_style( 'fonts', 'https://fonts.googleapis.com/css2?family=Philosopher&display=swap');
  wp_enqueue_style( 'style', get_stylesheet_directory_uri() . '/assets/css/style.css');

  wp_enqueue_script( 'script',  get_stylesheet_directory_uri() . '/assets/js/script.js', array(), false);
}

add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');

?>
