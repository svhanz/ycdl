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

}
}

// Сonnect styles and scripts
add_action( 'wp_enqueue_scripts', 'ycdl_scripts' );
function ycdl_scripts() {
// connect styles
wp_enqueue_style( 'main', get_stylesheet_uri() );
wp_enqueue_style( 'swiper', get_template_directory_uri() . '/css/swiper-bundle.min.css', array('main'), null );
wp_enqueue_style( 'ycdl', get_template_directory_uri() . '/css/style.css', array('swiper'), null );

//connect scripts
wp_enqueue_script( 'swiper', get_template_directory_uri() . '/js/swiper-bundle.min.js', array(), '1.0.0', true );
wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array(swiper), '1.0.0', true );
}