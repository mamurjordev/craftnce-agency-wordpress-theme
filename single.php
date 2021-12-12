<?php
    get_header();
    the_post();

    if(get_theme_mod('craftnce_show_breadcrumb_setting')) {
        get_template_part('template-parts/common/breadcrumb'); 
    }
?>

<div class="container my-4 my-md-5">
    <div class="row">
        <?php
            if(get_theme_mod('craftnce_single_blog_page_layout_settings') === 'left_sidebar') {
                get_sidebar();
            }

            if(get_theme_mod('craftnce_single_blog_page_layout_settings') === 'left_sidebar') {
                $middle_column = 8;
            } elseif(get_theme_mod('craftnce_single_blog_page_layout_settings') === 'right_sidebar') {
                $middle_column = 8;
            } elseif(get_theme_mod('craftnce_single_blog_page_layout_settings') === 'no_sidebar') {
                $middle_column = 12;
            }
        ?>
        <div class="col-xl-<?php echo esc_attr($middle_column); ?>">
            <div class="row">
                <div class="col">
                    <?php
                        if(has_post_thumbnail()) {
                            the_post_thumbnail('large',array('class'=>'img-fluid w-100'));
                        }
                    ?>
                    <div class="d-flex mb-2 text-muted mt-4">
                        <p class="m-0"><?php echo get_the_date(); ?></p>
                        <span class="mx-2 align-self-center text-primary fs-4 lh-1">•</span>
                        <p class="m-0 single-post-cat">
                            <?php
                                $category = get_the_category();
                                if(!empty($category)) {
                                    $firstCategory = $category[0]->cat_name;
                                    echo $firstCategory;
                                }
                            ?>
                        </p>
                    </div>
                    <h2 class="mb-4"><?php the_title(); ?></h2>
                    
                    <?php
                        the_content();
                    ?>
                </div>
            </div>

            <div class="row mt-5">
                <div class="d-flex flex-wrap">
                    <h4 class="mt-2 mt-md-0">Social Share - </h4>
                    <a href="#!" class="btn btn-outline-primary fb mx-1 mt-2 mt-md-0"><i class="fab fa-facebook-f me-3" aria-hidden="true"></i>Facebook</a>
                    <a href="#!" class="btn btn-outline-info mx-1 mt-2 mt-md-0"><i class="fab fa-twitter me-3" aria-hidden="true"></i>Twitter</a>
                    <a href="#!" class="btn btn-outline-primary fb mx-1 mt-2 mt-md-0"><i class="fab fa-linkedin-in me-3" aria-hidden="true"></i>Linked In</a>
                    <a href="#!" class="btn btn-outline-dark mx-1 mt-2 mt-md-0"><i class="far fa-envelope me-3" aria-hidden="true"></i>Mail</a>
                </div>
            </div>
        </div>
        <?php
            if(get_theme_mod('craftnce_single_blog_page_layout_settings') === 'right_sidebar') {
                get_sidebar();
            }
        ?>
    </div>
</div>

<?php
    get_footer();