<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title><?php bloginfo( 'title-tag' ); ?></title>
    <?php wp_head(); ?>
</head>
<body class="<?php body_class(); ?>">
    <?php wp_body_open(); ?>
    <!-- Header Navigation -->
    <header class="sticky-top bg-light">
        <nav class="navbar navbar-expand-lg navbar-light py-3">
            <div class="container">
                <a class="navbar-brand text-primary fw-bolder" href="<?php echo home_url(); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" class="img-fluid" alt="">
                </a>
    
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                </button>
    
                <div class="collapse navbar-collapse flex-grow-0" id="navbarSupportedContent">
                    <?php
                        wp_nav_menu(array(
                            'theme_location'            =>  'primary-menu',
                            'menu_class'                =>  '',
                            'menu-container'            =>  'false',
                            'fallback_cb' => '__return_false',
                            'items_wrap' => '<ul id="%1$s" class="navbar-nav ms-auto mb-2 mb-lg-0 text-sm %2$s">%3$s</ul>',
                            'depth' => 2,
                            'walker' => new bootstrap_5_wp_nav_menu_walker(),
                        ));
                    ?>
                    <a href="#!" class="btn btn-primary rounded-pill text-sm">Contact Us</a>
                </div>
            </div>
        </nav>
    </header>