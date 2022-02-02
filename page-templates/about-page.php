<?php
    /**
     * Template Name: About Page
     */

    get_header();
    get_template_part('template-parts/common/breadcrumb');

    if(get_theme_mod('craftnce_show_about_page_info_section_setting', 1)) :
?>

    <!-- Info Section -->
    <section class="home-info">
        <div class="container">
            <div class="row hero-h align-items-center py-5 py-lg-0">
                <div class="col-lg-6">
                    <img src="<?php echo esc_url(get_theme_mod('craftnce_about_info_section_featured_image_setting')); ?>" class="img-fluid mt-4 mt-md-0 px-4 px-md-0 pe-md-5" alt="">
                </div>
                <div class="col-lg-6 mt-5 mt-lg-0">
                    <h6 class="text-uppercase fw-bold text-sm text-primary">
                        <?php echo get_theme_mod('craftnce_about_info_subheading_setting', 'history'); ?>
                    </h6>
                    <h2 class="fs-1 fw-900 text-capitalize">
                        <?php
                            echo esc_html( get_theme_mod('craftnce_about_info_heading_setting', 'For the next generation of big businesses') );
                        ?>
                    </h2>
                    <p class="info-sec-p text-muted my-3">
                        <?php
                            echo esc_html( get_theme_mod('craftnce_about_info_description_setting', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate dolore non reiciendis explicabo eius nihil.') );
                        ?>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <?php
        endif;

        if(get_theme_mod('craftnce_show_about_page_casestudy_section_setting', 1)) :
    ?>
    <section>
        <div class="container mb-5">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="fw-900 fs-1">
                        <?php echo esc_html( get_theme_mod('craftnce_about_casestudy_heading_setting', 'For the next generation of big businesses') ); ?>
                    </h2>
                </div>
                <div class="col-md-6 align-self-center">
                    <p>
                        <?php echo esc_html( get_theme_mod('craftnce_about_casestudy_description_setting', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour. If you are going to use a passage of Lorem Ipsum, you need to be sure.')); ?>
                    </p>
                </div>
            </div>
            <?php
                if(get_theme_mod('show_case_study_box')) :
            ?>
            <div class="row position-relative mt-4 pe-0">
                <img src="<?php echo esc_url(get_theme_mod('craftnce_about_casestudy_section_featured_image_setting')); ?>" class="img-fluid" alt="">

                <?php
                    if(get_theme_mod('show_case_study_box_content')) :
                ?>
                <div class="about-info2-inner-box info2_bg-light bottom-0 end-0 pt-4 ps-4 pe-4 pe-lg-0 col-lg-7 me-2point5">
                    <h5 class="fw-bold">
                        <?php
                            echo esc_html(get_theme_mod('craftnce_about_casestudy_box_heading_setting', 'If you are going to use a passage of Lorem Ipsum you need to be sure. Compare us between others companies.'));
                        ?>
                    </h5>
                    <p class="text-muted text-md">
                        <?php
                            echo esc_html(get_theme_mod('craftnce_about_box_casestudy_description_setting'));
                        ?>
                    </p>

                    <?php
                        $craftnce_casestudy_box_repeater = get_theme_mod('craftnce_about_casestudy_box_item_settings');
                        $craftnce_casestudy_box_repeater_decoded = json_decode($craftnce_casestudy_box_repeater);
                        if(!empty($craftnce_casestudy_box_repeater_decoded)) :
                    ?>

                    <div class="border border-2 border-primary info2_border p-3 mt-4">
                        <div class="row pe-0">
                            <?php
                                foreach($craftnce_casestudy_box_repeater_decoded as $box_repeater_item) :
                            ?>
                            <div class="col-sm-6">
                                <div class="d-flex">
                                    <i class="<?php echo esc_attr($box_repeater_item->icon_value); ?> info2-col-ico me-3 mt-1 text-primary fs-5"></i>
                                    <div>
                                        <h5>
                                            <?php echo esc_html( $box_repeater_item->title ); ?>
                                        </h5>
                                        <p class="text-md text-muted lh-base mb-0">
                                            <?php echo esc_html( $box_repeater_item->text ); ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
                <?php endif; ?>
            </div>
            <?php endif; ?>
        </div>
    </section>
    <?php
        endif;
    ?>
    <!-- Counter Section -->
    <?php
        get_template_part('template-parts/common/section-counter');
        
        if(get_theme_mod('craftnce_show_about_page_skills_section_setting', 1)) :
    ?>

    <!-- Skill Progressbar Section -->
    <section class="home-info">
        <div class="container">
            <div class="row progress-bar-h align-items-center py-5 py-lg-0">
                <div class="col-lg-6 mt-5 mt-lg-0">
                    <h2 class="info-title text-capitalize">
                        <?php
                            echo esc_html( get_theme_mod('craftnce_about_skills_heading_setting', 'We Have achieved Experiences & Skills') );
                        ?>
                    </h2>

                    <div class="d-flex py-4">
                        <i class="<?php echo esc_attr(get_theme_mod('craftnce_about_skills_award_icon_setting', 'fas fa-award')); ?> fs-72 text-primary me-4"></i>
                        <h2 class="award-text-whidth fw-bold">
                            <?php
                                echo esc_html( get_theme_mod('craftnce_about_skills_award_heading_setting', '25 Awards is in our hands'));
                            ?>
                        </h2>
                    </div>

                    <p class="info-sec-p text-muted my-3">
                        <?php
                            echo esc_html( get_theme_mod('craftnce_about_skills_desc_setting') );
                        ?>
                    </p>
                </div>
                <?php
                    $craftnce_skills_item_settings_repeater = get_theme_mod('craftnce_skills_item_settings');
                    $craftnce_skills_item_settings_repeater_decoded = json_decode($craftnce_skills_item_settings_repeater);
                    if(!empty($craftnce_skills_item_settings_repeater_decoded)) :
                ?>
                <div class="col-lg-6">
                    <?php
                        foreach($craftnce_skills_item_settings_repeater_decoded as $skills_repeater_item) :
                    ?>
                    <div class="progress-item">
                        <div class="d-flex justify-content-between">
                            <h6><?php echo esc_html( $skills_repeater_item->title ); ?></h6>
                            <h6><?php echo esc_html( $skills_repeater_item->subtitle ); ?>%</h6>
                        </div>
                        <div class="progress mt-2">
                            <div class="progress-bar" role="progressbar" style="width: <?php echo esc_html( $skills_repeater_item->subtitle ); ?>%" aria-valuenow="<?php echo esc_html( $skills_repeater_item->subtitle ); ?>" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <?php
                    endif;
                ?>
            </div>
        </div>
    </section>
    <?php
        endif;

        if(get_theme_mod('craftnce_show_about_page_stability_section_setting', 1)) :
    ?>
    <!-- Improve The Stability Section-->
    <section class="improve-the-stability">
        <div class="container py-5">
            <div class="row text-center">
                <h2 class="fs-48 fw-900">
                    <?php 
                        echo esc_html(get_theme_mod('craftnce_about_page_stability_heading_setting', 'Your Success With Solution'));
                    ?>
                </h2>
                <p class="text-muted">
                    <?php 
                        echo esc_html(get_theme_mod('craftnce_about_page_stability_subheading_setting', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy'));
                    ?>
                </p>
            </div>
            <?php
                $craftnce_stability_item_settings_repeater = get_theme_mod('craftnce_about_page_stability_item_settings');
                $craftnce_stability_item_settings_repeater_decoded = json_decode($craftnce_stability_item_settings_repeater);
                if(!empty($craftnce_stability_item_settings_repeater_decoded)) :
            ?>
            <div class="row text-center mt-5">
                <?php
                    foreach($craftnce_stability_item_settings_repeater_decoded as $craftnce_stability_item) :
                ?>
                <div class="col-md-6 col-xl-4 mt-4">
                    <img src="<?php echo esc_url( $craftnce_stability_item->image_url ); ?>" alt="">
                    <h3 class="mt-2 fw-bolder text-capitalize">
                        <?php
                            echo esc_html( $craftnce_stability_item->title );
                        ?>
                    </h3>
                    <p class="lh-base text-muted">
                        <?php
                            echo esc_html( $craftnce_stability_item->text );
                        ?>
                    </p>
                </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
        </div>
    </section>
    <?php
        endif;

        if(get_theme_mod( 'craftnce_show_team_section_section_setting', 1)) {
            get_template_part('template-parts/common/section-team');
        }
        
        // Testimonial Section
        if(get_theme_mod('craftnce_show_about_testimonials_section_setting', 1)) {
            get_template_part('template-parts/common/section-testimonial');
        }

        // Newsletter Section
        if(get_theme_mod('craftnce_show_about_newsletter_section_setting', 1)) {
            get_template_part('template-parts/common/section-newsletter');
        }

        // Brand Logo
        if(get_theme_mod('craftnce_show_about_brand_section_setting', 1)) {
            get_template_part('template-parts/common/section-brand-logo');
        };
    ?>

<?php
    get_footer();