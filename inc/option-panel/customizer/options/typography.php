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
        'default'           => '#45ace0',
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
        'default'           => '#45ace0',
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
        'default'           => '#45ace0',
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'craftnce_overlay_color_ctrl', array(
        'label'             =>  __('Overlay Color', 'craftnce'),
        'section'           =>  'craftnce_typography',
        'settings'          =>  'craftnce_overlay_color_settings',
    )));