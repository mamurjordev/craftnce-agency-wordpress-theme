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
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('craftnce_about_info_heading_ctrl', array(
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
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('craftnce_about_casestudy_description_ctrl', array(
        'label'             =>  __('Description', 'craftnce'),
        'section'           =>  'craftnce_about_page_casestudy',
        'settings'          =>  'craftnce_about_casestudy_description_setting',
        'type'              =>  'textarea'
    ));

    /**
     * casestudy Section - Show casestudy box Section
     */
    $wp_customize->add_setting('show_case_study_box', array(
        'default'           => 1,
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => function( $input ) {
            return ( ( isset( $input ) && true == $input ) ? true : false );
        }
    ));
    $wp_customize->add_control('show_case_study_box_ctrl', array(
        'label'             =>  __('Show casestudy box', 'craftnce'),
        'section'           =>  'craftnce_about_page_casestudy',
        'settings'          =>  'show_case_study_box',
        'type'              =>  'checkbox'
    ));

    /**
     * casestudy Section - Show casestudy box content Section
     */
    $wp_customize->add_setting('show_case_study_box_content', array(
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => function( $input ) {
            return ( ( isset( $input ) && true == $input ) ? true : false );
        }
    ));
    $wp_customize->add_control('show_case_study_box_content_ctrl', array(
        'label'             =>  __('Show casestudy box content section', 'craftnce'),
        'section'           =>  'craftnce_about_page_casestudy',
        'settings'          =>  'show_case_study_box_content',
        'type'              =>  'checkbox'
    ));

    /**
     * casestudy Box Section - Heading
     */
    $wp_customize->add_setting('craftnce_about_casestudy_box_heading_setting', array(
        'default'           => 'If you are going to use a passage of Lorem Ipsum you need to be sure. Compare us between others companies.',
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('craftnce_about_casestudy_heading_ctrl', array(
        'label'             =>  __('Case Study Box Heading', 'craftnce'),
        'section'           =>  'craftnce_about_page_casestudy',
        'settings'          =>  'craftnce_about_casestudy_box_heading_setting',
        'type'              =>  'text'
    ));

    /**
     * casestudy Section - Description
     */
    $wp_customize->add_setting('craftnce_about_box_casestudy_description_setting', array(
        'default'           =>  'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour. If you are going to use a passage of Lorem Ipsum, you need to be sure.',
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('craftnce_about_casestudy_box_description_ctrl', array(
        'label'             =>  __('Case Study Box Description', 'craftnce'),
        'section'           =>  'craftnce_about_page_casestudy',
        'settings'          =>  'craftnce_about_box_casestudy_description_setting',
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

    // Case Study Box Grid Item
    $wp_customize->add_setting( 'craftnce_about_casestudy_box_item_settings', array(
        'sanitize_callback' => 'customizer_repeater_sanitize'
    ));
    $wp_customize->add_control( new Customizer_Repeater( $wp_customize, 'craftnce_about_casestudy_box_item_ctrl', array(
        'label'                                             =>  __('Casestudy Box Item','craftnce'),
        'section'                                           =>  'craftnce_about_page_casestudy',
        'settings'                                          =>  'craftnce_about_casestudy_box_item_settings',
        'customizer_repeater_icon_control'                  =>  true,
        'customizer_repeater_title_control'                 =>  true,
        'customizer_repeater_text_control'                  =>  true,
    )));