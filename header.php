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
    <header>
        <nav class="navbar navbar-expand-lg navbar-light py-3">
            <div class="container">
                <a class="navbar-brand text-primary fw-bolder" href="<?php echo home_url(); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" class="img-fluid" alt="">
                </a>
    
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                </button>
    
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-sm">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Blog</a>
                        </li>
                    </ul>
                    <?php
                        // wp_nav_menu(array(
                        //     'theme_location'            =>  'primary-menu',
                        //     'menu_class'                =>  'navbar-nav ms-auto mb-2 mb-lg-0 text-sm',
                        //     'menu_id'                   =>  'primary-menu',
                        //     'menu-container'            =>  'ul'
                        // ));
                    ?>
                    <a href="#!" class="btn btn-primary rounded-pill text-sm">Contact Us</a>
                </div>
            </div>
        </nav>
    </header>