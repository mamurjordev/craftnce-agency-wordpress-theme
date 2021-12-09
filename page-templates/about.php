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

        if(get_craftnce_data('is_show_improve_the_stability_section')) :
    ?>

    <!-- Improve The Stability -->
    <section class="improve-the-stability">
        <div class="container py-5">
            <div class="row text-center">
                <h2 class="fs-48 fw-900">Improve the stability</h2>
                <p class="text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
            </div>
            <div class="row text-center mt-5">
                <?php
                    $stability_items = get_craftnce_data('stability_items');
                    $stability_item_count = count((array)$stability_items);
                    
                    for($i = 0; $i < $stability_item_count; $i++) :
                ?>
                <div class="col-md-6 col-xl-4 mt-4">
                    <img src="<?php echo esc_attr($stability_items[$i]['stability_items_icon']['url']); ?>" alt="">
                    <h3 class="mt-2">
                        <?php
                            echo $stability_items[$i]['stability_items_title'];
                        ?>
                    </h3>
                    <p class="lh-base text-muted">
                        <?php
                            echo $stability_items[$i]['stability_items_description'];
                        ?>
                    </p>
                </div>
                <?php endfor; ?>
            </div>
        </div>
    </section>

    <?php
        endif;
    ?>

    <!-- Team Section -->
    <?php get_template_part('template-parts/common/section-team'); ?>

    <!-- Testimonial Section -->
    <?php get_template_part('template-parts/common/section-testimonial'); ?>

    <!-- Newsletter Section -->
    <?php get_template_part('template-parts/common/section-newsletter'); ?>

    <?php
        if(get_craftnce_data('is_show_brand_logo_slider_section')) :
    ?>
    <!-- Band Logo Section -->
    <section class="py-5">
        <div class="container py-5">
            <div class="mb-4 text-center">
                <h2 class="fs-48 fw-900">
                    <?php
                        echo get_craftnce_data('brand_logo_slider_section_title');
                    ?>
                </h2>
                <p>
                    <?php
                        echo get_craftnce_data('brand_logo_slider_section_subtitle');
                    ?>
                </p>
            </div>
            <?php get_template_part('template-parts/common/section-brand-logo'); ?>
        </div>
    </section>
    <?php endif; ?>

<?php
    get_footer();