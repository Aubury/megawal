<?php

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}
//add nav menu
add_action( 'after_setup_theme', 'theme_register_nav_menu' );
function theme_register_nav_menu() {
	register_nav_menu( 'primary', 'Главное меню' );
	register_nav_menu( 'footer', 'footer Меню' );
	register_nav_menu( 'footer-product', 'footer-product Меню' );
	register_nav_menu( 'mobile', 'mobile Меню' );
}


/** 
 * Add Carbon Fields 
 */
add_action( 'carbon_fields_register_fields', 'so_register_custom_fields' );
function so_register_custom_fields() {
	require get_template_directory() . '/includes/custom-fields-option/metabox.php';
	require get_template_directory() . '/includes/custom-fields-option/theme-option.php';
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
    Container::make( 'theme_options', __( 'Theme Options' ) )
        ->add_fields( array(
            Field::make( 'text', 'crb_text', 'Text Field' ),
        ) );
}

add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
    require_once( 'includes/custom-fields/vendor/autoload.php' );
    \Carbon_Fields\Carbon_Fields::boot();
}
/**
 * Enqueue theme settings.
 */
require get_template_directory() . '/includes/enqueue-scripts-style.php';

/**
 * theme settings
 */
require get_template_directory() . '/includes/theme-settings.php';

/**
 * widget library
 */
require get_template_directory() . '/includes/widget-areas.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/includes/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/includes/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/includes/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/includes/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/includes/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/includes/woocommerce.php';
	require get_template_directory() . '/woocommerce/includes/wc-functions.php';
	require get_template_directory() . '/woocommerce/includes/wc-functions-remove.php';
}


function blue_title($string){
	preg_match_all('/\S+/', $string, $res);
	
	$length = count($res[0]);
	  $result_string=" ";
	  for($i=0 ; $i<$length ; $i++){
		$result_string .=$res[0][$i] . " ";
	
		if($i == ceil($length/2)-1){
		  $result_string .="<span class='color_blue'>";
		}
	  } 
	  $result_string .="</span>";
	  return   $result_string ;
	};


	