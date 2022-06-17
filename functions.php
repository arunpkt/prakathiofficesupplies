<?php
//Load css
function load_css() {
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false , 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('animate', get_template_directory_uri() . '/css/animate.css', array(), false , 'all');
    wp_enqueue_style('animate');

    wp_register_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), false , 'all');
    wp_enqueue_style('font-awesome');

    wp_register_style('justified-gallery.min', get_template_directory_uri() . '/css/justified-gallery.min.css', array(), false , 'all');
    wp_enqueue_style('justified-gallery.min');

    wp_register_style('magnific-popup', get_template_directory_uri() . '/css/magnific-popup.css', array(), false , 'all');
    wp_enqueue_style('magnific-popup');

    wp_register_style('themify-icons', get_template_directory_uri() . '/css/themify-icons.css', array(), false , 'all');
    wp_enqueue_style('themify-icons');

    wp_register_style('style_main', get_template_directory_uri() . '/css/style_main.css', array(), false , 'all');
    wp_enqueue_style('style_main');

    wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), false , 'all');
    wp_enqueue_style('main');

    wp_register_style('responsive', get_template_directory_uri() . '/css/responsive.css', array(), false , 'all');
    wp_enqueue_style('responsive');
    
    wp_register_style('et-line-icons', get_template_directory_uri() . '/css/et-line-icons.css', array(), false , 'all');
    wp_enqueue_style('et-line-icons');

    wp_register_style('owl_theme', get_template_directory_uri() . '/css/owl.theme.carousal.css', array(), false , 'all');
    wp_enqueue_style('owl_theme');

    wp_register_style('owl_carousal', get_template_directory_uri() . '/css/owl.carousal.min.css', array(), false , 'all');
    wp_enqueue_style('owl_carousal');
    
}
add_action('wp_enqueue_scripts', 'load_css');

//Load js
function load_js() {

    wp_register_script('jquery', get_template_directory_uri() . '/js/jquery.js', array('jquery'), NULL , false);
    wp_enqueue_script('jquery');

    wp_register_script('modernizr', get_template_directory_uri() . '/js/modernizr.js', array('jquery'), NULL , false);
    wp_enqueue_script('modernizr');
    
    wp_register_script('bootstrap.bundle', get_template_directory_uri() . '/js/bootstrap.bundle.js', array('jquery') , NULL , false);
    wp_enqueue_script('bootstrap.bundle');

    wp_register_script('jquery.easing', get_template_directory_uri() . '/js/jquery.easing.1.3.js', array('jquery'), NULL , false);
    wp_enqueue_script('jquery.easing');
    
    wp_register_script('smooth-scroll', get_template_directory_uri() . '/js/smooth-scroll.js', array('jquery') , NULL , false);
    wp_enqueue_script('smooth-scroll');

    wp_register_script('jquery.appear', get_template_directory_uri() . '/js/jquery.appear.js', array('jquery'), NULL , false);
    wp_enqueue_script('jquery.appear');
    
    wp_register_script('jquery.nav', get_template_directory_uri() . '/js/jquery.nav.js', array('jquery') , NULL , false);
    wp_enqueue_script('jquery.nav');

    wp_register_script('wow.min', get_template_directory_uri() . '/js/wow.min.js', array('jquery'), NULL , false);
    wp_enqueue_script('wow.min');
    
    wp_register_script('page-scroll', get_template_directory_uri() . '/js/page-scroll.js', array('jquery') , NULL , false);
    wp_enqueue_script('page-scroll');

    wp_register_script('swiper.min', get_template_directory_uri() . '/js/swiper.min.js', array('jquery') , NULL , false);
    wp_enqueue_script('swiper.min');

    wp_register_script('jquery.count-to', get_template_directory_uri() . '/js/jquery.count-to.js', array('jquery') , NULL , false);
    wp_enqueue_script('jquery.count-to');

    wp_register_script('jquery.stellar', get_template_directory_uri() . '/js/jquery.stellar.js', array('jquery') , NULL , false);
    wp_enqueue_script('jquery.stellar');

    wp_register_script('jquery.magnific-popup.min', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array('jquery') , NULL , false);
    wp_enqueue_script('jquery.magnific-popup.min');

     wp_register_script('common.js', get_template_directory_uri() . '/js/common.js', array('jquery') , NULL , false);
     wp_enqueue_script('common.js');

     wp_register_script('owl_carousal.js', get_template_directory_uri() . '/js/owl.carousal.js', array('jquery') , NULL , false);
     wp_enqueue_script('owl_carousal.js');
}
add_action('wp_enqueue_scripts', 'load_js');


//To load menu options
add_theme_support("menus");
add_theme_support("post-thumbnails");
add_theme_support("widgets");

//Add image dimensions for a post
add_image_size('post-large', 800, 400, true);
add_image_size('post-small', 400, 200, false);


//Add map -- Short code is used to insert the functionality through short code
function add_google_map(){
    ob_start();
    get_template_part( 'includes/section', 'google_map' );
    return ob_get_clean();
}
add_shortcode("google_map",'add_google_map');

//Register nav menu
register_nav_menus(
  array(
    'top-menu' => 'Top Menu',
  )
);
//Declare woo commerce support
function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );