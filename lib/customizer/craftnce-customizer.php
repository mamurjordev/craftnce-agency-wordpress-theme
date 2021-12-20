<?php
    require_once get_theme_file_path('/inc/option-panel/customizer/customizer-config.php');

    function craftnce_customizer($wp_customize) {
        $wp_customize->register_panel_type( 'craftnce_WP_Customize_Panel' );
        $wp_customize->register_section_type( 'craftnce_WP_Customize_Section' );

        // Sanitize Customizer Control
        function customizer_repeater_sanitize($input){
            $input_decoded = json_decode($input,true);
        
            if(!empty($input_decoded)) {
                foreach ($input_decoded as $boxk => $box ){
                    foreach ($box as $key => $value){
                            $input_decoded[$boxk][$key] = wp_kses_post( force_balance_tags( $value ) );
                    }
                }
                return json_encode($input_decoded);
            }
            return $input;
        }

        $craftnceOptionMainPanel = new craftnce_WP_Customize_Panel( $wp_customize,'craftnce_options', array(
            'title'                     =>  __('Craftnce Options', 'craftnce'),
            'priority'                  =>  '1',
            'capability'                =>  'edit_theme_options',
            'icon'                      => 'dashicons-screenoptions',
        ));
        $wp_customize->add_panel( $craftnceOptionMainPanel );

        // Page Layout
        $page_layout_panel = new craftnce_WP_Customize_Panel( $wp_customize,'page_layout_panel', array(
            'title'                     =>  __('Page Layout', 'craftnce'),
            'capability'                =>  'edit_theme_options',
            'panel'                     =>  'craftnce_options'
        ));
        $wp_customize->add_panel( $page_layout_panel );

        // Page Layout Options
        require_once get_theme_file_path('/inc/option-panel/customizer/options/option-page-layout.php');

        // Typography
        $typography_panel = new craftnce_WP_Customize_Panel( $wp_customize,'typography_panel', array(
            'title'                     =>  __('Typography', 'craftnce'),
            'capability'                =>  'edit_theme_options',
            'panel'                     =>  'craftnce_options'
        ));
        $wp_customize->add_panel( $typography_panel );

        // Typography Options
        require_once get_theme_file_path('/inc/option-panel/customizer/options/typography.php');

        // Header
        $craftnce_header = new craftnce_WP_Customize_Panel( $wp_customize,'header_panel', array(
            'title'                     =>  __('Typography', 'craftnce'),
            'capability'                =>  'edit_theme_options',
            'panel'                     =>  'craftnce_options'
        ));
        $wp_customize->add_panel( $craftnce_header );

        // Typography Options
        require_once get_theme_file_path('/inc/option-panel/customizer/options/option-header.php');

        // Header
        $craftnce_footer = new craftnce_WP_Customize_Panel( $wp_customize,'footer_panel', array(
            'title'                     =>  __('Footer', 'craftnce'),
            'capability'                =>  'edit_theme_options',
            'panel'                     =>  'craftnce_options'
        ));
        $wp_customize->add_panel( $craftnce_footer );

        // Typography Options
        require_once get_theme_file_path('/inc/option-panel/customizer/options/option-footer.php');



        $homePagePanel = new craftnce_WP_Customize_Panel( $wp_customize,'home_page_panel', array(
            'title'                     =>  __('Home Page', 'craftnce'),
            'capability'                =>  'edit_theme_options',
            'panel'                     =>  'craftnce_options'
        ));
        $wp_customize->add_panel( $homePagePanel );

        // Customizer Repeater Class
        require_once get_theme_file_path('/lib/customizer/craftnce-customizer-repeater.php');

        // Home page hero options
        require_once get_theme_file_path('/inc/option-panel/customizer/options/home-hero.php');
        require_once get_theme_file_path('/inc/option-panel/customizer/options/home-info.php');
        require_once get_theme_file_path('/inc/option-panel/customizer/options/home-features.php');
        require_once get_theme_file_path('/inc/option-panel/customizer/options/home-service.php');
        require_once get_theme_file_path('/inc/option-panel/customizer/options/home-counter.php');
        require_once get_theme_file_path('/inc/option-panel/customizer/options/home-testimonials.php');
        require_once get_theme_file_path('/inc/option-panel/customizer/options/home-infography.php');
        require_once get_theme_file_path('/inc/option-panel/customizer/options/home-brands.php');
        require_once get_theme_file_path('/inc/option-panel/customizer/options/home-newsletter.php');
        require_once get_theme_file_path('/inc/option-panel/customizer/options/home-blog.php');

        // Blog page options
        require_once get_theme_file_path('/inc/option-panel/customizer/options/option-blog-page.php');
    }
    add_action('customize_register', 'craftnce_customizer');