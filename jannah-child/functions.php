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

/* ═══════════════════════════════════════════════════════
   شورت كود شهادات العملاء
   الاستخدام: [bluvia_testimonials]
   ═══════════════════════════════════════════════════════ */
function bluvia_testimonials_shortcode() {
	ob_start();
	$file = get_stylesheet_directory() . '/bluvia-testimonials.html';
	if ( file_exists( $file ) ) {
		include $file;
	}
	return ob_get_clean();
}
add_shortcode( 'bluvia_testimonials', 'bluvia_testimonials_shortcode' );

/* ═══════════════════════════════════════════════════════
   دالة مساعدة لتوليد شورت كودات الملفات
   ═══════════════════════════════════════════════════════ */
function bluvia_load_file( $filename ) {
	ob_start();
	$file = get_stylesheet_directory() . '/' . $filename;
	if ( file_exists( $file ) ) {
		include $file;
	}
	return ob_get_clean();
}

/* [bluvia_whatsapp]  — زر واتساب عائم + العودة للأعلى */
add_shortcode( 'bluvia_whatsapp', function(){ return bluvia_load_file('bluvia-whatsapp.html'); } );

/* [bluvia_stats]     — عداد أرقام متحرك */
add_shortcode( 'bluvia_stats', function(){ return bluvia_load_file('bluvia-stats.html'); } );

/* [bluvia_why_us]    — لماذا تختار بلوفيا؟ */
add_shortcode( 'bluvia_why_us', function(){ return bluvia_load_file('bluvia-why-us.html'); } );

/* [bluvia_booking]   — نموذج حجز بـ 3 خطوات */
add_shortcode( 'bluvia_booking', function(){ return bluvia_load_file('bluvia-booking.html'); } );

/* [bluvia_packages]  — باقات سياحية (اقتصادي/مميز/VIP) */
add_shortcode( 'bluvia_packages', function(){ return bluvia_load_file('bluvia-packages.html'); } );

/* [bluvia_faq]       — أسئلة شائعة accordion */
add_shortcode( 'bluvia_faq', function(){ return bluvia_load_file('bluvia-faq.html'); } );

/* [bluvia_trust]     — شارات ثقة + شريط شركاء */
add_shortcode( 'bluvia_trust', function(){ return bluvia_load_file('bluvia-trust.html'); } );

/* [bluvia_gallery]   — معرض صور Masonry */
add_shortcode( 'bluvia_gallery', function(){ return bluvia_load_file('bluvia-gallery.html'); } );

/* [bluvia_global]    — خط Cairo + cursor + scroll reveal + progress bar
   ضعه مرة واحدة فقط في أول الصفحة الرئيسية */
add_shortcode( 'bluvia_global', function(){ return bluvia_load_file('bluvia-global.html'); } );

/* [bluvia_countdown]   — شريط عداد تنازلي للعروض */
add_shortcode( 'bluvia_countdown', function(){ return bluvia_load_file('bluvia-countdown.html'); } );

/* [bluvia_map]         — خريطة وجهات تفاعلية (تركيا + تونس) */
add_shortcode( 'bluvia_map', function(){ return bluvia_load_file('bluvia-map.html'); } );

/* [bluvia_topbar]      — شريط إشعار علوي ثابت */
add_shortcode( 'bluvia_topbar', function(){ return bluvia_load_file('bluvia-topbar.html'); } );

/* [bluvia_exit_intent] — نافذة نية الخروج */
add_shortcode( 'bluvia_exit_intent', function(){ return bluvia_load_file('bluvia-exit-intent.html'); } );

/* [bluvia_destination] — صفحة وجهة مخصصة (يقرأ ?dest=xxx من URL) */
add_shortcode( 'bluvia_destination', function(){ return bluvia_load_file('bluvia-destination.html'); } );

/* [bluvia_share]       — أزرار مشاركة عائمة (واتساب + تويتر + فيسبوك) */
add_shortcode( 'bluvia_share', function(){ return bluvia_load_file('bluvia-share.html'); } );
