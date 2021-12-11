<?php
    require_once get_theme_file_path('/inc/option-panel/customizer/customizer-config.php');

    function craftnce_customizer($wp_customize) {
        $wp_customize->register_panel_type( 'PE_WP_Customize_Panel' );
        $wp_customize->register_section_type( 'PE_WP_Customize_Section' );

        $craftnceOptionMainPanel = new PE_WP_Customize_Panel( $wp_customize,'craftnce_options', array(
            'title'                     =>  __('Craftnce Options', 'craftnce'),
            'priority'                  =>  '1',
            'capability'                =>  'edit_theme_options',
            'icon'                      => 'dashicons-screenoptions',
        ));
        $wp_customize->add_panel( $craftnceOptionMainPanel );

        $homePagePanel = new PE_WP_Customize_Panel( $wp_customize,'home_page_panel', array(
            'title'                     =>  __('Home Page', 'craftnce'),
            'priority'                  =>  '1',
            'capability'                =>  'edit_theme_options',
            'panel'                     =>  'craftnce_options'
        ));
        $wp_customize->add_panel( $homePagePanel );

        // Customizer Repeater Class
        require_once get_theme_file_path('/lib/customizer/customizer-repeater.php');

        // Home page hero options
        require_once get_theme_file_path('/inc/option-panel/customizer/options/home-hero.php');
        require_once get_theme_file_path('/inc/option-panel/customizer/options/home-info.php');
        require_once get_theme_file_path('/inc/option-panel/customizer/options/home-features.php');
        require_once get_theme_file_path('/inc/option-panel/customizer/options/home-service.php');
        require_once get_theme_file_path('/inc/option-panel/customizer/options/home-counter.php');
    }
    add_action('customize_register', 'craftnce_customizer');

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