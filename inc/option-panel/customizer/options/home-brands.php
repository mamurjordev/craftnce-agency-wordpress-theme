<?php
    $wp_customize->add_section( 'craftnce_home_page_brand', array(
        'title'      => __( 'Brand Section', 'craftnce' ),
        'capability' => 'edit_theme_options',
        'panel'      => 'home_page_panel',
    ));

    /**
     * brand Section - Show brand Section
     */
    $wp_customize->add_setting('craftnce_show_home_brand_section_setting', array(
        'default'           => 1,
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod'
    ));
    $wp_customize->add_control('craftnce_show_home_brand_section_ctrl', array(
        'label'             =>  __('Show brand First Button', 'craftnce'),
        'section'           =>  'craftnce_home_page_brand',
        'settings'          =>  'craftnce_show_home_brand_section_setting',
        'type'              =>  'checkbox'
    ));
    
    /**
     * Brand Logo
     */
    $wp_customize->add_setting( 'craftnce_home_brand_item_settings', array(
        'sanitize_callback' => 'customizer_repeater_sanitize'
    ));
    $wp_customize->add_control( new Customizer_Repeater( $wp_customize, 'craftnce_home_brand_item_ctrl', array(
        'label'                                             => esc_html__('Brand Logo Item','craftnce'),
        'section'                                           => 'craftnce_home_page_brand',
        'settings'                                          =>  'craftnce_home_brand_item_settings',
        'customizer_repeater_icon_control'                  => true,
        'customizer_repeater_image_control'                 => true,
    )));