<?php

add_action( 'wp_enqueue_scripts', 'tie_theme_child_styles_scripts', 80 );
function tie_theme_child_styles_scripts() {

	/* Load the RTL.css file of the parent theme */
	if ( is_rtl() ) {
		wp_enqueue_style( 'tie-theme-rtl-css', get_template_directory_uri().'/rtl.css', '' );
	}

	/* THIS WILL ALLOW ADDING CUSTOM CSS TO THE style.css */
	wp_enqueue_style( 'tie-theme-child-css', get_stylesheet_directory_uri().'/style.css', '' );
}

/* ═══════════════════════════════════════════════════════
   قائمة بيضاء بملفات بلوفيا المسموح بتضمينها فقط
   ═══════════════════════════════════════════════════════ */
$GLOBALS['bluvia_allowed_files'] = array(
	'bluvia-hero.html',
	'bluvia-testimonials.html',
	'bluvia-whatsapp.html',
	'bluvia-stats.html',
	'bluvia-why-us.html',
	'bluvia-booking.html',
	'bluvia-packages.html',
	'bluvia-faq.html',
	'bluvia-trust.html',
	'bluvia-gallery.html',
	'bluvia-global.html',
	'bluvia-countdown.html',
	'bluvia-map.html',
	'bluvia-topbar.html',
	'bluvia-exit-intent.html',
	'bluvia-destination.html',
	'bluvia-share.html',
);

/* ═══════════════════════════════════════════════════════
   دالة مساعدة آمنة — تتحقق من القائمة البيضاء أولاً
   ═══════════════════════════════════════════════════════ */
function bluvia_load_file( $filename ) {
	if ( ! in_array( $filename, $GLOBALS['bluvia_allowed_files'], true ) ) {
		return '';
	}
	$base = get_stylesheet_directory();
	$file = realpath( $base . '/' . basename( $filename ) );
	if ( $file === false || strpos( $file, realpath( $base ) ) !== 0 ) {
		return '';
	}
	ob_start();
	include $file;
	return ob_get_clean();
}

/* [bluvia_hero]        — هيرو سلايدر */
add_shortcode( 'bluvia_hero',        function(){ return bluvia_load_file('bluvia-hero.html'); } );

/* [bluvia_testimonials] — شهادات العملاء */
add_shortcode( 'bluvia_testimonials', function(){ return bluvia_load_file('bluvia-testimonials.html'); } );

/* [bluvia_whatsapp]   — زر واتساب عائم + العودة للأعلى */
add_shortcode( 'bluvia_whatsapp',    function(){ return bluvia_load_file('bluvia-whatsapp.html'); } );

/* [bluvia_stats]      — عداد أرقام متحرك */
add_shortcode( 'bluvia_stats',       function(){ return bluvia_load_file('bluvia-stats.html'); } );

/* [bluvia_why_us]     — لماذا تختار بلوفيا؟ */
add_shortcode( 'bluvia_why_us',      function(){ return bluvia_load_file('bluvia-why-us.html'); } );

/* [bluvia_booking]    — نموذج حجز بـ 3 خطوات */
add_shortcode( 'bluvia_booking',     function(){ return bluvia_load_file('bluvia-booking.html'); } );

/* [bluvia_packages]   — باقات سياحية */
add_shortcode( 'bluvia_packages',    function(){ return bluvia_load_file('bluvia-packages.html'); } );

/* [bluvia_faq]        — أسئلة شائعة accordion */
add_shortcode( 'bluvia_faq',         function(){ return bluvia_load_file('bluvia-faq.html'); } );

/* [bluvia_trust]      — شارات ثقة + شريط شركاء */
add_shortcode( 'bluvia_trust',       function(){ return bluvia_load_file('bluvia-trust.html'); } );

/* [bluvia_gallery]    — معرض صور Masonry */
add_shortcode( 'bluvia_gallery',     function(){ return bluvia_load_file('bluvia-gallery.html'); } );

/* [bluvia_global]     — Cairo + cursor + scroll reveal + progress bar */
add_shortcode( 'bluvia_global',      function(){ return bluvia_load_file('bluvia-global.html'); } );

/* [bluvia_countdown]  — شريط عداد تنازلي للعروض */
add_shortcode( 'bluvia_countdown',   function(){ return bluvia_load_file('bluvia-countdown.html'); } );

/* [bluvia_map]        — خريطة وجهات تفاعلية */
add_shortcode( 'bluvia_map',         function(){ return bluvia_load_file('bluvia-map.html'); } );

/* [bluvia_topbar]     — شريط إشعار علوي ثابت */
add_shortcode( 'bluvia_topbar',      function(){ return bluvia_load_file('bluvia-topbar.html'); } );

/* [bluvia_exit_intent] — نافذة نية الخروج */
add_shortcode( 'bluvia_exit_intent', function(){ return bluvia_load_file('bluvia-exit-intent.html'); } );

/* [bluvia_destination] — صفحة وجهة مخصصة */
add_shortcode( 'bluvia_destination', function(){ return bluvia_load_file('bluvia-destination.html'); } );

/* [bluvia_share]      — أزرار مشاركة عائمة */
add_shortcode( 'bluvia_share',       function(){ return bluvia_load_file('bluvia-share.html'); } );
