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
	$locations = [
		'header'  => __( 'Header Menu', 'ycdl' ),
		'footer' => __('Footer Menu', 'ycdl'),
		'footer_left'   => __( 'Footer Left Menu', 'ycdl' ),
		'footer_right'   => __( 'Footer Right Menu', 'ycdl' ),
];
// регистрируем области меню, которые лежат в переменной $locations
  register_nav_menus( $locations );
}
add_action('init', 'ycdl_menus');

// Шаблон для создания нового типа записи
add_action( 'init', 'register_post_types' );
function register_post_types(){
	register_post_type( 'movies', [
		'label'  => null,
		'labels' => [
			'name'               => 'movies', // основное название для типа записи
			'singular_name'      => 'movie', // название для одной записи этого типа
			'add_new'            => 'add new', // для добавления новой записи
			'add_new_item'       => 'add new item', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'edit item', // для редактирования типа записи
			'new_item'           => 'new movie', // текст новой записи
			'view_item'          => 'view movie', // для просмотра записи этого типа.
			'search_items'       => 'search movie', // для поиска по этим типам записи
			'not_found'          => 'not found', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'not found in trash', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'movies', // название меню
		],
		'description'         => '',
		'public'              => true,
		// 'publicly_queryable'  => null, // зависит от public
		// 'exclude_from_search' => null, // зависит от public
		// 'show_ui'             => null, // зависит от public
		// 'show_in_nav_menus'   => null, // зависит от public
		'show_in_menu'        => null, // показывать ли в меню адмнки
		// 'show_in_admin_bar'   => null, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => null,
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );
}
?>