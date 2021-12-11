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
                            echo get_theme_mod('craftnce_home_hero_subheading_setting', 'digital service agency');
                        ?>
                    </h6>
                    <h1 class="home-hero-title text-uppercase">
                        <?php
                            echo get_theme_mod('craftnce_home_hero_heading_setting', 'digital service agency');
                        ?>
                    </h1>
                    
                    <div class="d-flex mt-4">
                        <?php
                            if(get_theme_mod('craftnce_home_hero_show_btn1_setting')) :
                        ?>
                        <a href="<?php echo esc_url(get_theme_mod('craftnce_home_hero_btn1_link_setting')); ?>" class="btn btn-primary text-capitalize text-sm py-2 px-3 rounded-pill me-2">
                            <i class="<?php echo esc_attr(get_theme_mod('craftnce_home_hero_btn1_icon_setting')); ?> me-1"></i>
                            <?php echo get_theme_mod('craftnce_home_hero_btn1_label_setting'); ?>
                        </a>
                        <?php
                            endif;
                            if(get_theme_mod('craftnce_home_hero_show_btn2_setting')) :
                        ?>
                        <a href="<?php echo esc_url(get_theme_mod('craftnce_home_hero_btn2_link_setting')); ?>" class="btn btn-outline-primary text-capitalize text-sm py-2 px-3 rounded-pill">
                            <i class="<?php echo esc_attr(get_theme_mod('craftnce_home_hero_btn2_icon_setting')); ?> me-1"></i></i>
                            <?php echo get_theme_mod('craftnce_home_hero_btn2_label_setting'); ?>
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
        endif;
    ?>

    <?php
        if(get_theme_mod('craftnce_show_home_info_section_setting')) :
    ?>
    <!-- Info Section -->
    <section class="home-info">
        <div class="container">
            <div class="row hero-h align-items-center py-5 py-lg-0">
                <div class="col-lg-5">
                    <img src="<?php echo esc_url(get_theme_mod('craftnce_home_info_section_featured_image_setting')); ?>" class="img-fluid mt-4 mt-md-0 px-4 px-md-0 pe-md-5" alt="">
                </div>
                <div class="col-lg-7 mt-5 mt-lg-0">
                    <h6 class="text-uppercase fw-bold text-sm text-primary">
                        <?php echo get_theme_mod('craftnce_home_info_subheading_setting'); ?>
                    </h6>
                    <h2 class="info-title text-uppercase">
                        <?php
                            echo get_theme_mod('craftnce_home_info_heading_setting');
                        ?>
                    </h2>
                    <p class="info-sec-p text-muted my-3">
                        <?php
                            echo get_theme_mod('craftnce_home_info_description_setting');
                        ?>
                    </p>
                    <div class="d-flex mt-4">
                        <?php
                            if(get_theme_mod('craftnce_home_info_show_btn1_setting')) :
                        ?>
                        <a href="<?php echo esc_url(get_theme_mod('craftnce_home_info_btn1_link_setting')); ?>" class="btn btn-primary text-sm py-2 px-3 rounded-pill me-2 text-capitalize"><i class="<?php echo esc_attr(get_theme_mod('craftnce_home_info_btn1_icon_setting')); ?> me-1"></i>
                            <?php echo get_theme_mod('craftnce_home_info_btn1_label_setting'); ?>
                        </a>
                        <?php
                            endif;
                            if(get_theme_mod('craftnce_home_info_show_btn2_setting')) :
                        ?>
                        <a href="<?php echo esc_url(get_theme_mod('craftnce_home_info_btn2_link_setting')); ?>" class="btn btn-outline-primary text-sm py-2 px-3 rounded-pill me-2 text-capitalize"><i class="<?php echo esc_attr(get_theme_mod('craftnce_home_info_btn2_icon_setting')); ?> me-1"></i>
                            <?php echo get_theme_mod('craftnce_home_info_btn2_label_setting'); ?>
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
                        <h5 class="features-item-title">
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

        if(get_theme_mod('craftnce_show_home_service_section_setting')) :
    ?>

    <!-- Service Section -->
    <section>
        <div class="container py-5">
            <div class="row text-center">
                <h6 class="text-uppercase fw-bold text-md text-primary">
                    <?php echo get_theme_mod('craftnce_home_service_subheading_setting'); ?>
                </h6>
                <h2 class="text-capitalize fw-900 text-xl mt-3">
                    <?php echo get_theme_mod('craftnce_home_service_heading_setting'); ?>
                </h2>
            </div>
            <?php get_template_part('template-parts/common/section-service'); ?>
        </div>
    </section>
    <?php
        endif;
    ?>

    <!-- Counter Section -->
    <?php get_template_part('template-parts/common/section-counter'); ?>

    <!-- Testimonial Section -->
    <?php get_template_part('template-parts/common/section-testimonial'); ?>
    
    
    
    <?php
        if(get_craftnce_data('is_show_infography_section')) :
    ?>

    <!-- Infography Section -->
    <section class="infography-section">
        <div class="container">
            <div class="row align-items-center py-5">
                <div class="col-lg-6 mt-5 mt-lg-0">
                    <h2 class="fs-1 fw-900 text-light text-uppercase">
                        <?php
                            echo get_craftnce_data('infography_section_title');
                        ?>
                    </h2>
                    <p class="info-sec-p text-light my-3">
                        <?php
                            echo get_craftnce_data('infography_section_subtitle');
                        ?>
                    </p>
                    
                    <div class="accordion accordion-flush mt-4" id="accordionFlushExample">
                        <?php
                            $infography_accordion_items = get_craftnce_data('infography_accordion_items');
                            $accordion_count = count((array)$infography_accordion_items);
                            
                            for($i = 0; $i < $accordion_count; $i++) :
                        ?>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed text-light" type="button" data-bs-toggle="collapse" data-bs-target="#<?php echo 'infography_accordion_' . $i; ?>" aria-expanded="false" aria-controls="flush-collapseOne">
                                <?php
                                    echo $infography_accordion_items[$i]['infography_accordion_title'];
                                ?>
                            </button>
                            </h2>
                            <div id="<?php echo 'infography_accordion_' . $i; ?>" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body text-light">
                                <?php
                                    echo $infography_accordion_items[$i]['infography_accordion_description'];
                                ?>
                            </div>
                            </div>
                        </div>
                        <?php
                            endfor;
                        ?>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="<?php echo esc_url(get_craftnce_data('infography_image')['url']); ?>" class="img-fluid mt-4 mt-md-0 px-4 px-md-0 pe-md-5" alt="">
                </div>
            </div>
        </div>
    </section>
    <?php
        endif;
    ?>

    <!-- Brand Logo Section -->
    <section class="py-5">
        <div class="container py-5">
            <?php get_template_part('template-parts/common/section-brand-logo'); ?>
        </div>
    </section>

    <!-- Newsletter Section -->
    <?php get_template_part('template-parts/common/section-newsletter'); ?>

    <!-- Blog Section -->
    <?php get_template_part('template-parts/common/section-blog'); ?>

<?php
    get_footer();