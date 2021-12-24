<?php
    $wp_customize->add_section( 'craftnce_home_page_hero', array(
        'title'      => __( 'Hero Section', 'craftnce' ),
        'capability' => 'edit_theme_options',
        'panel'      => 'home_page_panel',
    ));

    /**
     * Hero Section - Heading
     */
    $wp_customize->add_setting('craftnce_home_hero_heading_setting', array(
        'default'           => 'digital service agency',
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));
    $wp_customize->add_control('craftnce_home_hero_heading_ctrl', array(
        'label'             =>  __('Hero Heading', 'craftnce'),
        'section'           =>  'craftnce_home_page_hero',
        'settings'          =>  'craftnce_home_hero_heading_setting',
        'type'              =>  'text'
    ));

    /**
     * Hero Section - Sub-Heading
     */
    $wp_customize->add_setting('craftnce_home_hero_subheading_setting', array(
        'default'           => 'digital service agency',
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));
    $wp_customize->add_control('craftnce_home_hero_subheading_ctrl', array(
        'label'             =>  __('Hero Sub-Heading', 'craftnce'),
        'section'           =>  'craftnce_home_page_hero',
        'settings'          =>  'craftnce_home_hero_subheading_setting',
        'type'              =>  'text'
    ));

    /**
     * Hero Section - Show First Button
     */
    $wp_customize->add_setting('craftnce_home_hero_show_btn1_setting', array(
        'default'           => 1,
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => function( $input ) {
            return ( ( isset( $input ) && true == $input ) ? true : false );
        }
    ));
    $wp_customize->add_control('craftnce_home_hero_show_btn1_ctrl', array(
        'label'             =>  __('Show Hero First Button', 'craftnce'),
        'section'           =>  'craftnce_home_page_hero',
        'settings'          =>  'craftnce_home_hero_show_btn1_setting',
        'type'              =>  'checkbox'
    ));

    /**
     * Hero Section - First Button Label
     */
    $wp_customize->add_setting('craftnce_home_hero_btn1_label_setting', array(
        'default'           =>  'first button',
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));
    $wp_customize->add_control('craftnce_home_hero_btn1_label_ctrl', array(
        'label'             =>  __('First Button Label', 'craftnce'),
        'section'           =>  'craftnce_home_page_hero',
        'settings'          =>  'craftnce_home_hero_btn1_label_setting',
        'type'              =>  'text'
    ));

    /**
     * Hero Section - First Button Link
     */
    $wp_customize->add_setting('craftnce_home_hero_btn1_link_setting', array(
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));
    $wp_customize->add_control('craftnce_home_hero_btn1_link_ctrl', array(
        'label'             =>  __('First Button Link', 'craftnce'),
        'section'           =>  'craftnce_home_page_hero',
        'settings'          =>  'craftnce_home_hero_btn1_link_setting',
        'type'              =>  'text'
    ));

    /**
     * Hero Section - First Button Icon
     */
    $wp_customize->add_setting('craftnce_home_hero_btn1_icon_setting', array(
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));
    $wp_customize->add_control('craftnce_home_hero_btn1_icon_ctrl', array(
        'label'             =>  __('First Button Icon Class', 'craftnce'),
        'section'           =>  'craftnce_home_page_hero',
        'settings'          =>  'craftnce_home_hero_btn1_icon_setting',
        'type'              =>  'text'
    ));

    /**
     * Hero Section - Show Second Button
     */
    $wp_customize->add_setting('craftnce_home_hero_show_btn2_setting', array(
        'default'           => 1,
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => function( $input ) {
            return ( ( isset( $input ) && true == $input ) ? true : false );
        }
    ));
    $wp_customize->add_control('craftnce_home_hero_show_btn2_ctrl', array(
        'label'             =>  __('Show Hero Second Button', 'craftnce'),
        'section'           =>  'craftnce_home_page_hero',
        'settings'          =>  'craftnce_home_hero_show_btn2_setting',
        'type'              =>  'checkbox'
    ));

    /**
     * Hero Section - Second Button Label
     */
    $wp_customize->add_setting('craftnce_home_hero_btn2_label_setting', array(
        'default'           =>  'second button',
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));
    $wp_customize->add_control('craftnce_home_hero_btn2_label_ctrl', array(
        'label'             =>  __('Second Button Label', 'craftnce'),
        'section'           =>  'craftnce_home_page_hero',
        'settings'          =>  'craftnce_home_hero_btn2_label_setting',
        'type'              =>  'text'
    ));

    /**
     * Hero Section - Second Button Link
     */
    $wp_customize->add_setting('craftnce_home_hero_btn2_link_setting', array(
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));
    $wp_customize->add_control('craftnce_home_hero_btn2_link_ctrl', array(
        'label'             =>  __('Second Button Link', 'craftnce'),
        'section'           =>  'craftnce_home_page_hero',
        'settings'          =>  'craftnce_home_hero_btn2_link_setting',
        'type'              =>  'text'
    ));

    /**
     * Hero Section - First Button Icon
     */
    $wp_customize->add_setting('craftnce_home_hero_btn2_icon_setting', array(
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));
    $wp_customize->add_control('craftnce_home_hero_btn2_icon_ctrl', array(
        'label'             =>  __('Second Button Icon Class', 'craftnce'),
        'section'           =>  'craftnce_home_page_hero',
        'settings'          =>  'craftnce_home_hero_btn2_icon_setting',
        'type'              =>  'text'
    ));

    /**
     * Hero Section - Featured Image
     */
    $wp_customize->add_setting('craftnce_home_hero_featured_image_setting', array(
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' =>  function( $file, $setting ) {
            $mimes = array(
                'jpg|jpeg|jpe' => 'image/jpeg',
                'gif'          => 'image/gif',
                'png'          => 'image/png'
            );

            $file_ext = wp_check_filetype( $file, $mimes );
            return ( $file_ext['ext'] ? $file : $setting->default );
        }
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'craftnce_home_hero_featured_image_ctrl', array(
        'label'             =>  __('Hero Featured Image', 'craftnce'),
        'section'           =>  'craftnce_home_page_hero',
        'settings'          =>  'craftnce_home_hero_featured_image_setting',
        'button_labels'     => array(
            'select'        => __('Select Image', 'craftnce'),
            'remove'        => __('Remove Image', 'craftnce'),
            'change'        => __('Change Image', 'craftnce'),
        )
    )));