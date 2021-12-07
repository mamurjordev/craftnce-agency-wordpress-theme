<?php
    /**
     * Template Name: About Page
     */

     get_header();
?>

<?php get_template_part('template-parts/common/breadcrumb'); ?>

    <?php
        if(get_craftnce_data('is_show_about_page_info_section')) :
    ?>
    <!-- Info Section -->
    <section class="home-info">
        <div class="container">
            <div class="row hero-h align-items-center py-5 py-lg-0">
                <div class="col-lg-6">
                    <img src="<?php echo esc_url(get_craftnce_data('about_page_info_feat_image')['url']); ?>" class="img-fluid mt-4 mt-md-0 px-4 px-md-0 pe-md-5" alt="">
                </div>
                <div class="col-lg-6 mt-5 mt-lg-0">
                    <h6 class="text-uppercase fw-bold text-sm text-primary">
                        <?php
                            echo get_craftnce_data('about_page_info_subtitle');
                        ?>
                    </h6>
                    <h2 class="fs-1 fw-900 text-capitalize">
                        <?php
                            echo get_craftnce_data('about_page_info_title');
                        ?>
                    </h2>
                    <p class="info-sec-p text-muted my-3">
                        <?php
                            echo get_craftnce_data('about_page_info_description');
                        ?>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <?php
        endif;

        if(get_craftnce_data('is_show_about_page_case_study_section')) :
    ?>

    <section>
        <div class="container mb-5">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="fw-900 fs-1">
                        <?php
                            echo get_craftnce_data('about_page_case_study_title');
                        ?>
                    </h2>
                </div>
                <div class="col-md-6 align-self-center">
                    <p>
                        <?php
                            echo get_craftnce_data('about_page_case_study_short_description');
                        ?>
                    </p>
                </div>
            </div>
            <div class="row position-relative mt-4 pe-0">
                <img src="<?php echo esc_url(get_craftnce_data('about_page_case_study_feat_image')['url']); ?>" class="img-fluid" alt="">

                <?php
                    if(get_craftnce_data('is_show_about_page_case_study_box')) :
                ?>
                <div class="about-info2-inner-box info2_bg-light bottom-0 end-0 pt-4 ps-4 pe-4 pe-lg-0 col-lg-7 me-2point5">
                    <h5 class="fw-bold">
                        <?php
                            echo get_craftnce_data('about_page_case_study_box_title');
                        ?>
                    </h5>
                    <p class="text-muted text-md">
                        <?php
                            echo get_craftnce_data('about_page_case_study_box_short_description');
                        ?>
                    </p>

                    <div class="border border-2 border-primary info2_border p-3 mt-4">
                        <div class="row pe-0">
                            <?php
                                $about_page_case_study = get_craftnce_data('about_page_case_study_info_grid');
                                $case_study_info_grid_count = count((array)$about_page_case_study);
                                
                                for($i = 0; $i < $case_study_info_grid_count; $i++) :
                            ?>
                            <div class="col-sm-6 mt-4 mt-sm-0">
                                <div class="d-flex">
                                    <i class="<?php echo esc_attr($about_page_case_study[$i]['case_study_info_grid_icon']); ?> info2-col-ico me-3 mt-1 text-primary fs-5"></i>
                                    <div>
                                        <h5>
                                            <?php
                                                echo $about_page_case_study[$i]['case_study_info_grid_title'];
                                            ?>
                                        </h5>
                                        <p class="text-sm text-muted lh-base mb-0">
                                            <?php
                                                echo $about_page_case_study[$i]['case_study_info_grid_description'];
                                            ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <?php
                                endfor;
                            ?>
                        </div>
                    </div>
                </div>
                <?php
                    endif;
                ?>
            </div>
        </div>
    </section>

    <?php
        endif;
    ?>

    <!-- Counter Section -->
    <?php get_template_part('template-parts/common/section-counter'); ?>

    <?php
        if(get_craftnce_data('is_show_about_page_skill_section')) :
    ?>
    <!-- Skill Progressbar Section -->
    <section class="home-info">
        <div class="container">
            <div class="row progress-bar-h align-items-center py-5 py-lg-0">
                <div class="col-lg-6 mt-5 mt-lg-0">
                    <h2 class="info-title text-capitalize">
                        <?php
                            echo get_craftnce_data('about_page_skill_section_title');
                        ?>
                    </h2>

                    <?php
                        if(get_craftnce_data('is_show_about_page_skill_section_award_box')) :
                    ?>
                    <div class="skills-award-box d-flex py-4">
                        <i class="<?php echo get_craftnce_data('about_page_skill_section_award_box_icon'); ?> fs-72 text-primary me-4"></i>
                        <h2 class="award-text-width fw-bold">
                            <?php
                                echo get_craftnce_data('about_page_skill_section_award_box_title');
                            ?>
                        </h2>
                    </div>
                    <?php endif; ?>

                    <p class="info-sec-p text-muted my-3">
                        <?php
                            echo get_craftnce_data('about_page_skill_section_award_box_description');
                        ?>
                    </p>
                </div>
                <div class="col-lg-6">
                    <?php
                        $skill_progress_bars = get_craftnce_data('about_page_skill_progress_bars');
                        $progress_bar_count = count((array)$skill_progress_bars);
                        
                        for($i = 0; $i < $progress_bar_count; $i++) :
                    ?>
                    <div class="progress-item">
                        <div class="d-flex justify-content-between">
                            <h6>
                                <?php
                                    echo $skill_progress_bars[$i]['skill_title'];
                                ?>
                            </h6>
                            <h6>
                                <?php
                                    echo $skill_progress_bars[$i]['skill_percentage_text'] . '%';
                                ?>
                            </h6>
                        </div>
                        <div class="progress mt-2">
                            <div 
                                class="progress-bar" 
                                role="progressbar" 
                                style="width: <?php echo esc_attr($skill_progress_bars[$i]['skill_percentage_progress']); ?>%" 
                                aria-valuenow="<?php echo esc_attr($skill_progress_bars[$i]['skill_percentage_progress']); ?>" 
                                aria-valuemin="0" 
                                aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
    </section>

    <?php
        endif;
    ?>

    <!-- Improve The Stability -->
    <section class="improve-the-stability">
        <div class="container py-5">
            <div class="row text-center">
                <h2 class="fs-48 fw-900">Improve the stability</h2>
                <p class="text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
            </div>
            <div class="row text-center mt-5">
                <div class="col-md-6 col-xl-4 mt-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/ss-01.png" alt="">
                    <h3 class="mt-2">Unlimited Content</h3>
                    <p class="lh-base text-muted">Stars air over land bring life female stars dry be abundantly may green te which fill after our behold very god pair.</p>
                </div>
                <div class="col-md-6 col-xl-4 mt-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/ss-02.png" alt="">
                    <h3 class="mt-2">Unlimited Content</h3>
                    <p class="lh-base text-muted">Stars air over land bring life female stars dry be abundantly may green te which fill after our behold very god pair.</p>
                </div>
                <div class="col-md-6 col-xl-4 mt-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/ss-03.png" alt="">
                    <h3 class="mt-2">Unlimited Content</h3>
                    <p class="lh-base text-muted">Stars air over land bring life female stars dry be abundantly may green te which fill after our behold very god pair.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="team-sction py-5">
        <div class="container py-5">
            <div class="row text-center">
                <div class="col-sm-7 col-xl-4 mx-auto">
                    <h2 class="fw-900">Meet Our Experienced & Skilled Team</h2>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-6 col-lg-4 col-xxl-3 mt-4">
                    <div class="team-member-card card border-0 overflow-hidden d-flex flex-column justify-content-between">
                        <div class="team-avatar text-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/images.png" class="img-fluid team-avatar-img rounded-circle mx-auto" alt="">
                        </div>
                        
                        <div class="text-center">
                            <h3 >Hasan Ali</h3>
                            <span class="text-sm fw-light">Founder & Chairman</span>
                        </div>

                        <div class="team-social-container bg-primary py-2">
                            <div class="team-social w-max mx-auto">
                                <a href="#!"><i class="fab fa-facebook-f"></i></a>
                                <a href="#!"><i class="fab fa-instagram"></i></a>
                                <a href="#!"><i class="fab fa-twitter"></i></a>
                                <a href="#!"><i class="fab fa-whatsapp"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xxl-3 mt-4">
                    <div class="team-member-card card border-0 overflow-hidden d-flex flex-column justify-content-between">
                        <div class="team-avatar text-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/images.png" class="img-fluid team-avatar-img rounded-circle mx-auto" alt="">
                        </div>
                        
                        <div class="text-center">
                            <h3 >Hasan Ali</h3>
                            <span class="text-sm fw-light">Founder & Chairman</span>
                        </div>

                        <div class="team-social-container bg-primary py-2">
                            <div class="team-social w-max mx-auto">
                                <a href="#!"><i class="fab fa-facebook-f"></i></a>
                                <a href="#!"><i class="fab fa-instagram"></i></a>
                                <a href="#!"><i class="fab fa-twitter"></i></a>
                                <a href="#!"><i class="fab fa-whatsapp"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xxl-3 mt-4">
                    <div class="team-member-card card border-0 overflow-hidden d-flex flex-column justify-content-between">
                        <div class="team-avatar text-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/images.png" class="img-fluid team-avatar-img rounded-circle mx-auto" alt="">
                        </div>
                        
                        <div class="text-center">
                            <h3 >Hasan Ali</h3>
                            <span class="text-sm fw-light">Founder & Chairman</span>
                        </div>

                        <div class="team-social-container bg-primary py-2">
                            <div class="team-social w-max mx-auto">
                                <a href="#!"><i class="fab fa-facebook-f"></i></a>
                                <a href="#!"><i class="fab fa-instagram"></i></a>
                                <a href="#!"><i class="fab fa-twitter"></i></a>
                                <a href="#!"><i class="fab fa-whatsapp"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xxl-3 mt-4">
                    <div class="team-member-card card border-0 overflow-hidden d-flex flex-column justify-content-between">
                        <div class="team-avatar text-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/images.png" class="img-fluid team-avatar-img rounded-circle mx-auto" alt="">
                        </div>
                        
                        <div class="text-center">
                            <h3 >Hasan Ali</h3>
                            <span class="text-sm fw-light">Founder & Chairman</span>
                        </div>

                        <div class="team-social-container bg-primary py-2">
                            <div class="team-social w-max mx-auto">
                                <a href="#!"><i class="fab fa-facebook-f"></i></a>
                                <a href="#!"><i class="fab fa-instagram"></i></a>
                                <a href="#!"><i class="fab fa-twitter"></i></a>
                                <a href="#!"><i class="fab fa-whatsapp"></i></a>
                            </div>
                        </div>
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
                <h2 class="text-uppercase fw-bolder text-xl mt-3">Our worldwide clients<br>says about us</h2>

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

    <!-- Newsletter -->
    <section class="news-letter">
        <div class="newsletter-overlay py-50">
            <div class="container text-center py-5">
                <h2 class="text-uppercase text-light fw-bolder text-xl mt-3">SignUp Our Newslater</h2>
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

    <!-- Band Logo Section -->
    <section class="py-5">
        <div class="container py-5">
            <div class="mb-4 text-center">
                <h2 class="fs-48 fw-900">Trusted over 100+ companies</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum asperiores labore tenetur?</p>
            </div>
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

<?php
    get_footer();