<?php
if (! defined( 'ABSPATH')){
    exit;
}

function so_scripts() {

    wp_enqueue_script( 'so-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'so_scripts' );

function so_style() {
	wp_enqueue_style( 'so-style', get_stylesheet_uri(), array('so-main-page'), _S_VERSION );
	wp_style_add_data( 'so-style', 'rtl', 'replace' );

	}
add_action( 'wp_enqueue_scripts', 'so_style' );

// add page styles

function so_style_pages() {

	wp_enqueue_script( 'jqur', 'https://code.jquery.com/jquery-3.6.0.js', array('jquery'), null, true );
	wp_enqueue_style( 'so-reset', get_template_directory_uri() . '/assets/css/reset.css', array(), null, 'all' );
	wp_enqueue_style( 'so-font', get_template_directory_uri() . '/assets/css/font/font.css', array(), null, 'all' );
	wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/assets/js/bootstrap.min.js');
	wp_enqueue_style('bootstrap-css', get_template_directory_uri().'/assets/css/bootstrap.min.css');
	wp_enqueue_style('font-awesome', get_template_directory_uri().'/assets/css/fontawesome/css/all.css');
	wp_enqueue_style('mobile-menu', get_template_directory_uri().'/assets/css/mobile-menu.css');
	wp_enqueue_script('mobile-menu-js', get_template_directory_uri().'/assets/js/mobile-menu.js');
    wp_enqueue_style( 'so-main-page', get_template_directory_uri() . '/assets/css/main.css', array(), null, 'all' );
    wp_enqueue_style( 'so-projects_style', get_template_directory_uri() . '/assets/css/projects_style.css', array(), null, 'all' );

    wp_enqueue_script( 'owl', get_stylesheet_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), null, true );
	wp_enqueue_style("owl_carousel_min",get_bloginfo('stylesheet_directory')."/assets/css/owl.carousel.min.css");
	wp_enqueue_style("owl_theme_default_min",get_bloginfo('stylesheet_directory')."/assets/css/owl.theme.default.min.css");
    wp_enqueue_script( 'so-slider', get_stylesheet_directory_uri() . '/assets/js/slider.js', array('jquery'), null, true );
    wp_enqueue_script( 'themename', get_stylesheet_directory_uri() . '/assets/js/app.js', array('jquery'), null, true );
}
	add_action( 'wp_enqueue_scripts', 'so_style_pages' );
