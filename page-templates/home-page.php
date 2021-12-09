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

        if(get_craftnce_data('is_show_features_section')) :
    ?>

    <!-- Features Section -->
    <section>
        <div class="container py-4 py-lg-5">
            <div class="row">
                <?php
                    $features_items = get_craftnce_data('features_items');
                    $_count = count((array)$features_items);

                    for($i = 0; $i < $_count; $i++) :
                ?>
                <div class="col-sm-6 col-lg-3 mt-2">
                    <div class="features-box d-flex">
                        <i class="<?php echo esc_attr($features_items[$i]['features_item_icon_class']); ?> fs-4 me-3 mt-1"></i>
                        <h5 class="features-item-title">
                            <?php
                                echo $features_items[$i]['features_item_title'];
                            ?>
                        </h5>
                    </div>
                </div>
                <?php endfor; ?>
            </div>
        </div>
    </section>

    <?php
        endif;

        if(get_craftnce_data('is_show_front_page_service_section')) :
    ?>

    <!-- Service Section -->
    <section>
        <div class="container py-5">
            <div class="row text-center">
                <h6 class="text-uppercase fw-bold text-md text-primary">
                    <?php echo get_craftnce_data('service_section_subtitle'); ?>
                </h6>
                <h2 class="text-capitalize fw-900 text-xl mt-3">
                    <?php echo get_craftnce_data('service_section_title'); ?>
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