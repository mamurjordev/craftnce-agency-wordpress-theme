<?php
    $wp_customize->add_section( 'craftnce_home_page_info', array(
        'title'      => __( 'Info Section', 'craftnce' ),
        'capability' => 'edit_theme_options',
        'panel'      => 'home_page_panel',
    ));

    /**
     * Info Section - Show Info Section
     */
    $wp_customize->add_setting('craftnce_show_home_info_section_setting', array(
        'default'           => 1,
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod'
    ));
    $wp_customize->add_control('craftnce_show_home_info_section_ctrl', array(
        'label'             =>  __('Show info section', 'craftnce'),
        'section'           =>  'craftnce_home_page_info',
        'settings'          =>  'craftnce_show_home_info_section_setting',
        'type'              =>  'checkbox'
    ));

    /**
     * Info Section - Heading
     */
    $wp_customize->add_setting('craftnce_home_info_heading_setting', array(
        'default'           => 'WE\'RE LEADING DIGITAL BUSINESS AGENCY',
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod'
    ));
    $wp_customize->add_control('craftnce_home_info_heading_ctrl', array(
        'label'             =>  __('Heading', 'craftnce'),
        'section'           =>  'craftnce_home_page_info',
        'settings'          =>  'craftnce_home_info_heading_setting',
        'type'              =>  'text'
    ));

    /**
     * Info Section - Sub-heading
     */
    $wp_customize->add_setting('craftnce_home_info_subheading_setting', array(
        'default'           => 'ABOUT CRAFTNCE',
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod'
    ));
    $wp_customize->add_control('craftnce_home_info_subheading_ctrl', array(
        'label'             =>  __('Sub-heading', 'craftnce'),
        'section'           =>  'craftnce_home_page_info',
        'settings'          =>  'craftnce_home_info_subheading_setting',
        'type'              =>  'text'
    ));

    /**
     * Info Section - Description
     */
    $wp_customize->add_setting('craftnce_home_info_description_setting', array(
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod'
    ));
    $wp_customize->add_control('craftnce_home_info_description_ctrl', array(
        'label'             =>  __('Description', 'craftnce'),
        'section'           =>  'craftnce_home_page_info',
        'settings'          =>  'craftnce_home_info_description_setting',
        'type'              =>  'textarea'
    ));

    /**
     * info Section - Show First Button
     */
    $wp_customize->add_setting('craftnce_home_info_show_btn1_setting', array(
        'default'           => 1,
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod'
    ));
    $wp_customize->add_control('craftnce_home_info_show_btn1_ctrl', array(
        'label'             =>  __('Show info First Button', 'craftnce'),
        'section'           =>  'craftnce_home_page_info',
        'settings'          =>  'craftnce_home_info_show_btn1_setting',
        'type'              =>  'checkbox'
    ));

    /**
     * info Section - First Button Label
     */
    $wp_customize->add_setting('craftnce_home_info_btn1_label_setting', array(
        'default'           =>  'first button',
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod'
    ));
    $wp_customize->add_control('craftnce_home_info_btn1_label_ctrl', array(
        'label'             =>  __('First Button Label', 'craftnce'),
        'section'           =>  'craftnce_home_page_info',
        'settings'          =>  'craftnce_home_info_btn1_label_setting',
        'type'              =>  'text'
    ));

    /**
     * info Section - First Button Link
     */
    $wp_customize->add_setting('craftnce_home_info_btn1_link_setting', array(
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod'
    ));
    $wp_customize->add_control('craftnce_home_info_btn1_link_ctrl', array(
        'label'             =>  __('First Button Link', 'craftnce'),
        'section'           =>  'craftnce_home_page_info',
        'settings'          =>  'craftnce_home_info_btn1_link_setting',
        'type'              =>  'text'
    ));

    /**
     * info Section - First Button Icon
     */
    $wp_customize->add_setting('craftnce_home_info_btn1_icon_setting', array(
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod'
    ));
    $wp_customize->add_control('craftnce_home_info_btn1_icon_ctrl', array(
        'label'             =>  __('First Button Icon Class', 'craftnce'),
        'section'           =>  'craftnce_home_page_info',
        'settings'          =>  'craftnce_home_info_btn1_icon_setting',
        'type'              =>  'text'
    ));

    /**
     * info Section - Show Second Button
     */
    $wp_customize->add_setting('craftnce_home_info_show_btn2_setting', array(
        'default'           => 1,
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod'
    ));
    $wp_customize->add_control('craftnce_home_info_show_btn2_ctrl', array(
        'label'             =>  __('Show info Second Button', 'craftnce'),
        'section'           =>  'craftnce_home_page_info',
        'settings'          =>  'craftnce_home_info_show_btn2_setting',
        'type'              =>  'checkbox'
    ));

    /**
     * info Section - Second Button Label
     */
    $wp_customize->add_setting('craftnce_home_info_btn2_label_setting', array(
        'default'           =>  'second button',
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod'
    ));
    $wp_customize->add_control('craftnce_home_info_btn2_label_ctrl', array(
        'label'             =>  __('Second Button Label', 'craftnce'),
        'section'           =>  'craftnce_home_page_info',
        'settings'          =>  'craftnce_home_info_btn2_label_setting',
        'type'              =>  'text'
    ));

    /**
     * info Section - Second Button Link
     */
    $wp_customize->add_setting('craftnce_home_info_btn2_link_setting', array(
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod'
    ));
    $wp_customize->add_control('craftnce_home_info_btn2_link_ctrl', array(
        'label'             =>  __('Second Button Link', 'craftnce'),
        'section'           =>  'craftnce_home_page_info',
        'settings'          =>  'craftnce_home_info_btn2_link_setting',
        'type'              =>  'text'
    ));

    /**
     * info Section - First Button Icon
     */
    $wp_customize->add_setting('craftnce_home_info_btn2_icon_setting', array(
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod'
    ));
    $wp_customize->add_control('craftnce_home_info_btn2_icon_ctrl', array(
        'label'             =>  __('Second Button Icon Class', 'craftnce'),
        'section'           =>  'craftnce_home_page_info',
        'settings'          =>  'craftnce_home_info_btn2_icon_setting',
        'type'              =>  'text'
    ));

    /**
     * Info Section - Featured Image
     */
    $wp_customize->add_setting('craftnce_home_info_section_featured_image_setting', array(
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod'
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'craftnce_home_info_featured_image_ctrl', array(
        'label'             =>  __('Info Featured Image', 'craftnce'),
        'section'           =>  'craftnce_home_page_info',
        'settings'          =>  'craftnce_home_info_section_featured_image_setting',
        'button_labels'     => array(
            'select'    => 'Select Image',
            'remove'    => 'Remove Image',
            'change'    => 'Change Image',
        )
    )));