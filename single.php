<?php
    get_header();
    the_post();

    get_template_part('template-parts/common/breadcrumb');
?>

<div id="content" class="container my-4 my-md-5">
    <div class="row">
        <div class="col-xl-<?php echo esc_attr(!get_theme_mod('craftnce_blog_single_full_width_setting') ? '8' : '12'); ?>">
            <div class="row">
                <div class="col">
                    <h2>
                        <?php
                            the_title();
                        ?>
                    </h2>
                    <div class="d-flex mb-4 text-muted text-sm">
                        <p class="m-0"><?php echo get_the_date(); ?></p>
                        <span class="mx-2 text-primary fs-4">•</span>
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
                    <?php
                        if(has_post_thumbnail()) {
                            the_post_thumbnail('large',array('class'=>'img-fluid w-100 mb-5'));
                        }
                    
                        the_content();
                        wp_link_pages();
                    ?>
                    <?php
                        $tags = get_the_tag_list('<ul class="post-tags mb-0 list-unstyled d-flex flex-wrap"><li class="mx-1">', '</li><li class="mx-1">', '</li></ul>');

                        if($tags) :
                    ?>

                    <div class="d-flex">
                        <h5 class="w-max mb-0"><?php _e('Tags - ', 'craftnce'); ?></h5>
                        <div class="align-self-center text-sm">
                            <?php echo $tags; ?>
                        </div>
                    </div>

                    <?php endif; ?>
                </div>
            </div>

            <?php
                // Social Share
                if(get_theme_mod('craftnce_single_blog_page_social_share_setting')) {
                    get_template_part('template-parts/common/social-share');
                }
                
                if(comments_open()) {
                    comments_template();
                } else {
                    _e('<p class="py-5">You can not comment in this post right now!</p>', 'craftnce');
                }
            ?>
        </div>
        <?php
            if(!get_theme_mod('craftnce_blog_single_full_width_setting')) {
                get_sidebar();
            }
        ?>
    </div>
</div>

<?php
    get_footer();