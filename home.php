<?php
    get_header();

    if(get_theme_mod('craftnce_blog_page_show_breadcrumb_setting', 1)) {
        get_template_part('template-parts/common/breadcrumb'); 
    }
?>

    <!-- Blog -->
    <section class="pb-5">
        <div class="container py-5">
            <?php
                if(get_theme_mod('craftnce_show_blog_page_header_section_setting', 1)) :
            ?>
            <div class="row text-center pb-5">
                <div class="col-md-7 mx-auto">
                    <h6 class="fw-bold fs-6 text-uppercase text-primary"><?php echo esc_html( get_theme_mod('craftnce_blog_page_sub_heading_settings') ); ?></h6>
                    <h2 class="fs-48 fw-900 text-uppercase"><?php echo esc_html( get_theme_mod('craftnce_blog_page_heading_setting') ); ?></h2>
                </div>
            </div>
            <?php
                endif;

                if(have_posts()) :
            ?>
            <div class="articles-wrapper row mb-5">
                <?php
                    while(have_posts()) :
                        the_post();
                ?>
                <div <?php post_class('portfo-box col-md-6 col-lg-4 mt-4'); ?>>
                    <div class="card border-0  rounded-3 blog-card">
                        <?php
                            if(has_post_thumbnail()) {
                                the_post_thumbnail('large', array('class'=>'img-fluid w-100 h-100'));
                            }
                        ?>

                        <div>
                            <a class="text-dark text-decoration-none" href="<?php the_permalink(); ?>">
                                <h4 class="fw-bold my-3">
                                    <?php the_title(); ?>
                                </h4>
                            </a>
                            <p class="text-sm m-0 lh-base excerpt">
                                <?php echo get_the_excerpt(); ?>
                            </p>
                        </div>

                        <a href="<?php the_permalink(); ?>" class="single-blog-read-more-btn position-relative mt-3 text-dark text-decoration-none w-max">
                            <?php _e('Read More', 'craftnce'); ?>
                        </a>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
            <div class="pagination text-center w-max mx-auto mt-4">
                <?php
                    the_posts_pagination( array(
                        'screen_reader_text'            =>  ' ',
                        'prev_text'                     =>  '<i class="ri-arrow-left-s-fill"></i>',
                        'next_text'                     =>  '<i class="ri-arrow-right-s-fill"></i>',
                    ));
                ?>
            </div>
            <?php endif; ?>
        </div>
    </section>

    <?php
        // Newsletter Section
        if(get_theme_mod('craftnce_show_blog_page_newsletter_section_setting')) {
            get_template_part('template-parts/common/section-newsletter');
        }
        
        // Brand Logo Section
        if(get_theme_mod('craftnce_show_blog_page_brand_section_setting')) {
            get_template_part('template-parts/common/section-brand-logo');
        }
    ?>

<?php
    get_footer();