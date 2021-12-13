<?php
    $wp_customize->add_section( 'craftnce_header', array(
        'title'      => __( 'Header', 'craftnce' ),
        'capability' => 'edit_theme_options',
        'panel'      => 'craftnce_options',
    ));

    /**
     * Show Button
     */
    $wp_customize->add_setting('craftnce_header_menu_show_last_button_label_settings', array(
        'default'           => 1,
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => function( $input ) {
            return ( ( isset( $input ) && true == $input ) ? true : false );
        }
    ));
    $wp_customize->add_control('craftnce_header_menu_show_last_button_label_ctrl', array(
        'label'             =>  __('Show Button', 'craftnce'),
        'section'           =>  'craftnce_header',
        'settings'          =>  'craftnce_header_menu_show_last_button_label_settings',
        'type'              =>  'checkbox',
    ));

    /**
     * Button Label
     */
    $wp_customize->add_setting('craftnce_header_menu_last_button_label_settings', array(
        'default'           => 'Contact Us',
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));
    $wp_customize->add_control('craftnce_header_menu_last_button_label_ctrl', array(
        'label'             =>  __('Button Label', 'craftnce'),
        'section'           =>  'craftnce_header',
        'settings'          =>  'craftnce_header_menu_last_button_label_settings',
        'type'              =>  'text',
    ));

    /**
     * Button Link
     */
    $wp_customize->add_setting('craftnce_header_menu_last_button_link_settings', array(
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));
    $wp_customize->add_control('craftnce_header_menu_last_button_link_ctrl', array(
        'label'             =>  __('Button Link', 'craftnce'),
        'section'           =>  'craftnce_header',
        'settings'          =>  'craftnce_header_menu_last_button_link_settings',
        'type'              =>  'text',
    ));