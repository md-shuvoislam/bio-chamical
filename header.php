<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta name="author" content="Shuvo Islam">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php wp_head(); ?>
</head>

<body <?php body_class() ?>>
    <!-- scroll to top -->
    <a href="#0" class="scrollToTop"><i class="fa fa-angle-up"></i></a>

    <!-- code start from here  -->

    <!-- header area  -->
    <header class="header" id="header">
        <div class="top_header_area">
            <div class="container-fluid">
                <div class="row d-flex align-items-center">
                    <div class="col-xl-3">
                        <?php
                            if ( current_theme_supports( "custom-logo" ) ):
                                ?>
                                <div class="logo">
                                    <?php the_custom_logo(); ?>
                                </div>
                            <?php
                            endif;
                            ?>
                    </div>
                    <div class="col-xl-6">
                        <!-- nav area 	 -->
                        <nav class="nav">
                            <div class="main_menu">
                                <?php
                                    wp_nav_menu(
                                        array(
                                            'theme_location' => 'topmenu',
                                            'menu_id'        => 'topmenucontainer',
                                            'menu_class'     => 'list-inline text-center',
                                        )
                                    );
                                ?>
                            </div>
                        </nav>
                    </div>
                    <div class="col-xl-3">
                        <div class="call_area text-end">
                            <?php the_field('phone_number', 'option'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>