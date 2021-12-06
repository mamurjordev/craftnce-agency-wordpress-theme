<?php
    /**
     * Template Name: Front-page
     */

    get_header();
?>

    <?php
        if(get_craftnce_data('is_show_hero_section')) :
    ?>
    <!-- Homepage Hero -->
    <section class="home-hero">
        <div class="container">
            <div class="row hero-h align-items-center py-5 py-lg-0">
                <div class="col-lg-7">
                    <h6 class="text-uppercase fw-bold text-sm text-primary">
                        <?php
                            echo get_craftnce_data('hero_section_subtitle');
                        ?>
                    </h6>
                    <h1 class="home-hero-title text-uppercase"><?php echo get_craftnce_data('hero_section_title'); ?></h1>
                    
                    <div class="d-flex mt-4">
                        <?php
                            if(get_craftnce_data('is_show_hero_first_buttons')) :
                        ?>
                        <a href="<?php echo esc_url(get_craftnce_data('hero_first_button_link')['url']); ?>" class="btn btn-primary text-sm py-2 px-3 rounded-pill me-2">
                            <i class="<?php echo esc_attr(get_craftnce_data('hero_first_button_icon_class')); ?> me-1"></i>
                            <?php echo get_craftnce_data('hero_first_button_label'); ?>
                        </a>
                        <?php
                            endif;
                            if(get_craftnce_data('is_show_hero_second_buttons')) :
                        ?>
                        <a href="<?php echo esc_url(get_craftnce_data('hero_second_button_link')['url']); ?>" class="btn btn-outline-primary text-sm py-2 px-3 rounded-pill">
                            <i class="<?php echo esc_attr(get_craftnce_data('hero_second_button_icon_class')); ?> me-1"></i></i>
                            <?php echo get_craftnce_data('hero_second_button_label'); ?>
                        </a>
                        <?php
                            endif;
                        ?>
                    </div>
                </div>
                <div class="col-lg-5" data-aos="fade-left">
                    <img src="<?php echo esc_url(get_craftnce_data('hero_section_image')['url']); ?>" class="img-fluid mt-4 mt-md-0" alt="">
                </div>
            </div>
        </div>
    </section>
    <?php
        endif;
    ?>

    <?php
        if(get_craftnce_data('is_show_info_under_hero')) :
    ?>
    <!-- Info Section -->
    <section class="home-info">
        <div class="container">
            <div class="row hero-h align-items-center py-5 py-lg-0">
                <div class="col-lg-5">
                    <img src="<?php echo esc_url(get_craftnce_data('first_info_section_left_image')['url']); ?>" class="img-fluid mt-4 mt-md-0 px-4 px-md-0 pe-md-5" alt="">
                </div>
                <div class="col-lg-7 mt-5 mt-lg-0">
                    <h6 class="text-uppercase fw-bold text-sm text-primary">
                        <?php echo get_craftnce_data('first_info_section_subtitle'); ?>
                    </h6>
                    <h2 class="info-title text-uppercase">
                        <?php
                            echo get_craftnce_data('first_info_section_title');
                        ?>
                    </h2>
                    <p class="info-sec-p text-muted my-3">
                        <?php
                            echo get_craftnce_data('first_info_section_description');
                        ?>
                    </p>
                    <div class="d-flex mt-4">
                        <?php
                            if(get_craftnce_data('is_show_about_us_info_first_button')) :
                        ?>
                        <a href="<?php echo esc_url(get_craftnce_data('about_us_info_first_button_link')['url']); ?>" class="btn btn-primary text-sm py-2 px-3 rounded-pill me-2"><i class="<?php echo esc_attr(get_craftnce_data('about_us_info_first_button_icon')); ?> me-1"></i>
                            <?php echo get_craftnce_data('about_us_info_first_button_label'); ?>
                        </a>
                        <?php
                            endif;
                            if(get_craftnce_data('is_show_about_us_info_second_button')) :
                        ?>
                        <a href="<?php echo esc_url(get_craftnce_data('about_us_info_second_button_link')['url']); ?>" class="btn btn-outline-primary text-sm py-2 px-3 rounded-pill me-2"><i class="<?php echo esc_attr(get_craftnce_data('about_us_info_second_button_icon')); ?> me-1"></i>
                            <?php echo get_craftnce_data('about_us_info_second_button_label'); ?>
                        </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
        endif;
    ?>

    <!-- Features Section -->
    <section>
        <div class="container py-4 py-lg-5">
            <div class="row">
                <div class="col-sm-6 col-lg-3 mt-2">
                    <div class="features-box d-flex">
                        <i class="fas fa-code-branch fs-4 me-3 mt-1"></i>
                        <h5 class="">Stock Free Amazing Resources</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mt-2">
                    <div class="features-box d-flex">
                        <i class="fas fa-drafting-compass fs-4 me-3 mt-1"></i>
                        <h5 class="">Amazing Exclusive Designs</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mt-2">
                    <div class="features-box d-flex">
                        <i class="fas fa-file-alt fs-4 me-3 mt-1"></i>
                        <h5 class="">Proper<br>Documentations</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mt-2">
                    <div class="features-box d-flex">
                        <i class="fas fa-tools fs-4 me-3 mt-1"></i>
                        <h5 class="">Creative Services<br>Outlines</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container py-5">
            <div class="row text-center">
                <h6 class="text-uppercase fw-bold text-md text-primary">Our amazing services</h6>
                <h2 class="text-capitalize fw-900 text-xl mt-3">Your Success With Solution</h2>
            </div>
            <div class="row my-5">
                <div class="col-md-6 col-lg-4 mt-4">
                    <div class="card service p-4 border-0">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/product 1.png" alt="">
                        <h4 class="fw-bold my-3">Where does it come?</h4>
                        <p class="text-sm text-muted lh-base">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mt-4">
                    <div class="card service p-4 border-0">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/protection 1.png" alt="">
                        <h4 class="fw-bold my-3">Where does it come?</h4>
                        <p class="text-sm text-muted lh-base">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mt-4">
                    <div class="card service p-4 border-0">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/scalable 1.png" alt="">
                        <h4 class="fw-bold my-3">Where does it come?</h4>
                        <p class="text-sm text-muted lh-base">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mt-4">
                    <div class="card service p-4 border-0">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/shdhsjhd 1.png" alt="">
                        <h4 class="fw-bold my-3">Where does it come?</h4>
                        <p class="text-sm text-muted lh-base">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mt-4">
                    <div class="card service p-4 border-0">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/product 1.png" alt="">
                        <h4 class="fw-bold my-3">Where does it come?</h4>
                        <p class="text-sm text-muted lh-base">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mt-4">
                    <div class="card service p-4 border-0">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/protection 1.png" alt="">
                        <h4 class="fw-bold my-3 ">Where does it come?</h4>
                        <p class="text-sm text-muted lh-base">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Counter Section -->
    <section class="counter-bg">
        <div class="counter-overlay py-50">
            <div class="container text-center py-5">
                <h6 class="text-uppercase text-md fw-bold counter-section-subtitle">featured case study</h6>
                <h2 class="text-uppercase text-light fw-900 text-xl mt-3">Helping dreams to do</h2>

                <div class="row mt-5">
                    <div class="col-sm-6 col-lg-3 text-uppercase">
                        <i class="ri-code-s-slash-line text-warning fs-48"></i>
                        <h2 class="text-uppercase text-light fw-bold fs-48">200</h2>
                        <p class="text-white">Lines of code</p>
                    </div>
                    <div class="col-sm-6 col-lg-3 text-uppercase">
                        <i class="ri-user-line text-warning fs-48"></i>
                        <h2 class="text-uppercase text-light fw-bold fs-48">100+</h2>
                        <p class="text-white">Happy clients</p>
                    </div>
                    <div class="col-sm-6 col-lg-3 text-uppercase">
                        <i class="ri-code-s-slash-line text-warning fs-48"></i>
                        <h2 class="text-uppercase text-light fw-bold fs-48">250+</h2>
                        <p class="text-white">projects</p>
                    </div>
                    <div class="col-sm-6 col-lg-3 text-uppercase">
                        <i class="ri-award-fill text-warning fs-48"></i>
                        <h2 class="text-uppercase text-light fw-bold fs-48">30</h2>
                        <p class="text-white">awards</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial Section -->
    <section>
        <div class="py-50">
            <div class="container text-center py-5">
                <h6 class="text-uppercase text-md fw-bold text-primary">
                    testimonial
                </h6>
                <h2 class="text-uppercase fw-900 text-xl mt-3">Our worldwide clients<br>says about us</h2>

                <div class="row position-relative mt-5 pt-5">
                    <div class="col-xl-10 offset-xl-1" >
                        <div class="testimonial-nav mb-30 d-flex justify-items-center">
                            <div class="testimonial-thumb">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/avatar.png" alt="">
                            </div>
                            <div class="testimonial-thumb">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/avatar.png" alt="">
                            </div>
                            <div class="testimonial-thumb">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/avatar.png" alt="">
                            </div>
                            <div class="testimonial-thumb">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/avatar.png" alt="">
                            </div>
                            <div class="testimonial-thumb">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/avatar.png" alt="">
                            </div>

                            <div class="testimonial-thumb">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/avatar.png" alt="">
                            </div>
                            <div class="testimonial-thumb">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/avatar.png" alt="">
                            </div>
                            <div class="testimonial-thumb">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/avatar.png" alt="">
                            </div>
                            <div class="testimonial-thumb">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/avatar.png" alt="">
                            </div>

                            <div class="testimonial-thumb">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/avatar.png" alt="">
                            </div>
                        </div>
                        <div class="testimonial-active mt-5">
                            <div class="testimonial-item text-center">
                                <div class="designation mb-30">
                                    <h3>- Tanvir Ahamed -</h3>
                                    <span>Digital Marketer</span>
                                </div>
                                <p>“ Fruitful was seasons unto won't the fowl light deep more then regular before piece sixth them dominion cattle fish cattle first midst moved greater divided so love nature tree days for two every wherein green fruitful also</p>
                                <div class="rating w-max mx-auto d-flex">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/star.png" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/star.png" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/star.png" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/star.png" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/star.png" alt="">
                                </div>
                            </div>
                            <div class="testimonial-item text-center">
                                <div class="designation mb-30">
                                    <h3>- Mousumi Ahamed -</h3>
                                    <span>Graphic Designer</span>
                                </div>
                                <p>“ Fruitful was seasons unto won't the fowl light deep more then regular before piece sixth them dominion cattle fish cattle first midst moved greater divided so love nature tree days for two every wherein green fruitful also</p>
                                <div class="rating w-max mx-auto d-flex">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/star.png" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/star.png" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/star.png" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/star.png" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/star.png" alt="">
                                </div>
                            </div>
                            <div class="testimonial-item text-center">
                                <div class="designation mb-30">
                                    <h3>- Tanvir Ahamed -</h3>
                                    <span>Web Developer</span>
                                </div>
                                <p>“ Days for two every wherein green fruitful also fruitful was seasons unto won't the fowl light deep more then regular before piece sixth them dominion cattle fish cattle first midst moved greater divided so dove nature tree disappear relax bring Cattle fish cattle first midst moved greater divided so bring.”</p>
                                <div class="rating w-max mx-auto d-flex">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/star.png" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/star.png" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/star.png" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/star.png" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/star.png" alt="">
                                </div>
                            </div>
                            <div class="testimonial-item text-center">
                                <div class="designation mb-30">
                                    <h3>- Walid Hossaing -</h3>
                                    <span>Software Engineer</span>
                                </div>
                                <p>“ Fruitful was seasons unto won't the fowl light deep more then regular before piece sixth them dominion cattle fish cattle first midst moved greater divided so dove nature tree bisapper relan days for two every wherein green fruitful also bring Cattle fish cattle first midst moved greater divided so bring.”</p>
                                <div class="rating w-max mx-auto d-flex">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/star.png" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/star.png" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/star.png" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/star.png" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/star.png" alt="">
                                </div>
                            </div>
                            <div class="testimonial-item text-center">
                                <div class="designation mb-30">
                                    <h3>- Walid Hossaing -</h3>
                                    <span>Software Engineer</span>
                                </div>
                                <p>“ Fruitful was seasons unto won't the fowl light deep more then regular before piece sixth them dominion cattle fish cattle first midst moved greater divided so dove nature tree bisapper relan days for two every wherein green fruitful also bring Cattle fish cattle first midst moved greater divided so bring.”</p>
                                <div class="rating w-max mx-auto d-flex">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/star.png" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/star.png" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/star.png" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/star.png" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/star.png" alt="">
                                </div>
                            </div>
                            <div class="testimonial-item text-center">
                                <div class="designation mb-30">
                                    <h3>- Walid Hossaing -</h3>
                                    <span>Software Engineer</span>
                                </div>
                                <p>“ Fruitful was seasons unto won't the fowl light deep more then regular before piece sixth them dominion cattle fish cattle first midst moved greater divided so dove nature tree bisapper relan days for two every wherein green fruitful also bring Cattle fish cattle first midst moved greater divided so bring.”</p>
                                <div class="rating w-max mx-auto d-flex">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/star.png" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/star.png" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/star.png" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/star.png" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/star.png" alt="">
                                </div>
                            </div>
                            <div class="testimonial-item text-center">
                                <div class="designation mb-30">
                                    <h3>- Walid Hossaing -</h3>
                                    <span>Software Engineer</span>
                                </div>
                                <p>“ Fruitful was seasons unto won't the fowl light deep more then regular before piece sixth them dominion cattle fish cattle first midst moved greater divided so dove nature tree bisapper relan days for two every wherein green fruitful also bring Cattle fish cattle first midst moved greater divided so bring.”</p>
                                <div class="rating w-max mx-auto d-flex">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/star.png" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/star.png" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/star.png" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/star.png" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/star.png" alt="">
                                </div>
                            </div>
                            <div class="testimonial-item text-center">
                                <div class="designation mb-30">
                                    <h3>- Walid Hossaing -</h3>
                                    <span>Software Engineer</span>
                                </div>
                                <p>“ Fruitful was seasons unto won't the fowl light deep more then regular before piece sixth them dominion cattle fish cattle first midst moved greater divided so dove nature tree bisapper relan days for two every wherein green fruitful also bring Cattle fish cattle first midst moved greater divided so bring.”</p>
                                <div class="rating w-max mx-auto d-flex">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/star.png" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/star.png" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/star.png" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/star.png" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/star.png" alt="">
                                </div>
                            </div>
                            <div class="testimonial-item text-center">
                                <div class="designation mb-30">
                                    <h3>- Walid Hossaing -</h3>
                                    <span>Software Engineer</span>
                                </div>
                                <p>“ Fruitful was seasons unto won't the fowl light deep more then regular before piece sixth them dominion cattle fish cattle first midst moved greater divided so dove nature tree bisapper relan days for two every wherein green fruitful also bring Cattle fish cattle first midst moved greater divided so bring.”</p>
                                <div class="rating w-max mx-auto d-flex">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/star.png" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/star.png" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/star.png" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/star.png" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/star.png" alt="">
                                </div>
                            </div>

                            <div class="testimonial-item text-center">
                                <div class="designation mb-30">
                                    <h3>- Walid Hossaing -</h3>
                                    <span>Software Engineer</span>
                                </div>
                                <p>“ Fruitful was seasons unto won't the fowl light deep more then regular before piece sixth them dominion cattle fish cattle first midst moved greater divided so dove nature tree bisapper relan days for two every wherein green fruitful also bring Cattle fish cattle first midst moved greater divided so bring.”</p>
                                <div class="rating w-max mx-auto d-flex">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/star.png" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/star.png" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/star.png" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/star.png" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/star.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between top-50 position-absolute">
                        <button type="button" class="prev btn btn-primary rounded-0 px-2 py-0 fs-3"><i class="ri-arrow-left-s-line"></i></button>
                        <button type="button" class="next btn btn-primary rounded-0 px-2 py-0 fs-3"><i class="ri-arrow-right-s-line"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Infography Section -->
    <section class="infography-section">
        <div class="container">
            <div class="row align-items-center py-5">
                <div class="col-lg-6 mt-5 mt-lg-0">
                    <h2 class="fs-1 fw-900 text-light text-uppercase">Do you have  any projects in your mind?</h2>
                    <p class="info-sec-p text-light my-3">
                        We achived honour experience in last <span class="text-warning">25 years.</span>
                    </p>
                    
                    <div class="accordion accordion-flush mt-4" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed text-light" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne1" aria-expanded="false" aria-controls="flush-collapseOne">
                                Accordion Item #1
                            </button>
                            </h2>
                            <div id="flush-collapseOne1" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body text-light">Placeholder content for this accordion, which is intended to demonstrate the accordion-flush class. This is the first item's accordion body.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed text-light" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne2" aria-expanded="false" aria-controls="flush-collapseOne">
                                Accordion Item #1
                            </button>
                            </h2>
                            <div id="flush-collapseOne2" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body text-light">Placeholder content for this accordion, which is intended to demonstrate the accordion-flush class. This is the first item's accordion body.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed text-light" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne3" aria-expanded="false" aria-controls="flush-collapseOne">
                                Accordion Item #1
                            </button>
                            </h2>
                            <div id="flush-collapseOne3" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body text-light">Placeholder content for this accordion, which is intended to demonstrate the accordion-flush class. This is the first item's accordion body.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne4">
                            <button class="accordion-button collapsed text-light" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne4" aria-expanded="false" aria-controls="flush-collapseOne">
                                Accordion Item #1
                            </button>
                            </h2>
                            <div id="flush-collapseOne4" class="accordion-collapse collapse" aria-labelledby="flush-headingOne4" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body text-light">Placeholder content for this accordion, which is intended to demonstrate the accordion-flush class. This is the first item's accordion body.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/infography.png" class="img-fluid mt-4 mt-md-0 px-4 px-md-0 pe-md-5" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- Band Logo Section -->
    <section>
        <div class="container py-5">
            <div class="brand my-5">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/brand-01.png" alt="">
                </div>
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/brand-02.png" alt="">
                </div>
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/brand-03.png" alt="">
                </div>
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/brand-04.png" alt="">
                </div>
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/brand-05.png" alt="">
                </div>
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/brand-03.png" alt="">
                </div>
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/brand-06.png" alt="">
                </div>
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/brand-02.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter -->
    <section class="news-letter">
        <div class="newsletter-overlay py-50">
            <div class="container text-center py-5">
                <h2 class="text-uppercase text-light fw-bolder text-xl mt-3">SignUp Our Newsletter</h2>
                <p class="text-light">Get in touch by subscribing here with your</p>
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

    <!-- Blog Section -->
    <section class="py-5">
        <div class="container py-50">
            <div class="d-flex">
                <span class="left_bar me-2"></span>
                <h6 class="text-uppercase">blog posts</h6>
            </div>
            <h2 class="text-uppercase fw-900">Our recent blog</h2>

            <div class="row mt-4">
                <div class="col-md-6 col-xl-4 mt-4">
                    <div class="card shadow-lg p-3 border-0">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog.png" alt="">

                        <div class="mt-4">
                            <h4 class="fw-bold">Lorem ipsum dolor sit amet consectetur.</h4>

                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident officiis itaque fugit veniam. Suscipit accusantium tempore, impedit consequuntur necessitatibus totam!</p>

                            <a href="#!" class="text-sm text-dark fw-bolder text-decoration-none">Read More <i class="ri-arrow-right-line"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 mt-4">
                    <div class="card shadow-lg p-3 border-0">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog.png" alt="">

                        <div class="mt-4">
                            <h4 class="fw-bold">Lorem ipsum dolor sit amet consectetur.</h4>

                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident officiis itaque fugit veniam. Suscipit accusantium tempore, impedit consequuntur necessitatibus totam!</p>

                            <a href="#!" class="text-sm text-dark fw-bolder text-decoration-none">Read More <i class="ri-arrow-right-line"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 mt-4">
                    <div class="card shadow-lg p-3 border-0">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog.png" alt="">

                        <div class="mt-4">
                            <h4 class="fw-bold">Lorem ipsum dolor sit amet consectetur.</h4>

                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident officiis itaque fugit veniam. Suscipit accusantium tempore, impedit consequuntur necessitatibus totam!</p>

                            <a href="#!" class="text-sm text-dark fw-bolder text-decoration-none">Read More <i class="ri-arrow-right-line"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="mt-5 w-max mx-auto">
                <a href="#!" class="btn btn-outline-primary"><i class="fas fa-pen-nib me-2"></i> See our full blog</a>
            </div>
        </div>
    </section>

<?php
    get_footer();