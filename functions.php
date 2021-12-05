<?php
    // TGM
    get_template_part('inc/required-plugins');
    get_template_part('lib/bootstrap5-nav-walker');

    // Codestar Initialize
    get_template_part('lib/codestar-framework/codestar-framework');
    get_template_part('inc/codestar-config');

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
        wp_enqueue_style('craftnce-slick-css', get_template_directory_uri().'/assets/css/slick.css');
        wp_enqueue_style('craftnce-slick-theme-css', get_template_directory_uri().'/assets/css/slick-theme.css');
        wp_enqueue_style('craftnce-slick-nav-css', get_template_directory_uri().'/assets/css/slicknav-1.0.10.min.css');
        wp_enqueue_style('craftnce-main-style', get_template_directory_uri().'/assets/css/style.css');
        wp_enqueue_style('craftnce-responsive-style', get_template_directory_uri().'/assets/css/responsive.css');
        wp_enqueue_style('theme-default-css', get_stylesheet_uri());

        // JS Enqueue
        wp_enqueue_script('craftnce-popper-js', '//cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js', null, time(), true);
        wp_enqueue_script('craftnce-bootstrap-js', '//cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js', null, time(), true);
        wp_enqueue_script('craftnce-slick-slider-js', get_template_directory_uri().'/assets/js/slick.min.js', array('jquery'), time(), true);
        wp_enqueue_script('craftnce-slick-nav-js', get_template_directory_uri().'/assets/js/slicknav-1.0.10.min.js', array('jquery'), time(), true);
        wp_enqueue_script('craftnce-main-js', get_template_directory_uri().'/assets/js/main.js', array('jquery'), time(), true);
    }
    add_action('wp_enqueue_scripts', 'craftnce_assets_enqueue');


    // Get Codestar Option
    if ( ! function_exists( 'craftnce_get_data' ) ) {
        function craftnce_get_data( $option = '', $default = null ) {
            $options = get_option( 'craftnce_options' );
            return ( isset( $options[$option] ) ) ? $options[$option] : $default;
        }
    }

    // Breadcrumb
    function get_the_breadcrumb() {
        global $post;
        echo '<ol class="breadcrumb mb-0">';
        if (!is_home()) {
            echo '<li class="breadcrumb-item"><a href="';
            echo get_option('home');
            echo '">';
            echo 'Home';
            echo '</a></li>';
            if (is_category() || is_single()) {
                echo '<li>';
                the_category(' </li><li class="breadcrumb-item active"> / </li><li> ');
                if (is_single()) {
                    echo '</li><li class="breadcrumb-item active"> / </li><li>';
                    the_title();
                    echo '</li>';
                }
            } elseif (is_page()) {
                if($post->post_parent){
                    $anc = get_post_ancestors( $post->ID );
                    $title = get_the_title();
                    foreach ( $anc as $ancestor ) {
                        $output = '<li class="breadcrumb-item"><a href="'.get_permalink($ancestor).'" title="'.get_the_title($ancestor).'">'.get_the_title($ancestor).'</a></li> <li class="breadcrumb-item active">/</li>';
                    }
                    echo $output;
                    echo '<strong title="'.$title.'"> '.$title.'</strong>';
                } else {
                    echo '<li class="breadcrumb-item active">'.get_the_title().'</li>';
                }
            }
        }
        elseif (is_tag()) {single_tag_title();}
        elseif (is_day()) {echo'<li class="breadcrumb-item active">Archive for '; the_time('F jS, Y'); echo'</li>';}
        elseif (is_month()) {echo'<li class="breadcrumb-item active">Archive for '; the_time('F, Y'); echo'</li>';}
        elseif (is_year()) {echo'<li class="breadcrumb-item active">Archive for '; the_time('Y'); echo'</li>';}
        elseif (is_author()) {echo'<li class="breadcrumb-item active">Author Archive'; echo'</li>';}
        elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {echo '<li class="breadcrumb-item active">Blog Archives'; echo'</li>';}
        elseif (is_search()) {echo'<li class="breadcrumb-item active">Search Results'; echo'</li>';}
        echo '</ol>';
    }