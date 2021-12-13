<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php wp_head(); ?>
</head>
<body class="<?php body_class(); ?>">
    <?php wp_body_open(); ?>
    <!-- Header Navigation -->
    <header id="site-header" class="sticky-top bg-light shadow-sm">
        <nav class="navbar navbar-expand-lg navbar-light py-2">
            <div class="container">
                <a class="navbar-brand text-primary fw-bolder" href="<?php echo esc_url(home_url()); ?>">
                    <?php
                        if(current_theme_supports('custom-logo')) {
                            $craftnce_custom_logo_id = get_theme_mod( 'custom_logo' );
                            $logo = wp_get_attachment_image_src( $craftnce_custom_logo_id , 'full' );

                            if($logo) {
                    ?>
                    <img src="<?php echo esc_url($logo[0]); ?>" class="img-fluid" alt="">
                    <?php
                            } else {
                                ?>
                                <h4 class="mb-0"><?php bloginfo('title-tag'); ?></h4>
                                <?php
                            }
                        }
                    ?>
                </a>
    
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                </button>
    
                <div class="collapse navbar-collapse flex-grow-0" id="navbarSupportedContent">
                    <?php
                        if(has_nav_menu('primary-menu')) {
                            wp_nav_menu(array(
                                'theme_location'            =>  'primary-menu',
                                'menu_class'                =>  '',
                                'menu-container'            =>  'false',
                                'fallback_cb'               => '__return_false',
                                'items_wrap'                => '<ul id="%1$s" class="navbar-nav ms-auto mb-2 mb-lg-0 text-sm %2$s">%3$s</ul>',
                                'depth'                     => 2,
                                'walker'                    => new bootstrap_5_wp_nav_menu_walker(),
                            ));
                        } else {
                            echo '<a class="text-primary text-sm nav-menu-create-notice" href="'.home_url('/wp-admin/nav-menus.php').'">Create nav menu first</a>';
                        }
                    ?>
                    <?php
                        if(get_theme_mod('craftnce_header_menu_show_last_button_label_settings')) :
                    ?>
                    <a href="<?php echo esc_url(get_theme_mod('craftnce_header_menu_last_button_link_settings')); ?>" class="btn btn-primary rounded-pill text-sm">
                        <?php
                            echo esc_html( get_theme_mod('craftnce_header_menu_last_button_label_settings') );
                        ?>
                    </a>
                    <?php endif; ?>
                </div>
            </div>
        </nav>
    </header>