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
                <div class="services_area_main">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="service_single_box">
                                    <div class="service_box_img_area">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service1.png" alt="">
                                    </div>
                                    <div class="service_box_text-area">
                                        <h3>Pain / Orthopedic</h3>
                                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus, ratione enim?distinctio dolorem voluptatum similique assumenda?</p>
                                        <div class="service_learn_more">
                                            <a href="#" class="">Learn more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="service_single_box">
                                    <div class="service_box_img_area">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service2.png" alt="">
                                    </div>
                                    <div class="service_box_text-area">
                                        <h3>Pain / Orthopedic</h3>
                                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus, ratione enim?distinctio dolorem voluptatum similique assumenda?</p>
                                        <div class="service_learn_more">
                                            <a href="#" class="">Learn more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="service_single_box">
                                    <div class="service_box_img_area">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service3.png" alt="">
                                    </div>
                                    <div class="service_box_text-area">
                                        <h3>Pain / Orthopedic</h3>
                                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus, ratione enim?distinctio dolorem voluptatum similique assumenda?</p>
                                        <div class="service_learn_more">
                                            <a href="#" class="">Learn more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="service_single_box">
                                    <div class="service_box_img_area">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service4.png" alt="">
                                    </div>
                                    <div class="service_box_text-area">
                                        <h3>Pain / Orthopedic</h3>
                                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus, ratione enim?distinctio dolorem voluptatum similique assumenda?</p>
                                        <div class="service_learn_more">
                                            <a href="#" class="">Learn more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                <div class="our_doctor_box ">
                    <div class="our_doc_carousel">
                        <div class="container">
                            <div class="row d-flex align-items-center">
                                <div class="doc_slide">
                                    <div class="doc-box">
                                        <div class="img-area">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dr1.png" alt="">
                                        </div>
                                        <div class="doc_text_area">
                                            <h2>DR.DOSHI</h2>
                                            <P>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur quaerat id nostrum veritatis, reprehenderit corporis?
                                            </P>
                                            <a href="#" class="doc_details text-green">View Full Details</a>
                                        </div>
                                    </div>

                                    <div class="doc-box">
                                        <div class="img-area">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dr1.png" alt="">
                                        </div>
                                        <div class="doc_text_area">
                                            <h2>DR.DOSHI</h2>
                                            <P>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur quaerat id nostrum veritatis, reprehenderit corporis?
                                            </P>
                                            <a href="#" class="doc_details text-green">View Full Details</a>
                                        </div>
                                    </div>


                                    <div class="doc-box">
                                        <div class="img-area">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dr1.png" alt="">
                                        </div>
                                        <div class="doc_text_area">
                                            <h2>DR.DOSHI</h2>
                                            <P>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur quaerat id nostrum veritatis, reprehenderit corporis?
                                            </P>
                                            <a href="#" class="doc_details text-green">View Full Details</a>
                                        </div>
                                    </div>


                                    <div class="doc-box">
                                        <div class="img-area">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dr1.png" alt="">
                                        </div>
                                        <div class="doc_text_area">
                                            <h2>DR.DOSHI</h2>
                                            <P>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur quaerat id nostrum veritatis, reprehenderit corporis?
                                            </P>
                                            <a href="#" class="doc_details text-green">View Full Details</a>
                                        </div>
                                    </div>

                                    <div class="doc-box">
                                        <div class="img-area">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dr1.png" alt="">
                                        </div>
                                        <div class="doc_text_area">
                                            <h2>DR.DOSHI</h2>
                                            <P>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur quaerat id nostrum veritatis, reprehenderit corporis?
                                            </P>
                                            <a href="#" class="doc_details text-green">View Full Details</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="brand">
            <div class="brand_area">
                <div class="container">
                    <div class="row">
                        <div class="brand_carousel">
                            <div class="brand-slide">

                                <div class="brand_slide_img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="">
                                </div>
                                <div class="brand_slide_img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="">
                                </div>
                                <div class="brand_slide_img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="">
                                </div>
                                <div class="brand_slide_img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="">
                                </div>
                                <div class="brand_slide_img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


<?php get_footer(); ?>
