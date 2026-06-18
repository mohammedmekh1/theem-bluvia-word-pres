<?php

add_action( 'wp_enqueue_scripts', 'tie_theme_child_styles_scripts', 80 );
function tie_theme_child_styles_scripts() {

	/* Load the RTL.css file of the parent theme */
	if ( is_rtl() ) {
		wp_enqueue_style( 'tie-theme-rtl-css', get_template_directory_uri().'/rtl.css', array('tie-theme-css') );
	}

	/* THIS WILL ALLOW ADDING CUSTOM CSS TO THE style.css */
	/* نضيف tie-theme-css كـ dependency لضمان تحميل الأب أولاً */
	wp_enqueue_style( 'tie-theme-child-css', get_stylesheet_directory_uri().'/style.css', array('tie-theme-css') );

	/* تفعيل الـ JavaScript الخاص بالثيم الابن */
	// wp_enqueue_script( 'jannah-child-js', get_stylesheet_directory_uri() .'/js/scripts.js', array('jquery'), '1.0.0', true );
}

/**
 * إضافة دعم الأكواد القصيرة في الويدجت والصفحات
 */
add_filter( 'widget_text', 'do_shortcode' );
add_filter( 'the_content', 'do_shortcode' );
