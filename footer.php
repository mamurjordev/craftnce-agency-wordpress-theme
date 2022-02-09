        <?php if(get_theme_mod('craftnce_footer_widget_section_setting', 1)) : ?>
        <div class="footer-widget-wrapper py-5">
            <div class="container">
                <?php
                    if('col_6' === get_theme_mod('craftnce_footer_widget_upper_section_setting')) {
                        get_template_part('/template-parts/footer/six-quarter');
                    } elseif('col_4' === get_theme_mod('craftnce_footer_widget_upper_section_setting')) {
                        get_template_part('/template-parts/footer/quarter');
                    } elseif('col_3' === get_theme_mod('craftnce_footer_widget_upper_section_setting')) {
                        get_template_part('/template-parts/footer/cols-2');
                    }
                ?>

                <div class="row">
                    <div class="col-6 col-xl-4 mt-4">
                        <h6 class="text-light">
                            Our Address
                        </h6>

                        <p class="footer-widget-text">
                            Purple IT Ltd
                            House 452 (4th Floor), Road 31,
                            New DOHS Mohakhali
                            Dhaka - 1206, Bangladesh
                        </p>
                    </div>

                    <div class="col-6 col-xl-4 mt-4">
                        <h6 class="text-light">
                            Subscribe newsletter
                        </h6>
                        <p class="footer-widget-text">
                            Subscribe for new offers and updates.
                        </p>

                        <form action="">
                            <div class="email_sub position-relative">
                                <input type="text" name="email_sub" id="email_sub" class="email_sub_inp bg-dark form-control rounded-0 text-light border-0" placeholder="Enter your email">
                                <button class="btn btn-primary position-absolute top-0 end-0 rounded-0 border-0">
                                    <i class="fas fa-paper-plane"></i>
                                </button>
                            </div>
                        </form>
                    </div>

                    <div class="col-6 col-xl-4 mt-4">
                        <h6 class="text-light">
                            Connect with
                        </h6>
                        <p class="footer-widget-text">
                            To get updates follow us on Facebook, Twitters etc.
                        </p>

                        <ul class="footer-social list-unstyled d-flex gap-2">
                            <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>
        
        <footer class="main-footer py-4">
            <div class="container">
                <div class="copyright-text text-center text-light text-sm">
                    <?php
                        if(get_theme_mod('craftnce_copyright_text_settings')) {
                            echo esc_html( get_theme_mod('craftnce_copyright_text_settings'));
                        } else {
                            echo '@ Craftnce | Developed by <a href="https://mamurjor.com/">Mamurjor</a> | 2021';
                        }
                    ?>
                </div>
            </div>
        </footer>
    </div>

    <?php wp_footer(); ?>
</body>
</html>