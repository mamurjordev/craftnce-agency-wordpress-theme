<!-- Newsletter -->
<section class="newsletter-bg">
    <div class="newsletter-overlay py-50">
        <div class="container text-center py-5">
            <h2 class="text-uppercase text-light fw-bolder text-xl mt-3 font-inter">
                <?php
                    echo esc_html( get_theme_mod('craftnce_home_newsletter_heading_setting', 'SignUp Our Newsletter') );
                ?>
            </h2>
            <p class="text-light">
                <?php
                    echo esc_html( get_theme_mod('craftnce_home_newsletter_subtext_setting', 'Get in touch by subscribing here with your') );
                ?>
            </p>

            <div class="mail-subscription-form">
                <?php
                    echo do_shortcode(get_theme_mod('craftnce_home_newsletter_form_shortcode_setting'));
                ?>
            </div>
        </div>
    </div>
</section>