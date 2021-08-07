<section id="contactus">
            <div class="contactus_area">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="contact-image">
                                <?php if( function_exists("the_field") ): ?>
                                    <img src="<?php the_field('footer_top_image', 'option'); ?>" />
                                <?php endif; ?>                               
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="contact_form_area">
                                <h2>
                                    Contact Us
                                </h2>
                                <h3>Schedule a Free Consultation</h3>
                                <?php echo do_shortcode('[wpforms id="51"]'); ?>
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