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
                            <a href="#">CALL  <span>(802) 370-3227</span> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- hero section start here  -->
    <main>
        <!-- site contact us form -->
        <section id="hero">
            <div class="hero_area">
                <div class="container">
                    <div class="row d-flex align-items-center ">
                        <div class="col-xl-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="hero_sec_text_area text-white">
                                <h2>Welcome To National Steam Cell Centers</h2>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae voluptatem autem consectetur
                                </p>
                                <a href="#" class="find_doctor_btn text-white">
                                    <i class="fas fa-play text-white"></i> Find Doctor
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="hero_contact_area">
                <div class="hero_contact_form">
                    <h2>Contact Us</h2>
                    <p>Our team will get back to you</p>
                    <form action="" class="hero_area_contact_form" method="" enctype="">
                        <input type="text" name="name" placeholder="Full Name" class="form-control">
                        <input type="email" name="email" placeholder="Your Email" class="form-control">
                        <input type="text" name="phone-number" placeholder="Your Mobile Number" class="form-control">
                        <select name="nearest_location" id="" class="nearest_location_select">
                            <option value="">Nearest Location  </option>
                            <option value="">California</option>
                            <option value="">Texas</option>
                            <option value="">Florida</option>
                            <option value="">Alaska</option>
                        </select>
                        <input type="text" name="msg" placeholder="How can we help you?" class="form-control">
                        <div class="hero_area_contact_submit_btn">
                            <button class="custom_btn btn" type="submit">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>


        </section>