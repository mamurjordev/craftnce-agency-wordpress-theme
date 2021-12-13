<?php
    $wp_customize->add_section( 'craftnce_home_page_infography', array(
        'title'      => __( 'Infography Section', 'craftnce' ),
        'capability' => 'edit_theme_options',
        'panel'      => 'home_page_panel',
    ));

    /**
     * Infography Section - Show Infography Section
     */
    $wp_customize->add_setting('craftnce_show_home_infography_section_setting', array(
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
    $wp_customize->add_control('craftnce_show_home_infography_section_ctrl', array(
        'label'             =>  __('Show infography section', 'craftnce'),
        'section'           =>  'craftnce_home_page_infography',
        'settings'          =>  'craftnce_show_home_infography_section_setting',
        'type'              =>  'checkbox'
    ));

    /**
     * Infography Section - Heading
     */
    $wp_customize->add_setting('craftnce_home_infography_heading_setting', array(
        'default'           => 'Do you have any projects in your mind?',
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));
    $wp_customize->add_control('craftnce_home_infography_heading_ctrl', array(
        'label'             =>  __('Heading', 'craftnce'),
        'section'           =>  'craftnce_home_page_infography',
        'settings'          =>  'craftnce_home_infography_heading_setting',
        'type'              =>  'text'
    ));

    /**
     * Infography Section - Sub-heading
     */
    $wp_customize->add_setting('craftnce_home_infography_subheading_setting', array(
        'default'           => 'We achived honour experience in last 25 years.',
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));
    $wp_customize->add_control('craftnce_home_infography_subheading_ctrl', array(
        'label'             =>  __('Sub-heading', 'craftnce'),
        'section'           =>  'craftnce_home_page_infography',
        'settings'          =>  'craftnce_home_infography_subheading_setting',
        'type'              =>  'text'
    ));

    /**
     * Infography Section - Featured Image
     */
    $wp_customize->add_setting('craftnce_home_infography_section_featured_image_setting', array(
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
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'craftnce_home_infography_featured_image_ctrl', array(
        'label'             =>  __('Infography Featured Image', 'craftnce'),
        'section'           =>  'craftnce_home_page_infography',
        'settings'          =>  'craftnce_home_infography_section_featured_image_setting',
        'button_labels'     => array(
            'select'    => 'Select Image',
            'remove'    => 'Remove Image',
            'change'    => 'Change Image',
        )
    )));

    $wp_customize->add_setting( 'craftnce_home_infography_item_settings', array(
        'sanitize_callback' => 'customizer_repeater_sanitize'
    ));
    $wp_customize->add_control( new Customizer_Repeater( $wp_customize, 'craftnce_home_infography_item_ctrl', array(
        'label'                                             => esc_html__('Accordion Item','craftnce'),
        'section'                                           => 'craftnce_home_page_infography',
        'settings'                                          =>  'craftnce_home_infography_item_settings',
        'customizer_repeater_title_control'                 => true,
        'customizer_repeater_text_control'                  => true,
    )));