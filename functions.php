<?php
// Set content width value based on the theme's design
if ( ! isset( $content_width ) )
	$content_width = 1170;

show_admin_bar( false);

// Register Theme Features
function qualitypro_theme_features()  {

	// Add theme support for Featured Images
	add_theme_support( 'post-thumbnails' );

	// Add theme support for document Title tag
	add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'qualitypro_theme_features' );



// Register Navigation Menus
function qualitypro_navigation_menus() {

	$locations = array(
		'Quality Pro' => __( 'Main menu', 'qualitypro' ),
	);
	register_nav_menus( $locations );

}
add_action( 'init', 'qualitypro_navigation_menus' );


// Register Style
function qualitypro_styles() {

	wp_register_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css', false, '4.1.1' );
	wp_enqueue_style( 'bootstrap' );

	wp_register_style( 'qualitypro', get_template_directory_uri() .'/assets/css/qualitypro.css', array( 'bootstrap' ), uniqid() );
	wp_enqueue_style( 'qualitypro' );

}
add_action( 'wp_enqueue_scripts', 'qualitypro_styles' );

// Register Script
function qualitypro_scripts() {

	wp_register_script( 'popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array( 'jquery' ), '1.14.3', true );
	wp_enqueue_script( 'popper' );

	wp_register_script( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js', array( 'popper' ), '4.1.1', true );
	wp_enqueue_script( 'bootstrap' );

}
add_action( 'wp_enqueue_scripts', 'qualitypro_scripts' );
