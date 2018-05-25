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
		'qualitypro' => __( 'Main menu', 'qualitypro' ),
	);
	register_nav_menus( $locations );

}
add_action( 'init', 'qualitypro_navigation_menus' );


// Register Style
function qualitypro_styles() {

	wp_register_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Montserrat:400,600,700,900|Open+Sans:300,400,70', false, null );
	wp_enqueue_style( 'google-fonts' );

	wp_register_style( 'fontawesome', 'https://use.fontawesome.com/releases/v5.0.13/css/all.css', false, '5.0.13' );
	wp_enqueue_style( 'fontawesome' );

	wp_register_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css', false, '4.1.1' );
	wp_enqueue_style( 'bootstrap' );

	wp_register_style( 'owl-carousel', get_template_directory_uri() .'/assets/css/owl.carousel.min.css', null, '2.2.1' );
	wp_enqueue_style( 'owl-carousel' );

	wp_register_style( 'owl-carousel-theme', get_template_directory_uri() .'/assets/css/owl.theme.default.min.css', null, '2.2.1' );
	wp_enqueue_style( 'owl-carousel-theme' );

	wp_register_style( 'fancybox', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css', null, '3.3.5' );
	wp_enqueue_style( 'fancybox' );

	wp_register_style( 'qualitypro', get_template_directory_uri() .'/assets/css/qualitypro.css', array( 'bootstrap' ), uniqid() );
	wp_enqueue_style( 'qualitypro' );

	wp_register_style( 'animatecss', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css', null, '3.5.2' );
	wp_enqueue_style( 'animatecss' );

}
add_action( 'wp_enqueue_scripts', 'qualitypro_styles' );

// Register Script
function qualitypro_scripts() {

	wp_register_script( 'popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array( 'jquery' ), '1.14.3', true );
	wp_enqueue_script( 'popper' );

	wp_register_script( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js', array( 'popper' ), '4.1.1', true );
	wp_enqueue_script( 'bootstrap' );

	wp_register_script( 'owl-carousel', get_template_directory_uri() .'/assets/js/owl.carousel.min.js', array( 'jquery' ), '2.2.1', true );
	wp_enqueue_script( 'owl-carousel' );

	wp_register_script( 'fancybox', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js', array( 'jquery' ), '3.3.5', true );
	wp_enqueue_script( 'fancybox' );

	wp_register_script( 'qualitypro', get_template_directory_uri() .'/assets/js/qualitypro.js', array( 'jquery' ), uniqid(), true );
	wp_enqueue_script( 'qualitypro' );


}
add_action( 'wp_enqueue_scripts', 'qualitypro_scripts' );

// Custom Post Types
require_once get_stylesheet_directory() . '/inc/posttypes.php';

// Register Custom Navigation Walker
require_once get_stylesheet_directory() . '/inc/class-wp-bootstrap-navwalker.php';


// Gravity Forms Submit Button Add CSS Class
add_filter( 'gform_submit_button', 'form_submit_button', 10, 2 );
function form_submit_button($button, $form) {
  return '<input type="submit" class="btn btn-primary" id="gform_submit_button_' . $form['id'] . '" value="' . $form['button']['text'] . '">';
}
