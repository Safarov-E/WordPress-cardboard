<?php
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
function theme_name_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap-grid.min.css');
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css');
	wp_enqueue_style( 'style1', get_template_directory_uri() . '/css/style.css');
	wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css');
}
add_action( 'wp_enqueue_scripts', 'theme_scripts', 11 );
function theme_scripts() {
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', '/js/jquery-3.4.1.min.js');
    wp_enqueue_script( 'jquery' ); 
    wp_enqueue_script( 'js', get_template_directory_uri() . '/js/jquery.js', array('jquery'), null, true);
	wp_enqueue_script( 'wow', get_template_directory_uri() . '/js/wow.min.js', array('jquery'), null, true);
}  