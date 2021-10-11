// Сonnect styles and scripts
add_action( 'wp_enqueue_scripts', 'ycdl_scripts' );
function ycdl_scripts() {
// connect styles
wp_enqueue_style( 'main', get_stylesheet_uri() );
wp_enqueue_style( 'ycdl', get_template_directory_uri() . '/css/swiper-bundle.min.css', array('main'), null );
wp_enqueue_style( 'ycdl', get_template_directory_uri() . '/css/style.css', array('main'), null );


wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
}