<?php
    get_header();

    get_template_part('template-parts/common/breadcrumb');
?>

    <!-- Portfolio Gallery -->
    <section class="pb-5">
        <div class="container py-5">
            <div class="row text-center pb-5">
                <div class="col-md-7 mx-auto">
                    <h6 class="fw-bold fs-6 text-uppercase text-primary"><?php _e('Recent blog', 'craftnce'); ?></h6>
                    <h2 class="fs-48 fw-900 text-uppercase"><?php _e('articles', 'craftnce'); ?></h2>
                </div>
            </div>
            
            <?php if(have_posts()) : ?>
            <div class="articles-wrapper row py-5 mb-5 py-lg-0">
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
    get_footer();