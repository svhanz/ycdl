// Сonnect styles and scripts
add_action( 'wp_enqueue_scripts', 'ycdl_scripts' );
function ycdl_scripts() {
// connect styles
wp_enqueue_style( 'main', get_stylesheet_uri() );
wp_enqueue_style( 'ycdl', get_template_directory_uri() . '/css/swiper-bundle.min.css', array('main'), null );
wp_enqueue_style( 'ycdl', get_template_directory_uri() . '/css/style.css', array('main'), null );

//connect scripts
wp_enqueue_script( 'swiper', get_template_directory_uri() . '/js/swiper-bundle.min.js', array(), '1.0.0', true );
wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array(swiper), '1.0.0', true );
}