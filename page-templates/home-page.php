<?php
    /**
     * Template Name: Front-page
     */

    get_header();
?>
    <!-- Homepage Hero -->
    <section class="home-hero">
        <div class="container">
            <div class="row hero-h align-items-center py-5 py-lg-0">
                <div class="col-lg-7">
                    <h6 class="text-uppercase fw-bold text-sm text-primary">
                        <?php
                            echo esc_html( get_theme_mod('craftnce_home_hero_subheading_setting', 'digital service agency') );
                        ?>
                    </h6>
                    <h1 class="home-hero-title text-uppercase font-inter">
                        <?php
                            echo esc_html( get_theme_mod('craftnce_home_hero_heading_setting', 'digital service agency') );
                        ?>
                    </h1>
                    
                    <div class="d-flex mt-4">
                        <?php
                            if(get_theme_mod('craftnce_home_hero_show_btn1_setting', 1)) :
                        ?>
                        <a href="<?php echo esc_url(get_theme_mod('craftnce_home_hero_btn1_link_setting')); ?>" class="btn btn-primary text-capitalize text-sm py-2 px-3 rounded-pill me-2">
                            <?php echo esc_html( get_theme_mod('craftnce_home_hero_btn1_label_setting', 'get started') ); ?>
                            <i class="<?php echo esc_attr(get_theme_mod('craftnce_home_hero_btn1_icon_setting')); ?> ms-1"></i>
                        </a>
                        <?php
                            endif;
                            if(get_theme_mod('craftnce_home_hero_show_btn2_setting', 1)) :
                        ?>
                        <a href="<?php echo esc_url(get_theme_mod('craftnce_home_hero_btn2_link_setting')); ?>" class="btn btn-outline-primary text-capitalize text-sm py-2 px-3 rounded-pill">
                            <?php echo esc_html( get_theme_mod('craftnce_home_hero_btn2_label_setting', 'get started') ); ?>
                            <i class="<?php echo esc_attr(get_theme_mod('craftnce_home_hero_btn2_icon_setting')); ?> ms-1"></i>
                        </a>
                        <?php
                            endif;
                        ?>
                    </div>
                </div>
                <div class="col-lg-5" data-aos="fade-left">
                    <img src="<?php echo esc_url(get_theme_mod('craftnce_home_hero_featured_image_setting')); ?>" class="img-fluid mt-4 mt-md-0" alt="">
                </div>
            </div>
        </div>
    </section>
    <?php
        if(get_theme_mod('craftnce_show_home_info_section_setting', 1)) :
    ?>
    <!-- Info Section -->
    <section id="content" class="home-info">
        <div class="container">
            <div class="row hero-h align-items-center py-5 py-lg-0">
                <div class="col-lg-5">
                    <img src="<?php echo esc_url(get_theme_mod('craftnce_home_info_section_featured_image_setting')); ?>" class="img-fluid mt-4 mt-md-0 px-4 px-md-0 pe-md-5" alt="">
                </div>
                <div class="col-lg-7 mt-5 mt-lg-0">
                    <h6 class="text-uppercase fw-bold text-sm text-primary">
                        <?php echo esc_html( get_theme_mod('craftnce_home_info_subheading_setting', 'ABOUT CRAFTNCE') ); ?>
                    </h6>
                    <h2 class="info-title font-inter text-uppercase">
                        <?php
                            echo esc_html( get_theme_mod('craftnce_home_info_heading_setting', 'WE\'RE LEADING DIGITAL BUSINESS AGENCY') );
                        ?>
                    </h2>
                    <p class="info-sec-p text-muted my-3 font-rubik">
                        <?php
                            echo esc_html( get_theme_mod('craftnce_home_info_description_setting', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate dolore non reiciendis explicabo eius nihil.') );
                        ?>
                    </p>
                    <div class="d-flex mt-4">
                        <?php
                            if(get_theme_mod('craftnce_home_info_show_btn1_setting', 1)) :
                        ?>
                        <a href="<?php echo esc_url(get_theme_mod('craftnce_home_info_btn1_link_setting')); ?>" class="btn btn-primary text-sm py-2 px-3 rounded-pill me-2 text-capitalize"><i class="<?php echo esc_attr(get_theme_mod('craftnce_home_info_btn1_icon_setting')); ?> me-1"></i>
                            <?php echo esc_html( get_theme_mod('craftnce_home_info_btn1_label_setting', 'get started') ); ?>
                        </a>
                        <?php
                            endif;
                            if(get_theme_mod('craftnce_home_info_show_btn2_setting', 1)) :
                        ?>
                        <a href="<?php echo esc_url(get_theme_mod('craftnce_home_info_btn2_link_setting')); ?>" class="btn btn-outline-primary text-sm py-2 px-3 rounded-pill me-2 text-capitalize"><i class="<?php echo esc_attr(get_theme_mod('craftnce_home_info_btn2_icon_setting')); ?> me-1"></i>
                            <?php echo esc_html( get_theme_mod('craftnce_home_info_btn2_label_setting', 'get started') ); ?>
                        </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
        endif;

        if(get_theme_mod('craftnce_show_home_features_section_setting')) :
    ?>

    <!-- Features Section -->
    <section>
        <div class="container py-4 py-lg-5">
            <div class="row">
                <?php

                    $craftnce_features_repeater = get_theme_mod('craftnce_home_features_item_settings');
                    $craftnce_features_repeater_decoded = json_decode($craftnce_features_repeater);
                    if(!empty($craftnce_features_repeater_decoded)) :
                        foreach($craftnce_features_repeater_decoded as $repeater_item) :
                ?>

                <div class="col-sm-6 col-lg-3 mt-2">
                    <div class="features-box d-flex">
                        <i class="<?php echo esc_attr($repeater_item->icon_value); ?> fs-4 me-3 mt-1"></i>
                        <h5 class="features-item-title font-inter">
                            <?php
                                echo $repeater_item->title;
                            ?>
                        </h5>
                    </div>
                </div>
                <?php
                        endforeach;
                    endif;
                ?>
            </div>
        </div>
    </section>

    <?php
        endif;

        if(get_theme_mod('craftnce_show_home_service_section_setting', 1)) :
    ?>

    <!-- Service Section -->
    <section>
        <div class="container py-5">
            <div class="row text-center">
                <h6 class="text-uppercase fw-bold text-md text-primary">
                    <?php echo esc_html( get_theme_mod('craftnce_home_service_subheading_setting', 'Our amazing services') ); ?>
                </h6>
                <h2 class="text-capitalize fw-900 font-inter text-xl mt-3">
                    <?php echo esc_html( get_theme_mod('craftnce_home_service_heading_setting', 'Your Success With Solution') ); ?>
                </h2>
            </div>
            <?php get_template_part('template-parts/common/section-service'); ?>
        </div>
    </section>
    <?php
        endif;
    ?>

    <!-- Counter Section -->
    <?php
        if(get_theme_mod('craftnce_show_section_counter_section_setting', 1)) {
            get_template_part('template-parts/common/section-counter');
        }
        
        // Testimonial Section
        if(get_theme_mod('craftnce_show_home_testimonials_section_setting', 1)) {
            get_template_part('template-parts/common/section-testimonial');
        }
    
        // Infography Section
        if(get_theme_mod('craftnce_show_home_infography_section_setting', 1)) :
    ?>
    
    <section class="infography-section">
        <div class="container">
            <div class="row align-items-center py-5">
                <div class="col-lg-6 mt-5 mt-lg-0">
                    <h2 class="fs-1 fw-900 text-light font-inter text-uppercase">
                        <?php
                            echo esc_html( get_theme_mod('craftnce_home_infography_heading_setting', 'Do you have any projects in your mind?') );
                        ?>
                    </h2>
                    <p class="info-sec-p text-light my-3">
                        <?php
                            echo esc_html( get_theme_mod('craftnce_home_infography_subheading_setting', 'We achived honour experience in last 25 years.') );
                        ?>
                    </p>
                    
                    <div class="accordion accordion-flush mt-4" id="accordionFlushExample">
                        <?php
                            $craftnce_features_repeater = get_theme_mod('craftnce_home_infography_item_settings');
                            $craftnce_features_repeater_decoded = json_decode($craftnce_features_repeater);
                            if(!empty($craftnce_features_repeater_decoded)) :
                                foreach($craftnce_features_repeater_decoded as $key => $repeater_item) :
                        ?>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#<?php echo 'infography_accordion_' . $key; ?>" aria-expanded="false" aria-controls="flush-collapseOne">
                                <?php
                                    echo $repeater_item->title;
                                ?>
                            </button>
                            </h2>
                            <div id="<?php echo 'infography_accordion_' . $key; ?>" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <?php
                                    echo $repeater_item->text;
                                ?>
                            </div>
                            </div>
                        </div>
                        <?php
                                endforeach;
                            endif;
                        ?>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="<?php echo esc_url(get_theme_mod('craftnce_home_infography_section_featured_image_setting')); ?>" class="img-fluid mt-4 mt-md-0 px-4 px-md-0 pe-md-5" alt="">
                </div>
            </div>
        </div>
    </section>
    <?php
        endif;

        // Brand Logo
        if(get_theme_mod('craftnce_show_home_brand_section_setting', 1)) {
            get_template_part('template-parts/common/section-brand-logo');
        };

        // Newsletter Section
        if(get_theme_mod('craftnce_show_home_newsletter_section_setting', 1)) {
            get_template_part('template-parts/common/section-newsletter');
        }

        // Blog Part
        if(get_theme_mod('craftnce_show_home_blog_section_setting', 1)) {
            get_template_part('template-parts/common/section-blog');
        }
    ?>

<?php
    get_footer();