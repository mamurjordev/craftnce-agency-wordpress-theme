<?php
    $wp_customize->add_section( 'craftnce_home_page_newsletter', array(
        'title'      => __( 'Newsletter Section', 'craftnce' ),
        'capability' => 'edit_theme_options',
        'panel'      => 'home_page_panel',
    ));

    /**
     * newsletter Section - Show newsletter Section
     */
    $wp_customize->add_setting('craftnce_show_home_newsletter_section_setting', array(
        'default'           => 1,
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => function( $input ){
            return ( isset( $input ) ? true : false );
        }
    ));
    $wp_customize->add_control('craftnce_show_home_newsletter_section_ctrl', array(
        'label'             =>  __('Show newsletter section', 'craftnce'),
        'section'           =>  'craftnce_home_page_newsletter',
        'settings'          =>  'craftnce_show_home_newsletter_section_setting',
        'type'              =>  'checkbox'
    ));
    
    /**
     * newsletter Section - Heading
     */
    $wp_customize->add_setting('craftnce_home_newsletter_heading_setting', array(
        'default'           => 'SignUp Our Newsletter',
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));
    $wp_customize->add_control('craftnce_home_newsletter_heading_ctrl', array(
        'label'             =>  __('Heading', 'craftnce'),
        'section'           =>  'craftnce_home_page_newsletter',
        'settings'          =>  'craftnce_home_newsletter_heading_setting',
        'type'              =>  'text'
    ));

    /**
     * newsletter Section - Sub-heading
     */
    $wp_customize->add_setting('craftnce_home_newsletter_subtext_setting', array(
        'default'           => 'Get in touch by subscribing here with your',
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));
    $wp_customize->add_control('craftnce_home_newsletter_subtext_ctrl', array(
        'label'             =>  __('Sub-heading', 'craftnce'),
        'section'           =>  'craftnce_home_page_newsletter',
        'settings'          =>  'craftnce_home_newsletter_subtext_setting',
        'type'              =>  'text'
    ));

    /**
     * newsletter Section - background Image
     */
    $wp_customize->add_setting('craftnce_home_newsletter_section_background_image_setting', array(
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
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'craftnce_home_newsletter_background_image_ctrl', array(
        'label'             =>  __('Newsletter Section background image', 'craftnce'),
        'section'           =>  'craftnce_home_page_newsletter',
        'settings'          =>  'craftnce_home_newsletter_section_background_image_setting',
        'button_labels'     => array(
            'select'    => 'Select Image',
            'remove'    => 'Remove Image',
            'change'    => 'Change Image',
        )
    )));