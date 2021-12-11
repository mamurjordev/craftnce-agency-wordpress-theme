<?php
    $wp_customize->add_section( 'craftnce_home_page_service', array(
        'title'      => __( 'Service Section', 'craftnce' ),
        'capability' => 'edit_theme_options',
        'panel'      => 'home_page_panel',
    ));

    /**
     * service Section - Show Section
     */
    $wp_customize->add_setting('craftnce_show_home_service_section_setting', array(
        'default'           => 1,
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod'
    ));
    $wp_customize->add_control('craftnce_show_home_service_section_ctrl', array(
        'label'             =>  __('Show service section', 'craftnce'),
        'section'           =>  'craftnce_home_page_service',
        'settings'          =>  'craftnce_show_home_service_section_setting',
        'type'              =>  'checkbox'
    ));

    /**
     * service Section - Heading
     */
    $wp_customize->add_setting('craftnce_home_service_heading_setting', array(
        'default'           => ' Your Success With Solution',
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod'
    ));
    $wp_customize->add_control('craftnce_home_service_heading_ctrl', array(
        'label'             =>  __('Heading', 'craftnce'),
        'section'           =>  'craftnce_home_page_service',
        'settings'          =>  'craftnce_home_service_heading_setting',
        'type'              =>  'text'
    ));

    /**
     * service Section - Sub-heading
     */
    $wp_customize->add_setting('craftnce_home_service_subheading_setting', array(
        'default'           => ' Our amazing services',
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod'
    ));
    $wp_customize->add_control('craftnce_home_service_subheading_ctrl', array(
        'label'             =>  __('Sub-heading', 'craftnce'),
        'section'           =>  'craftnce_home_page_service',
        'settings'          =>  'craftnce_home_service_subheading_setting',
        'type'              =>  'text'
    ));
    
    // Service Items
    $wp_customize->add_setting( 'craftnce_home_service_item_settings', array(
        'sanitize_callback' => 'customizer_repeater_sanitize'
    ));
    $wp_customize->add_control( new Customizer_Repeater( $wp_customize, 'craftnce_show_home_service_item_ctrl', array(
        'label'                                             =>  esc_html__('Service Item','craftnce'),
        'section'                                           =>  'craftnce_home_page_service',
        'settings'                                          =>  'craftnce_home_service_item_settings',
        'customizer_repeater_icon_control'                  =>  true,
        'customizer_repeater_image_control'                 =>  true,
        'customizer_repeater_title_control'                 =>  true,
        'customizer_repeater_text_control'                  =>  true,
    )));