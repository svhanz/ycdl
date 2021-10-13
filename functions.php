<?php
if(! function_exists('ycdl_setup')){
function ycdl_setup(){
add_theme_support( 'custom-logo', [
'height' => 50,
'width' => 100,
'flex-width' => false,
'flex-height' => false,
'header-text' => '',
'unlink-homepage-logo' => false, // WP 5.5
] );
};
add_action('after_setup_theme', 'ycdl_setup');
}

// Сonnect styles and scripts
add_action( 'wp_enqueue_scripts', 'ycdl_scripts' );
function ycdl_scripts() {
// connect styles
wp_enqueue_style( 'main', get_stylesheet_uri() );
wp_enqueue_style( 'swiper', get_template_directory_uri() . '/css/swiper-bundle.min.css', array(), null );
wp_enqueue_style( 'ycdl', get_template_directory_uri() . '/css/style.css', array('swiper'), null );

//connect scripts
wp_enqueue_script( 'swiper', get_template_directory_uri() . '/js/swiper-bundle.min.js', array(), '1.0.0', true );
wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array(), '1.0.0', true );
}
// регистрируем сразу несколько областей меню
function ycdl_menus() {
// собираем несколько зон(областей) меню
	$locations = array(
		'header'  => __( 'Header Menu', 'ycdl' ),
		'footer_left'   => __( 'Footer Left Menu', 'ycdl' ),
		'footer_right'   => __( 'Footer Right Menu', 'ycdl' ),
	);
// регистрируем области меню, которые лежат в переменной $locations
  register_nav_menus( $locations );
}
add_action('init', 'ycdl_menus');
?>