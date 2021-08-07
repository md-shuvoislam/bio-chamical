<?php
/*
 * Template Name: Home Page Template
 */
get_header();
?>

<!-- hero section start here  -->
<main>
        <!-- site contact us form -->
        <section id="hero">
            <div class="hero_area">
                <div class="container">
                    <div class="row d-flex align-items-center ">
                        <div class="col-xl-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="hero_sec_text_area text-white">
                                <?php the_field('hero_area_text'); ?>
                                <a href="<?php the_field('hero_area_button_link'); ?>" class="find_doctor_btn text-white">
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
                    <?php echo do_shortcode('[wpforms id="51"]'); ?>
                </div>
            </div>

        </section>

       <!-- service section -->
       <section id="services">
            <div class="service_area">
                <div class="service_area_title_des">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 offset-3">
                                <div class="service_area_title">
                                    <h2>
                                        Our Services
                                    </h2>
                                </div>
                                <div class="service_area_description">
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus beatae sapiente inventore! amet consectetur
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <?php echo do_shortcode('[services]');?>

            </div>
        </section>
        <section id="portfolio">
            <div class="portfolio-area">
                <div class="portfolio_title_area">
                    <div class="container">
                        <div class="row d-flex align-items-center">
                            <div class="col-xl-6 offset-3">
                                <div class="portfolio_title">
                                    <h2>
                                        Why National?
                                    </h2>
                                </div>
                                <div class="portfolio_description">
                                    <p>
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit reprehenderit fuga aperiam
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="portfolio_box">
                    <div class="portfolio_singe_box">
                        <div class="container">
                            <div class="row  d-flex align-items-center">
                                <div class="col-xl-6">
                                    <div class="portfolio_img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/port1.png" alt="">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="portfolio_text_area">
                                        <h2>01.</h2>
                                        <h3>We're initiating the application of IADs & IRBs as requireed by the FDA.</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta vero, praesentium eius veniam harum repellat consequatur deleniti delectus officia optio quaerat vitae fugit saepe hic, accusantium cum sint autem cupiditate distinctio quasi.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="portfolio_box_navigator">
                    <div class="container">
                        <div class="row d-flex align-items-center bm1px">
                            <div class="navigator_box navigator_active">
                                <h2>01.</h2>
                                <p>
                                    Lorem ipsum dolor sit, amet consect
                                </p>
                            </div>
                            <div class="navigator_box">
                                <h2>02.</h2>
                                <p>
                                    Lorem ipsum dolor sit, amet consect
                                </p>
                            </div>
                            <div class="navigator_box">
                                <h2>03.</h2>
                                <p>
                                    Lorem ipsum dolor sit, amet consect
                                </p>
                            </div>
                            <div class="navigator_box">
                                <h2>04.</h2>
                                <p>
                                    Lorem ipsum dolor sit, amet consect
                                </p>
                            </div>
                            <div class="navigator_box">
                                <h2>05.</h2>
                                <p>
                                    Lorem ipsum dolor sit, amet consect
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="ourdoctors">
            <div class="our_doctor_area">
                <div class="our_doctor_des_area">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 offset-3">
                                <div class="our_doctors_des">
                                    <div class="our_doc_title">
                                        <h2>
                                            Our Doctors
                                        </h2>
                                        <div class="our_doc_detail">
                                            <p>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit adipisicing elit adipisicing elit
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php echo do_shortcode('[doctor]');?>

            </div>
        </section>

        <?php echo do_shortcode('[brand]');?>


<?php get_footer(); ?>
