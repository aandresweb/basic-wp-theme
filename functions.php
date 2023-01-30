<?php 


function register_assets() {
    wp_enqueue_script("jquery");
    wp_enqueue_script('app', get_template_directory_uri() . '/assets/js/app.js', ['jquery'], '', true);
    wp_enqueue_style('app', get_template_directory_uri() . '/assets/css/app.css');
    
    // Box icons
    wp_enqueue_style('boxicons', 'https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css');

    // AOS
    wp_enqueue_style('aos', 'https://unpkg.com/aos@next/dist/aos.css');
    wp_enqueue_script('aos', 'https://unpkg.com/aos@next/dist/aos.js', ['jquery'], '', true);    

    // Swiper
    wp_enqueue_script('swiper', 'https://unpkg.com/swiper@8/swiper-bundle.min.js');
    wp_enqueue_style('swiper', 'https://unpkg.com/swiper@8/swiper-bundle.min.css');
}


add_action( 'wp_enqueue_scripts', 'register_assets' );


require_once("inc/blocks.php");
require_once("inc/helpers.php");


add_action("acf/init", "custom_options_pages");

function custom_options_pages() {
	if(function_exists("acf_add_options_page"))	{
		$option_page = acf_add_options_page([
			"page_title" => __("Page Options"),
			"menu_title" => __("Page Options"),
			"menu_slug" => "page-options",
			"capability" => "edit_posts",
			"redirect" => false,
			"icon_url" => "dashboard",
		]);
	}
}

add_action("init", "init_function");

function init_function() {
	add_theme_support( "post-thumbnails" );
}

function mytheme_register_nav_menus() {
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'chavarri' ),
        'footer' => __( 'Footer Menu', 'chavarri' )
    )); 
}

add_action( 'after_setup_theme', 'mytheme_register_nav_menus' );
