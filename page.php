<?php
    get_header();
    the_post();

    if(get_theme_mod('craftnce_show_breadcrumb_setting')) {
        get_template_part('template-parts/common/breadcrumb'); 
    }
?>

<div class="container <?php echo esc_attr(get_theme_mod('craftnce_page_top_bottom_container_padding_setting') ? 'py-4' : ''); ?>">
    <div class="row">
        <?php
            if(get_theme_mod('craftnce_page_layout_settings') === 'left_sidebar') {
                get_sidebar();
            }

            if(get_theme_mod('craftnce_page_layout_settings') === 'left_sidebar') {
                $middle_column = 8;
            } elseif(get_theme_mod('craftnce_page_layout_settings') === 'right_sidebar') {
                $middle_column = 8;
            } elseif(get_theme_mod('craftnce_page_layout_settings') === 'no_sidebar') {
                $middle_column = 12;
            }
        ?>
        <div class="col-xl-<?php echo esc_attr($middle_column); ?>">
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
        <?php
            if(get_theme_mod('craftnce_page_layout_settings') === 'right_sidebar') {
                get_sidebar();
            }
        ?>
    </div>
</div>

<?php
    get_footer();