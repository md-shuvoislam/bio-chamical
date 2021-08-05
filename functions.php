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