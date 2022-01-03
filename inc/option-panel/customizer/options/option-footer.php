<?php
    $wp_customize->add_section( 'craftnce_footer', array(
        'title'      => __( 'Footer', 'craftnce' ),
        'capability' => 'edit_theme_options',
        'panel'      => 'craftnce_options',
    ));

    /**
     * Copyright Text
     */
    $wp_customize->add_setting('craftnce_copyright_text_settings', array(
        'default'           => '@ Craftnce | Developed by <a href="https://mamurjor.com/">Mamurjor</a> | 2021',
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));
    $wp_customize->add_control('craftnce_copyright_text_ctrl', array(
        'label'             =>  __('Copyright Text', 'craftnce'),
        'section'           =>  'craftnce_footer',
        'settings'          =>  'craftnce_copyright_text_settings',
        'type'              =>  'textarea',
    ));