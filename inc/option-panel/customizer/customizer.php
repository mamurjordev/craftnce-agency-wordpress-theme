<?php
    function craftnce_customizer($wp_customize) {
        $wp_customize->add_panel('craftnce_options', array(
            'title'                     =>  __('Craftnce Options', 'craftnce'),
            'priority'                  =>  '10',
            'capability'                =>  'edit_theme_options',
            'icon'                      => 'dashicons-screenoptions',
        ));

        // Home page hero options
        require_once get_theme_file_path('/inc/option-panel/customizer/options/customize-home.php');
    }
    add_action('customize_register', 'craftnce_customizer');