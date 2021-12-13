<?php
    get_template_part('inc/craftnce-functions');
    get_template_part('lib/customizer/customizer');
    get_template_part('lib/bootstrap5-nav-walker');

    if(!function_exists('craftnce_theme_setup')) {
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
    
            register_nav_menus(array(
                'primary-menu'              =>  __('Primary Menu', 'craftnce'),
            ));
        }
        add_action('after_setup_theme', 'craftnce_theme_setup');
    }

    function craftnce_assets_enqueue() {
        // Stylesheets Enqueue
        wp_enqueue_style('craftnce-bootstrap-css', '//cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css');
        wp_enqueue_style('craftnce-fontawesome-css', '//use.fontawesome.com/releases/v5.15.4/css/all.css');
        wp_enqueue_style('craftnce-remixicon-css', '//cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css');
        wp_enqueue_style('craftnce-google-fonts', '//fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap');
        wp_enqueue_style('craftnce-slick-css', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
        wp_enqueue_style('craftnce-slick-css', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css');
        wp_enqueue_style('craftnce-main-style', get_template_directory_uri().'/assets/css/style.css');
        wp_enqueue_style('craftnce-responsive-style', get_template_directory_uri().'/assets/css/responsive.css');
        wp_enqueue_style('theme-default-css', get_stylesheet_uri());

        // JS Enqueue
        wp_enqueue_script('craftnce-popper-js', '//cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js', null, time(), true);
        wp_enqueue_script('craftnce-bootstrap-js', '//cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js', null, time(), true);
        wp_enqueue_script('craftnce-slick-slider-js', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', null, time(), true);
        wp_enqueue_script('craftnce-main-js', get_template_directory_uri().'/assets/js/main.js', array('jquery'), time(), true);
    }
    add_action('wp_enqueue_scripts', 'craftnce_assets_enqueue');

    // Sidebars and Widgets
    function craftnce_sidebar_widget_area() {
        register_sidebar( array(
            'name'          => __( 'Page Sidebar', 'craftnce' ),
            'id'            => 'page_sidebar',
            'description'   => __( 'Default page sidebar what will display in page if not select full width layout', 'craftnce' ),
            'before_widget' => '<div id="%1$s" class="sidebar-area rounded-3 p-4">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="mb-1">',
            'after_title'   => '</h4>',
        ));
    }
    add_action('widgets_init', 'craftnce_sidebar_widget_area');