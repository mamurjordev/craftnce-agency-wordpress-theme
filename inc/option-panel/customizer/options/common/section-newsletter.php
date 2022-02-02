<?php
    $wp_customize->add_section( 'craftnce_page_newsletter', array(
        'title'      => __( 'Newsletter Section', 'craftnce' ),
        'capability' => 'edit_theme_options',
        'panel'      => 'common_section_panel',
    ));

    /**
     * newsletter Section - Show newsletter Section
     */
    $wp_customize->add_setting('craftnce_show_home_newsletter_section_setting', array(
        'default'           => 1,
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => function( $input ) {
            return ( ( isset( $input ) && true == $input ) ? true : false );
        }
    ));
    $wp_customize->add_control('craftnce_show_home_newsletter_section_ctrl', array(
        'label'             =>  __('Show in homepage', 'craftnce'),
        'section'           =>  'craftnce_page_newsletter',
        'settings'          =>  'craftnce_show_home_newsletter_section_setting',
        'type'              =>  'checkbox'
    ));
    $wp_customize->add_setting('craftnce_show_about_newsletter_section_setting', array(
        'default'           => 1,
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => function( $input ) {
            return ( ( isset( $input ) && true == $input ) ? true : false );
        }
    ));
    $wp_customize->add_control('craftnce_show_about_newsletter_section_ctrl', array(
        'label'             =>  __('Show in about page', 'craftnce'),
        'section'           =>  'craftnce_page_newsletter',
        'settings'          =>  'craftnce_show_about_newsletter_section_setting',
        'type'              =>  'checkbox'
    ));
    
    /**
     * newsletter Section - Heading
     */
    $wp_customize->add_setting('craftnce_newsletter_heading_setting', array(
        'default'           => 'SignUp Our Newsletter',
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('craftnce_newsletter_heading_ctrl', array(
        'label'             =>  __('Heading', 'craftnce'),
        'section'           =>  'craftnce_page_newsletter',
        'settings'          =>  'craftnce_newsletter_heading_setting',
        'type'              =>  'text'
    ));

    /**
     * newsletter Section - Sub-heading
     */
    $wp_customize->add_setting('craftnce_newsletter_subtext_setting', array(
        'default'           => 'Get in touch by subscribing here with your',
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('craftnce_newsletter_subtext_ctrl', array(
        'label'             =>  __('Sub-heading', 'craftnce'),
        'section'           =>  'craftnce_page_newsletter',
        'settings'          =>  'craftnce_newsletter_subtext_setting',
        'type'              =>  'text'
    ));

    /**
     * newsletter Section - Sub-heading
     */
    $wp_customize->add_setting('craftnce_newsletter_form_shortcode_setting', array(
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('craftnce_newsletter_form_shortcode_ctrl', array(
        'label'             =>  __('Mail subscription form shortcode', 'craftnce'),
        'section'           =>  'craftnce_page_newsletter',
        'settings'          =>  'craftnce_newsletter_form_shortcode_setting',
        'type'              =>  'textarea'
    ));

    /**
     * newsletter Section - background Image
     */
    $wp_customize->add_setting('craftnce_newsletter_section_background_image_setting', array(
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
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'craftnce_newsletter_background_image_ctrl', array(
        'label'             =>  __('Newsletter Section background image', 'craftnce'),
        'section'           =>  'craftnce_page_newsletter',
        'settings'          =>  'craftnce_newsletter_section_background_image_setting',
        'button_labels'     => array(
            'select'        => __('Select Image', 'craftnce'),
            'remove'        => __('Remove Image', 'craftnce'),
            'change'        => __('Change Image', 'craftnce'),
        )
    )));