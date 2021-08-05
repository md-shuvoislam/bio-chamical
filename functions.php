<?php

function biochamical_bootstrapping(){
    load_theme_textdomain("biochamical");
    add_theme_support( "post-thumbnails" );
    add_theme_support( "title-tag" );
    register_nav_menu( "topmenu", __( "Top Menu", "alpha" ) );
    register_nav_menu( "footermenu", __( "Footer Menu", "alpha" ) );
}
add_action( "after_setup_theme", "biochamical_bootstrapping" );