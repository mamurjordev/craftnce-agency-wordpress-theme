<?php
    $wp_customize->add_section( 'craftnce_typography', array(
        'title'      => __( 'Colors', 'craftnce' ),
        'capability' => 'edit_theme_options',
        'panel'      => 'typography_panel',
    ));

    /**
     * Primary Color
     */
    $wp_customize->add_setting('craftnce_primary_color_settings', array(
        'default'           => '#007FE4',
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'craftnce_primary_color_ctrl', array(
        'label'             =>  __('Primary Color', 'craftnce'),
        'section'           =>  'craftnce_typography',
        'settings'          =>  'craftnce_primary_color_settings',
    )));

    /**
     * Secondary Color
     */
    $wp_customize->add_setting('craftnce_secondary_color_settings', array(
        'default'           => '#EDF5FB',
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'craftnce_secondary_color_ctrl', array(
        'label'             =>  __('Secondary Color', 'craftnce'),
        'section'           =>  'craftnce_typography',
        'settings'          =>  'craftnce_secondary_color_settings',
    )));

    /**
     * Overlay Color
     */
    $wp_customize->add_setting('craftnce_overlay_color_settings', array(
        'default'           => '#082032',
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'craftnce_overlay_color_ctrl', array(
        'label'             =>  __('Overlay Color', 'craftnce'),
        'section'           =>  'craftnce_typography',
        'settings'          =>  'craftnce_overlay_color_settings',
    )));

    /**
     * Section Background Color
     */
    $wp_customize->add_setting('craftnce_section_bg_color_settings', array(
        'default'           => '#082032',
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'craftnce_section_bg_color_ctrl', array(
        'label'             =>  __('Section Background Color', 'craftnce'),
        'section'           =>  'craftnce_typography',
        'settings'          =>  'craftnce_section_bg_color_settings',
    )));

    /**
     * Footer Background Color
     */
    $wp_customize->add_setting('craftnce_footer_bg_color_settings', array(
        'default'           => '#082032',
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'craftnce_footer_bg_color_ctrl', array(
        'label'             =>  __('Footer Section Background Color', 'craftnce'),
        'section'           =>  'craftnce_typography',
        'settings'          =>  'craftnce_footer_bg_color_settings',
    )));