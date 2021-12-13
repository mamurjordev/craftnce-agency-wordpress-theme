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
        'type'              => 'theme_mod',
        'sanitize_callback' => function( $input, $setting ) {
            $input = sanitize_key($input);
            $choices = $setting->manager->get_control( $setting->id )->choices;
            return ( array_key_exists( $input, $choices ) ? $input : $setting->default );                
        }
    ));
    $wp_customize->add_control('craftnce_show_home_brand_section_ctrl', array(
        'label'             =>  __('Show brand logo section', 'craftnce'),
        'section'           =>  'craftnce_home_page_brand',
        'settings'          =>  'craftnce_show_home_brand_section_setting',
        'type'              =>  'checkbox'
    ));

    /**
     * brand_section Section - Heading
     */
    $wp_customize->add_setting('craftnce_brand_section_heading_setting', array(
        'default'           => 'Trusted over 100+ companies',
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));
    $wp_customize->add_control('craftnce_brand_section_heading_ctrl', array(
        'label'             =>  __('Brand Heading', 'craftnce'),
        'section'           =>  'craftnce_home_page_brand',
        'settings'          =>  'craftnce_brand_section_heading_setting',
        'type'              =>  'text'
    ));

    /**
     * brand Section - Sub-Heading
     */
    $wp_customize->add_setting('craftnce_brand_section_short_description_setting', array(
        'default'           => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum asperiores labore tenetur?',
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));
    $wp_customize->add_control('craftnce_brand_section_sub_heading_ctrl', array(
        'label'             =>  __('Sub Heading', 'craftnce'),
        'section'           =>  'craftnce_home_page_brand',
        'settings'          =>  'craftnce_brand_section_short_description_setting',
        'type'              =>  'textarea'
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