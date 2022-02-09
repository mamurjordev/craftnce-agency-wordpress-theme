<?php
    $wp_customize->add_section( 'craftnce_footer', array(
        'title'      => __( 'Footer', 'craftnce' ),
        'capability' => 'edit_theme_options',
        'panel'      => 'craftnce_options',
    ));

    /**
     * Footer Widget Section - Show Section
     */
    $wp_customize->add_setting('craftnce_footer_widget_show_setting', array(
        'default'           => 1,
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => function( $input ) {
            return ( ( isset( $input ) && true == $input ) ? true : false );
        }
    ));
    $wp_customize->add_control('craftnce_footer_widget_show_ctrl', array(
        'label'             =>  __('Show footer widget area', 'craftnce'),
        'section'           =>  'craftnce_footer',
        'settings'          =>  'craftnce_footer_widget_show_setting',
        'type'              =>  'checkbox'
    ));

    $wp_customize->add_setting('craftnce_footer_widget_upper_section_show_setting', array(
        'default'           => 1,
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => function( $input ) {
            return ( ( isset( $input ) && true == $input ) ? true : false );
        }
    ));
    $wp_customize->add_control('craftnce_footer_widget_upper_section_show_ctrl', array(
        'label'             =>  __('Show upper widget area', 'craftnce'),
        'section'           =>  'craftnce_footer',
        'settings'          => 'craftnce_footer_widget_upper_section_show_setting',
        'type'              =>  'checkbox'
    ));

    $wp_customize->add_setting('craftnce_footer_widget_bottom_section_show_setting', array(
        'default'           => 1,
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => function( $input ) {
            return ( ( isset( $input ) && true == $input ) ? true : false );
        }
    ));
    $wp_customize->add_control('craftnce_footer_widget_bottom_section_show_ctrl', array(
        'label'             =>  __('Show bottom widget area', 'craftnce'),
        'section'           =>  'craftnce_footer',
        'settings'          =>  'craftnce_footer_widget_bottom_section_show_setting',
        'type'              =>  'checkbox'
    ));

    /**
     * Footer Widget Section - Layout Fix
     */
    $wp_customize->add_setting('craftnce_footer_widget_upper_section_layout_setting', array(
        'default'           =>  'col_6',
        'capability'        =>  'edit_theme_options',
        'transport'         =>  'refresh',
        'type'              =>  'theme_mod',
        // 'sanitize_callback' =>  function( $input, $setting ){
        //     $input = sanitize_key($input);
        //     $choices = $setting->manager->get_control( $setting->id )->choices;
        //     return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
        // }
    ));

    $wp_customize->add_control( 'craftnce_footer_widget_upper_section_layout_ctrl', array(
        'type'          => 'select',
        'label'         => __( 'Select Upper Widget Layout', 'craftnce' ),
        'section'       => 'craftnce_footer',
        'settings'      => 'craftnce_footer_widget_upper_section_layout_setting',
        'description'   => __( 'Select layout', 'craftnce' ),
        'choices'       => array(
            'col_6'             => __( 'Column - 6', 'craftnce' ),
            'col_4'             => __( 'Column - 4', 'craftnce' ),
            'col_2'             => __( 'Column - 2', 'craftnce' ),
        ),
    ) );

    $wp_customize->add_setting('craftnce_footer_widget_bottom_section_layout_setting', array(
        'default'           =>  'col_b_3',
        'capability'        =>  'edit_theme_options',
        'transport'         =>  'refresh',
        'type'              =>  'theme_mod',
        // 'sanitize_callback' =>  function( $input, $setting ){
        //     $input = sanitize_key($input);
        //     $choices = $setting->manager->get_control( $setting->id )->choices;
        //     return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
        // }
    ));

    $wp_customize->add_control( 'craftnce_footer_widget_bottom_section_layout_ctrl', array(
        'type'          => 'select',
        'label'         => __( 'Select Bottom Widget Layout', 'craftnce' ),
        'section'       =>  'craftnce_footer',
        'settings'      =>  'craftnce_footer_widget_bottom_section_layout_setting',
        'description'   => __( 'This is a custom select option.', 'craftnce' ),
        'choices'       => array(
            'col_b_3'             => __( 'Column - 3', 'craftnce' ),
            'col_b_2'             => __( 'Column - 2', 'craftnce' ),
            'col_b_1'             => __( 'Column - 1', 'craftnce' ),
        ),
    ) );

    /**
     * Copyright Text
     */
    $wp_customize->add_setting('craftnce_copyright_text_settings', array(
        'default'           => '@ Craftnce | Developed by <a href="https://mamurjor.com/">Mamurjor</a> | 2021',
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('craftnce_copyright_text_ctrl', array(
        'label'             =>  __('Copyright Text', 'craftnce'),
        'section'           =>  'craftnce_footer',
        'settings'          =>  'craftnce_copyright_text_settings',
        'type'              =>  'textarea',
    ));