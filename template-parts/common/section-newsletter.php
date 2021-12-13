<!-- Newsletter -->
<section class="news-letter">
    <div class="newsletter-overlay py-50">
        <div class="container text-center py-5">
            <h2 class="text-uppercase text-light fw-bolder text-xl mt-3">
                <?php
                    echo esc_html( get_theme_mod('craftnce_home_newsletter_heading_setting') );
                ?>
            </h2>
            <p class="text-light">
                <?php
                    echo esc_html( get_theme_mod('craftnce_home_newsletter_subtext_setting') );
                ?>
            </p>
            
            <form action="" method="">
                <div class="row">
                    <div class="container">
                        <div class="col-md-7 col-lg-5 mx-auto position-relative">
                            <input type="email" placeholder="Enter Your Email" class="form-control py-3">
                            <button type="submit" class="btn btn-primary text-uppercase position-absolute top-0 end-0 mt-2 me-2"><i class="far fa-envelope me-2"></i>Subscribe</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>