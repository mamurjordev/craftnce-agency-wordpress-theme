<!-- Blog Section -->
<section class="py-5">
    <div class="container py-50">
        <div class="d-flex">
            <span class="left_bar me-2"></span>
            <h6 class="text-uppercase">
                <?php
                    echo esc_html( get_theme_mod('craftnce_home_blog_subtext_setting', 'blog posts') );
                ?>
            </h6>
        </div>
        <h2 class="text-uppercase fw-900">
            <?php
                echo esc_html( get_theme_mod('craftnce_home_blog_heading_setting', 'Our recent blog') );
            ?>
        </h2>

        <div class="row mt-4">
            <?php
                $home_posts             =   new WP_Query(array(
                    'post_type'             =>  'post',
                    'posts_per_page'        =>  3,
                ));

                if($home_posts->have_posts()) :
                    while($home_posts->have_posts()) :
                        $home_posts->the_post();
            ?>
            <div class="portfo-box col-md-6 col-lg-4 mt-4">
                <div class="card border-0 bg-white rounded-3 blog-card">
                    <?php
                        if(has_post_thumbnail()) {
                            the_post_thumbnail('full', array('class'=>'img-fluid w-100 h-100'));
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
            <?php
                    endwhile;
                endif;
            ?>
        </div>
        <?php
            if(get_theme_mod('craftnce_home_blog_show_btn_setting')) :
        ?>
        <div class="mt-5 w-max mx-auto">
            <a href="<?php echo esc_url(get_theme_mod('craftnce_home_blog_btn_link_setting')); ?>" class="btn btn-outline-primary">
                <?php
                    if(get_craftnce_data('see_full_blog_button_icon')) :
                ?>
                <i class="<?php echo esc_attr(get_theme_mod('craftnce_home_blog_btn_icon_setting')); ?> me-2"></i>
                <?php
                    endif;
                ?>
                <?php echo esc_html( get_theme_mod('craftnce_home_blog_btn_label_setting', 'see more') ); ?>
            </a>
        </div>
        <?php
            endif;
        ?>
    </div>
</section>