<?php
    $wp_customize->add_section( 'craftnce_about_page_info', array(
        'title'         => __( 'Info Section', 'craftnce' ),
        'capability'    => 'edit_theme_options',
        'panel'         => 'about_page_panel',
    ));

    /**
     * Info Section - Show Info Section
     */
    $wp_customize->add_setting('craftnce_show_about_page_info_section_setting', array(
        'default'           => 1,
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => function( $input ) {
            return ( ( isset( $input ) && true == $input ) ? true : false );
        }
    ));
    $wp_customize->add_control('craftnce_show_about_info_section_ctrl', array(
        'label'             =>  __('Show info section', 'craftnce'),
        'section'           =>  'craftnce_about_page_info',
        'settings'          =>  'craftnce_show_about_page_info_section_setting',
        'type'              =>  'checkbox'
    ));

    /**
     * Info Section - Heading
     */
    $wp_customize->add_setting('craftnce_about_info_heading_setting', array(
        'default'           => 'For the next generation of big businesses',
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('craftnce_about_info_heading_ctrl', array(
        'label'             =>  __('Heading', 'craftnce'),
        'section'           =>  'craftnce_about_page_info',
        'settings'          =>  'craftnce_about_info_heading_setting',
        'type'              =>  'text'
    ));

    /**
     * Info Section - Sub-heading
     */
    $wp_customize->add_setting('craftnce_about_info_subheading_setting', array(
        'default'           => 'history',
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('craftnce_about_info_subheading_ctrl', array(
        'label'             =>  __('Sub-heading', 'craftnce'),
        'section'           =>  'craftnce_about_page_info',
        'settings'          =>  'craftnce_about_info_subheading_setting',
        'type'              =>  'text'
    ));

    /**
     * Info Section - Description
     */
    $wp_customize->add_setting('craftnce_about_info_description_setting', array(
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('craftnce_about_info_description_ctrl', array(
        'label'             =>  __('Description', 'craftnce'),
        'section'           =>  'craftnce_about_page_info',
        'settings'          =>  'craftnce_about_info_description_setting',
        'type'              =>  'textarea'
    ));
    
    /**
     * Info Section - Featured Image
     */
    $wp_customize->add_setting('craftnce_about_info_section_featured_image_setting', array(
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
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'craftnce_about_info_featured_image_ctrl', array(
        'label'             =>  __('Info Featured Image', 'craftnce'),
        'section'           =>  'craftnce_about_page_info',
        'settings'          =>  'craftnce_about_info_section_featured_image_setting',
        'button_labels'     => array(
            'select'        => __('Select Image', 'craftnce'),
            'remove'        => __('Remove Image', 'craftnce'),
            'change'        => __('Change Image', 'craftnce'),
        )
    )));