<?php

add_action( 'wp_enqueue_scripts', 'tie_theme_child_styles_scripts', 80 );
function tie_theme_child_styles_scripts() {

	/* Load the RTL.css file of the parent theme */
	if ( is_rtl() ) {
		wp_enqueue_style( 'tie-theme-rtl-css', get_template_directory_uri().'/rtl.css', '' );
	}

	/* THIS WILL ALLOW ADDING CUSTOM CSS TO THE style.css */
	wp_enqueue_style( 'tie-theme-child-css', get_stylesheet_directory_uri().'/style.css', '' );

	/* Uncomment this line if you want to add custom javascript */
	//wp_enqueue_script( 'jannah-child-js', get_stylesheet_directory_uri() .'/js/scripts.js', '', false, true );
}

/* ═══════════════════════════════════════════════════════
   شورت كود بلوفيا هيرو
   الاستخدام: [bluvia_hero]
   ═══════════════════════════════════════════════════════ */
function bluvia_hero_shortcode() {
	ob_start();
	$file = get_stylesheet_directory() . '/bluvia-hero.html';
	if ( file_exists( $file ) ) {
		include $file;
	}
	return ob_get_clean();
}
add_shortcode( 'bluvia_hero', 'bluvia_hero_shortcode' );
