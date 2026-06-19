<?php

add_action( 'wp_enqueue_scripts', 'tie_theme_child_styles_scripts', 80 );
function tie_theme_child_styles_scripts() {

	/* Cairo Arabic Font */
	wp_enqueue_style(
		'bluvia-cairo-font',
		'https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700;800;900&display=swap',
		array(),
		null
	);

	/* Load the RTL.css file of the parent theme */
	if ( is_rtl() ) {
		wp_enqueue_style( 'tie-theme-rtl-css', get_template_directory_uri().'/rtl.css', array('tie-theme-css') );
	}

	/* THIS WILL ALLOW ADDING CUSTOM CSS TO THE style.css */
	wp_enqueue_style( 'tie-theme-child-css', get_stylesheet_directory_uri().'/style.css', array('tie-theme-css') );
}
