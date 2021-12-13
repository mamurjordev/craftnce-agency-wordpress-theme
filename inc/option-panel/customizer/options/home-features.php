<?php
    $wp_customize->add_section( 'craftnce_home_page_features', array(
        'title'      => __( 'Features Section', 'craftnce' ),
        'capability' => 'edit_theme_options',
        'panel'      => 'home_page_panel',
    ));

    /**
     * Features Section - Show Section
     */
    $wp_customize->add_setting('craftnce_show_home_features_section_setting', array(
        'default'           => 1,
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => function( $input ){
            return ( isset( $input ) ? true : false );
        }
    ));
    $wp_customize->add_control('craftnce_show_home_features_section_ctrl', array(
        'label'             =>  __('Show features section', 'craftnce'),
        'section'           =>  'craftnce_home_page_features',
        'settings'          =>  'craftnce_show_home_features_section_setting',
        'type'              =>  'checkbox'
    ));

    $wp_customize->add_setting( 'craftnce_home_features_item_settings', array(
        'sanitize_callback' => 'customizer_repeater_sanitize'
    ));
    $wp_customize->add_control( new Customizer_Repeater( $wp_customize, 'craftnce_show_home_features_item_ctrl', array(
        'label'                                             => esc_html__('Features Item','craftnce'),
        'section'                                           => 'craftnce_home_page_features',
        'settings'                                          =>  'craftnce_home_features_item_settings',
        'customizer_repeater_icon_control'                  => true,
        'customizer_repeater_title_control'                 => true,
    )));