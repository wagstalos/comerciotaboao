<?php 
// require get_template_directory() . '/inc/customizer.php';

function load_scripts(){
	wp_enqueue_style( 'bootstrap-min', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' );
    wp_enqueue_style( 'font', 'https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@200;400;500&display=swap' );
	wp_enqueue_style( 'style', get_template_directory_uri() . '/css/styles.css' );

    wp_register_script( 'jquery-two', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js', array(), '1.11.3', true );
	wp_enqueue_script( 'bootstrap-min', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery-two'), null, true);
	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js',array('jquery-two'), null, true);
	wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/modernizr.js',array('jquery-two'), null, true );
	
    
    //registra o Custom Navigate Walker
    // require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'wp_enqueue_scripts', 'load_scripts' );

//titulo 
if(!function_exists('wp_render_title_tag')){
    function pc_render_title() {
        ?> <title><?php wp_title('|', true, 'right' );?> <?php bloginfo('name'); ?> </title> <?php
    }
    add_action('wp_head', 'pc_render_title');
}

//logo
function themename_custom_logo_setup() {
    $defaults = array(
    'height'      => 80,
    'width'       => 400,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' ),
   'unlink-homepage-logo' => true, 
    );
    add_theme_support( 'custom-logo', $defaults );
   }

add_action( 'after_setup_theme', 'themename_custom_logo_setup' );


function prototipo_config(){
	//menu
	// register_nav_menus(
	// 	array(
	// 		'primary' => 'Primary Menu',
	// 		'footet'  => 'Footer Menu',
	// 		'social'  => 'Social Menu'
	// 	)
	// );

	add_theme_support( 'post-thumbnails');
}

add_action( 'after_setup_theme', 'prototipo_config',0 );


//widgets
add_action( 'widgets_init', 'prototipo_sidebars' );
function prototipo_sidebars(){
	register_sidebar(
		array(
			'name' => 'Home Page Sidebar',
			'id' => 'sidebar-1',
			'description' => 'Sidebar to used',
			'before_widget' => '<div class="widget-wrapper">',
			'after_widger' => '</div>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name' => 'Banner imagem',
			'id' => 'banner-img',
			'description' => 'Sidebar to used',
			'before_widget' => '<div class="widget-wrapper">',
			'after_widger' => '</div>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>',
		)
	);
    
    register_sidebar(
		array(
			'name' => 'Sobre imagem',
			'id' => 'sobre-img',
			'description' => 'Sidebar to used',
			'before_widget' => '<div class="widget-wrapper text-center">',
			'after_widger' => '</div>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name' => 'Patrocinador 1',
			'id' => 'patrocinador1',
			'description' => 'Imagem do patrocinador 1',
			'before_widget' => '<div class="widget-wrapper">',
			'after_widger' => '</div>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name' => 'Patrocinador 2',
			'id' => 'patrocinador2',
			'description' => 'Imagem do patrocinador 1',
			'before_widget' => '<div class="widget-wrapper">',
			'after_widger' => '</div>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name' => 'Patrocinador 3',
			'id' => 'patrocinador3',
			'description' => 'Imagem do patrocinador 1',
			'before_widget' => '<div class="widget-wrapper">',
			'after_widger' => '</div>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>',
		)
	);
}