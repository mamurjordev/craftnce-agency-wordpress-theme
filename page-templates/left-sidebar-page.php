<?php
    /**
     * Template Name: Left Sidebar
     */

    get_header();
    the_post();

    if(get_theme_mod('craftnce_show_breadcrumb_setting')) {
        get_template_part('template-parts/common/breadcrumb'); 
    }
?>

<div class="container <?php echo esc_attr(get_theme_mod('craftnce_page_top_bottom_container_padding_setting') ? 'py-4' : ''); ?>">
    <div class="row">
        <?php
            get_sidebar();
        ?>
        <div class="col-xl-8">
            <div class="row">
                <div class="col">
                    <?php
                        if(has_post_thumbnail()) {
                            the_post_thumbnail();
                        }
                        
                        the_content();
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    get_footer();