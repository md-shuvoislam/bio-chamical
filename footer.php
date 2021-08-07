<section id="contactus">
            <div class="contactus_area">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="contact-image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/contact.png" alt="">
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="contact_form_area">
                                <h2>
                                    Contact Us
                                </h2>
                                <h3>Schedule a Free Consultation</h3>
                                <form action="" method="" enctype="">
                                    <div class="form-group">
                                        <label for="full Name">Full Name</label>
                                        <input type="text" name="full_name" class="">
                                    </div>
                                    <div class="form-group">
                                        <label for="full Name">Full Name</label>
                                        <input type="text" name="full_name" class="">
                                    </div>
                                    <div class="form-group">
                                        <label for="full Name">Full Name</label>
                                        <input type="text" name="full_name" class="">
                                    </div>
                                    <div class="form-group">
                                        <label for="full Name">Full Name</label>
                                        <select name="nearest_location" id="" class=" selectlocation">
                                            <option value="">Nearest Location  </option>
                                            <option value="">California</option>
                                            <option value="">Texas</option>
                                            <option value="">Florida</option>
                                            <option value="">Alaska</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="full Name">Full Name</label>
                                        <input type="text" name="full_name" class="">
                                    </div>
                                    <div class="submit_area d-flex align-items-center">
                                        <form action="">
                                            <input type="checkbox" class="text-green bg-success check">
                                        </form>
                                        <p>By submitting you agree to be communicated via email sms</p>
                                        <button class="btn " type="submit ">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="footer">
            <div class="footer_area ">
                <div class="top_footer_area ">
                    <div class="container brb ">
                        <div class="row">
                            <div class="col-xl-3 ">
                                <div class="footer_top_widget_area float-start">
                                <?php
                                    if(is_active_sidebar("footer-1")){
                                        dynamic_sidebar("footer-1");
                                    }
                                ?>
                                </div>
                            </div>
                            <div class="col-xl-3 ">
                                <div class="footer_top_widget_area ">
                                    <?php
                                        if(is_active_sidebar("footer-2")){
                                            dynamic_sidebar("footer-2");
                                        }
                                    ?>
                                </div>
                            </div>
                            <div class="col-xl-3 ">
                                <div class="footer_top_widget_area service_footer">
                                    <?php
                                        if(is_active_sidebar("footer-3")){
                                            dynamic_sidebar("footer-3");
                                        }
                                    ?>
                                </div>
                            </div>
                            <div class="col-xl-3 ">
                                <div class="footer_top_widget_area footer_supprt">
                                    <?php
                                        if(is_active_sidebar("footer-4")){
                                            dynamic_sidebar("footer-4");
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main_footer ">
                    <div class="container">
                        <div class="row  d-flex align-items-center">
                            <div class="col-xl-3 ">
                                <div class="main_footer_widgets ">
                                    <?php if( function_exists("the_field") ): ?>
                                        <img src="<?php the_field('footer_log', 'option'); ?>" />
                                    <?php endif; ?>          
                                </div>
                            </div>
                            <div class="col-xl-6  ">
                                <div class="main_footer_widgets text-center ">
                                    <?php the_field('footer_copyright', 'option'); ?>
                                </div>
                            </div>
                            <div class="col-xl-3 ">
                                <div class="main_footer_widgets ">
                                <?php
                                    wp_nav_menu(
                                        array(
                                            'theme_location' => 'footermenu',
                                            'menu_id'        => 'footermenucontainer',
                                            'menu_class'     => 'list-inline text-right',
                                        )
                                    );
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php wp_footer(); ?>
</body>
</html>