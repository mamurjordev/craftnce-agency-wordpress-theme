<?php
    $wp_customize->add_section( 'craftnce_about_page_casestudy', array(
        'title'         => __( 'Case Study', 'craftnce' ),
        'capability'    => 'edit_theme_options',
        'panel'         => 'about_page_panel',
    ));

    /**
     * casestudy Section - Show casestudy Section
     */
    $wp_customize->add_setting('craftnce_show_about_page_casestudy_section_setting', array(
        'default'           => 1,
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => function( $input ) {
            return ( ( isset( $input ) && true == $input ) ? true : false );
        }
    ));
    $wp_customize->add_control('craftnce_show_about_casestudy_section_ctrl', array(
        'label'             =>  __('Show casestudy section', 'craftnce'),
        'section'           =>  'craftnce_about_page_casestudy',
        'settings'          =>  'craftnce_show_about_page_casestudy_section_setting',
        'type'              =>  'checkbox'
    ));

    /**
     * casestudy Section - Heading
     */
    $wp_customize->add_setting('craftnce_about_casestudy_heading_setting', array(
        'default'           => 'For the next generation of big businesses',
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));
    $wp_customize->add_control('craftnce_about_casestudy_heading_ctrl', array(
        'label'             =>  __('Heading', 'craftnce'),
        'section'           =>  'craftnce_about_page_casestudy',
        'settings'          =>  'craftnce_about_casestudy_heading_setting',
        'type'              =>  'text'
    ));

    /**
     * casestudy Section - Description
     */
    $wp_customize->add_setting('craftnce_about_casestudy_description_setting', array(
        'default'           =>  'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour. If you are going to use a passage of Lorem Ipsum, you need to be sure.',
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));
    $wp_customize->add_control('craftnce_about_casestudy_description_ctrl', array(
        'label'             =>  __('Description', 'craftnce'),
        'section'           =>  'craftnce_about_page_casestudy',
        'settings'          =>  'craftnce_about_casestudy_description_setting',
        'type'              =>  'textarea'
    ));
    
    /**
     * casestudy Section - Featured Image
     */
    $wp_customize->add_setting('craftnce_about_casestudy_section_featured_image_setting', array(
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
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'craftnce_about_casestudy_featured_image_ctrl', array(
        'label'             =>  __('casestudy Featured Image', 'craftnce'),
        'section'           =>  'craftnce_about_page_casestudy',
        'settings'          =>  'craftnce_about_casestudy_section_featured_image_setting',
        'button_labels'     => array(
            'select'        => __('Select Image', 'craftnce'),
            'remove'        => __('Remove Image', 'craftnce'),
            'change'        => __('Change Image', 'craftnce'),
        )
    )));