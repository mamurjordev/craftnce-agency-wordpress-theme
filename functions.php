<?php
    get_template_part('inc/craftnce-functions');
    get_template_part('lib/customizer/craftnce-customizer');
    get_template_part('lib/craftnce-nav-walker');

    if(!function_exists('craftnce_theme_setup')) {
        function craftnce_theme_setup() {
            // Load Theme TextDomain
            load_theme_textdomain('craftnce');
    
            // Theme Supports
            add_theme_support('title-tag');
            add_theme_support('description');
            add_theme_support('widgets');
            add_theme_support('post-thumbnails');
            add_theme_support('custom-header');
            add_theme_support('custom-logo');
            add_theme_support('custom-background');
            add_theme_support( 'automatic-feed-links' );
    
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
        wp_enqueue_style('craftnce-google-fonts', '//fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        wp_enqueue_style('craftnce-bootstrap-css', get_template_directory_uri().'/assets/css/bootstrap.css');
        wp_enqueue_style('craftnce-slick-css', get_template_directory_uri().'/assets/css/slick.css');
        wp_enqueue_style('craftnce-slick-theme-css', get_template_directory_uri().'/assets/css/slick-theme.css');
        wp_enqueue_style('craftnce-fontawesome-main', get_template_directory_uri().'/assets/css/fontawesome.css');
        wp_enqueue_style('craftnce-fontawesome-all', get_template_directory_uri().'/assets/css/all.css');
        wp_enqueue_style('craftnce-main-style', get_template_directory_uri().'/assets/css/style.css');
        wp_enqueue_style('craftnce-responsive-style', get_template_directory_uri().'/assets/css/responsive.css');
        wp_enqueue_style('craftnce-theme-default-css', get_stylesheet_uri());

        // JS Enqueue
        wp_enqueue_script( 'comment-reply' );
        wp_enqueue_script('craftnce-popper-js', get_template_directory_uri().'/assets/js/popper.js', null, time(), true);
        wp_enqueue_script('craftnce-bootstrap-js', get_template_directory_uri().'/assets/js/bootstrap.js', null, time(), true);
        wp_enqueue_script('craftnce-slick-slider-js', get_template_directory_uri().'/assets/js/slick.js', null, time(), true);
        wp_enqueue_script('craftnce-main-js', get_template_directory_uri().'/assets/js/main.js', array('jquery'), time(), true);
    }
    add_action('wp_enqueue_scripts', 'craftnce_assets_enqueue');

    // Sidebars and Widgets
    function craftnce_sidebar_widget_area() {
        // Page Sidebar
        register_sidebar( array(
            'name'          => __( 'Page Sidebar', 'craftnce' ),
            'id'            => 'page_sidebar',
            'description'   => __( 'Default page sidebar what will display in page if not select full width layout', 'craftnce' ),
            'before_widget' => '<div id="%1$s" class="sidebar-area rounded-3 p-4">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="mb-1">',
            'after_title'   => '</h4>',
        ));

        /**
         *  ================================================
         *  ======= Upper Panel Widget Area ================
         *  ================================================
         */
        register_sidebar( array(
            'name'          => __( '1st Upper Footer Widget Area', 'craftnce' ),
            'id'            => 'first_upper_footer_widget_area',
            'description'   => __( 'This widget area is for upper layout first panel', 'craftnce' ),
            'before_widget' => '<div id="%1$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h6 class="text-light">',
            'after_title'   => '</h6>',
        ));

        register_sidebar( array(
            'name'          => __( '2nd Upper Footer Widget Area', 'craftnce' ),
            'id'            => 'second_upper_footer_widget_area',
            'description'   => __( 'This widget area is for upper layout second panel', 'craftnce' ),
            'before_widget' => '<div id="%1$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h6 class="text-light">',
            'after_title'   => '</h6>',
        ));

        register_sidebar( array(
            'name'          => __( '3rd Upper Footer Widget Area', 'craftnce' ),
            'id'            => 'third_upper_footer_widget_area',
            'description'   => __( 'This widget area is for upper layout third panel', 'craftnce' ),
            'before_widget' => '<div id="%1$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h6 class="text-light">',
            'after_title'   => '</h6>',
        ));

        register_sidebar( array(
            'name'          => __( '4th Upper Footer Widget Area', 'craftnce' ),
            'id'            => 'fourth_upper_footer_widget_area',
            'description'   => __( 'This widget area is for upper layout fourth panel', 'craftnce' ),
            'before_widget' => '<div id="%1$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h6 class="text-light">',
            'after_title'   => '</h6>',
        ));

        register_sidebar( array(
            'name'          => __( '5th Upper Footer Widget Area', 'craftnce' ),
            'id'            => 'fifth_upper_footer_widget_area',
            'description'   => __( 'This widget area is for upper layout fifth panel', 'craftnce' ),
            'before_widget' => '<div id="%1$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h6 class="text-light">',
            'after_title'   => '</h6>',
        ));

        register_sidebar( array(
            'name'          => __( '6th Upper Footer Widget Area', 'craftnce' ),
            'id'            => 'sixth_upper_footer_widget_area',
            'description'   => __( 'This widget area is for upper layout sixth panel', 'craftnce' ),
            'before_widget' => '<div id="%1$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h6 class="text-light">',
            'after_title'   => '</h6>',
        ));

        /**
         *  ================================================
         *  ======= Bottom Panel Widget Area ================
         *  ================================================
         */
        register_sidebar( array(
            'name'          => __( '1st Bottom Footer Widget Area', 'craftnce' ),
            'id'            => 'first_bottom_footer_widget_area',
            'description'   => __( 'This widget area is for upper layout first panel', 'craftnce' ),
            'before_widget' => '<div id="%1$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h6 class="text-light">',
            'after_title'   => '</h6>',
        ));

        register_sidebar( array(
            'name'          => __( '2nd Upper Footer Widget Area', 'craftnce' ),
            'id'            => 'second_bottom_footer_widget_area',
            'description'   => __( 'This widget area is for upper layout first panel', 'craftnce' ),
            'before_widget' => '<div id="%1$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h6 class="text-light">',
            'after_title'   => '</h6>',
        ));

        register_sidebar( array(
            'name'          => __( '3rd Upper Footer Widget Area', 'craftnce' ),
            'id'            => 'third_bottom_footer_widget_area',
            'description'   => __( 'This widget area is for upper layout first panel', 'craftnce' ),
            'before_widget' => '<div id="%1$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h6 class="text-light">',
            'after_title'   => '</h6>',
        ));
    }
    add_action('widgets_init', 'craftnce_sidebar_widget_area');