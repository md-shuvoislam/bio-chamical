<?php

if ( site_url() == "http://localhost/bio-chamical" ) {
    define( "VERSION", time() );
} else {
    define( "VERSION", wp_get_theme()->get( "Version" ) );
}

// theme bootstrapping

function biochamical_bootstrapping(){
    load_theme_textdomain("biochamical");
    add_theme_support( "post-thumbnails" );
    add_theme_support( "title-tag" );
    register_nav_menu( "topmenu", __( "Top Menu", "biochamical" ) );
    register_nav_menu( "footermenu", __( "Footer Menu", "biochamical" ) );

    $biochamical_custom_logo_defaults = array(
        "width"  => '235',
        "height" => '70',
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array( 'site-title', 'site-description' ),
        'unlink-homepage-logo' => true, 
    );
    add_theme_support( "custom-logo", $biochamical_custom_logo_defaults );

}
add_action( "after_setup_theme", "biochamical_bootstrapping" );

// theme assets

function biochamical_assets() {
    wp_enqueue_style( "bootstrap-css", get_theme_file_uri( "/assets/css/bootstrap.min.css" ), null, "1.0" );
    wp_enqueue_style( "animate-css", get_theme_file_uri( "/assets/css/animate.min.css" ), null, "1.0" );
    wp_enqueue_style( "fontawesome-css", get_theme_file_uri( "/assets/css/fontawesome-all.min.css" ), null, "1.0" );
    wp_enqueue_style( "normalize-css", get_theme_file_uri( "/assets/css/normalize.css" ), null, "1.0" );
    wp_enqueue_style( "carousel-css", get_theme_file_uri( "/assets/css/owl.carousel.css" ), null, "1.0" );
    wp_enqueue_style( "main-css", get_theme_file_uri( "/assets/css/main.css" ), null, "1.0" );
    wp_enqueue_style( "biochamical-css", get_stylesheet_uri(), null, VERSION );


    wp_enqueue_script( "popper-js", get_theme_file_uri( "/assets/js/popper.js" ), null, "1.0" );
    wp_enqueue_script( "bootstrap-js", get_theme_file_uri( "/assets/js/bootstrap.min.js" ), null, "1.0" );
    wp_enqueue_script( "carousel-js", get_theme_file_uri( "/assets/js/owl.carousel.min.js" ), array( "jquery" ), "1.0", true );
    wp_enqueue_script( "main-js", get_theme_file_uri( "/assets/js/main.js" ), array( "jquery" ), "1.0", true );
}

add_action( "wp_enqueue_scripts", "biochamical_assets" );

// theme sidebar widgets

function biochamical_sidebar() {
    register_sidebar(
        array(
            'name'          => __( 'Footer One', 'biochamical' ),
            'id'            => 'footer-1',
            'description'   => __( 'Footer One Widget', 'biochamical' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>'
        )
    );

    register_sidebar(
        array(
            'name'          => __( 'Footer Two', 'biochamical' ),
            'id'            => 'footer-2',
            'description'   => __( "Footer Two Widget", 'biochamical' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>'
        )
    );

    register_sidebar(
        array(
            'name'          => __( 'Footer Three', 'biochamical' ),
            'id'            => 'footer-3',
            'description'   => __( "Footer Three Widget", 'biochamical' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>'
        )
    );
    
    register_sidebar(
        array(
            'name'          => __( 'Footer Four', 'biochamical' ),
            'id'            => 'footer-4',
            'description'   => __( "Footer Four Widget", 'biochamical' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>'
        )
    );

}

add_action( "widgets_init", "biochamical_sidebar" );

/**
 * TGM Activation
 */
require dirname( __FILE__ ) . '/inc/tgm/tgm-init.php';


// theme options

if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page();

    acf_add_options_page(array(
        'page_title'    => 'Theme Options',
        'menu_title'    => 'Theme Options',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
    
}
