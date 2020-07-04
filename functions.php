<?php

function custom_theme_assets() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'custom_theme_assets' );

require get_template_directory() . '/inc/helper-functions.php';

require get_template_directory() . '/inc/template-tags.php';