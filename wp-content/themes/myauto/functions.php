
<?php  

add_action( 'wp_enqueue_scripts', function() {
 	wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css' );
  wp_enqueue_style( 'fonts',  'https://fonts.googleapis.com/css2?family=Allura&family=Mulish&family=Philosopher&display=swap' );
  wp_enqueue_style( 'fonts',  'https://fonts.gstatic.com' );
  wp_enqueue_style( 'fonts',  'https://fonts.googleapis.com' );
  
  
 	wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/script.js', array(), 'null', true );
});

  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'title-tag' );
  add_theme_support( 'custom-logo' );

?>

