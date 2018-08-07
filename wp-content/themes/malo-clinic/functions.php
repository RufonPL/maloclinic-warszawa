<?php
add_action( 'init', 'intermedia_register_menu' );
function intermedia_register_menu() {
    register_nav_menu( 'primary', __('Primary Menu', 'v12') );
}
require(get_template_directory() .'/functions/custom-menu-walker.php');

function intermedia_load_scripts(){
    wp_enqueue_script( 'htmlshiv', get_template_directory_uri().'/lib/html5shiv/html5shiv.min.js', false, false );
    wp_script_add_data( 'htmlshiv', 'conditional', 'lt IE 9' );
    wp_enqueue_script( 'respondjs', get_template_directory_uri().'/lib/respond/respond.min.js', array('htmlshiv'), false );
    wp_script_add_data( 'respondjs', 'conditional', 'lt IE 9' );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri().'/lib/bootstrap/js/bootstrap.min.js', array('jquery', 'respondjs'), true );
}
add_action('wp_enqueue_scripts', 'intermedia_load_scripts');

if (function_exists('register_sidebar')) {
     register_sidebar(array(
      'name' => 'Nazwa Widgeta',
      'id'   => 'sidebar-widgets',
      'description'   => 'Widget dla footera',
      'before_widget' => '<div id="one" class="two">',
      'after_widget'  => '</div>',
      'before_title'  => '<h2>',
      'after_title'   => '</h2>'
     ));
    }

function register_my_menu() {
    register_nav_menu('header-menu',__( 'Header Menu' ));
  }
  add_action( 'init', 'register_my_menu' );

  add_theme_support( 'post-thumbnails' );

  if( function_exists('acf_add_options_page') ) {
  
  $languages = array( 'pl_PL');
  foreach ( $languages as $lang ) {
    acf_add_options_page( array(
      'page_title' => 'Site Options (' . strtoupper( $lang ) . ')',
      'menu_title' => __('Site Options (' . strtoupper( $lang ) . ')', 'text-domain'),
      'menu_slug'  => "site-options-${lang}",
      'post_id'    => $lang
    ) );
  }
}
?>
