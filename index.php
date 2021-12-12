<?php
    get_header();
?>

    <?php get_template_part('template-parts/common/breadcrumb'); ?>

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
                <div class="portfo-box col-md-6 col-lg-4 mt-4">
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
            <div class="brand my-5 d-flex justify-content-between flex-wrap align-items-center align-content-center">
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
            </div>
        </div>
    </section>

<?php
    get_footer();