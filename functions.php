<?php
    function craftnce_theme_setup() {
        // Load Theme TextDomain
        load_theme_textdomain('craftnce');

        // Theme Supports
        add_theme_support('title-tag');
        add_theme_support('description');
        add_theme_support('menus');
        add_theme_support('widgets');
        add_theme_support('post-thumbnails');
        add_theme_support('custom-header');
        add_theme_support('custom-logo');
        add_theme_support('custom-background');

        add_theme_support(
			'html5',
			array(
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
				'navigation-widgets',
			)
		);
    }
    add_action('after_setup_theme', 'craftnce_theme_setup');

    function craftnce_assets_enqueue() {
        // Stylesheets Enqueue
        wp_enqueue_style('craftnce-bootstrap-css', '//cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css');
        wp_enqueue_style('craftnce-fontawesome-css', '//use.fontawesome.com/releases/v5.15.4/css/all.css');
        wp_enqueue_style('craftnce-remixicon-css', '//cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css');
        wp_enqueue_style('craftnce-google-fonts', '//fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap');
        wp_enqueue_style('craftnce-slick-slider-css', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
        wp_enqueue_style('craftnce-slick-nav-css', get_template_directory_uri().'/assets/css/slicknav-1.0.10.min.css');
        wp_enqueue_style('craftnce-main-style', get_template_directory_uri().'/assets/css/style.css');
        wp_enqueue_style('craftnce-responsive-style', get_template_directory_uri().'/assets/css/responsive.css');
        wp_enqueue_style('theme-default-css', get_stylesheet_uri());
    }
    add_action('wp_enqueue_scripts', 'craftnce_assets_enqueue');
