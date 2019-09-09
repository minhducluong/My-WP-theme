<?php

// Register và enqueue các file CSS, JS

function bootstrapstarter_enqueue_styles() {
	wp_register_style('bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css' );
	$dependencies = array('bootstrap');
	wp_enqueue_style( 'bootstrapstarter-style', get_stylesheet_uri(), $dependencies ); 
}

function bootstrapstarter_enqueue_scripts() {
	$dependencies = array('jquery');
	wp_enqueue_script('bootstrap', get_template_directory_uri().'/bootstrap/js/bootstrap.min.js', $dependencies, '4.3.1', true );
}

add_action( 'wp_enqueue_scripts', 'bootstrapstarter_enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'bootstrapstarter_enqueue_scripts' );



// Add Page's title to HTML

function bootstrapstarter_wp_setup() {

	// Add Page's title to HTML
	add_theme_support( 'title-tag' );

	//Allow user change background
	$default_background = array('default-color' => '#e8e8e8' );
	add_theme_support( 'custom-background', $default_background );
}

add_action( 'after_setup_theme', 'bootstrapstarter_wp_setup' );


// Làm menu 
function bootstrapstarter_register_menu() {
	register_nav_menu('header-menu', __( 'Header Menu' ));
}
add_action( 'init', 'bootstrapstarter_register_menu' );



// Làm widget tên là Footer - Copyright Text
function bootstrapstarter_widgets_init() {

	register_sidebar( array(
		'name'          => 'Footer - Copyright Text',
		'id'            => 'footer_copyright_text',
		'before_widget' => '<div class="footer_copyright_text">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => 'Sidebar - Inset',
		'id'            => 'sidebar-1',
		'before_widget' => '<div class="sidebar-module sidebar-module-inset">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => 'Sidebar - Default',
		'id'            => 'sidebar-2',
		'before_widget' => '<div class="sidebar-module">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	) );

}
add_action( 'widgets_init', 'bootstrapstarter_widgets_init' );
 


?>