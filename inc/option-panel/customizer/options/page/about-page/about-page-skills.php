<?php
    $wp_customize->add_section( 'craftnce_about_page_skills', array(
        'title'         => __( 'Skills Section', 'craftnce' ),
        'capability'    => 'edit_theme_options',
        'panel'         => 'about_page_panel',
    ));

    /**
     * skills Section - Show skills Section
     */
    $wp_customize->add_setting('craftnce_show_about_page_skills_section_setting', array(
        'default'           => 1,
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => function( $input ) {
            return ( ( isset( $input ) && true == $input ) ? true : false );
        }
    ));
    $wp_customize->add_control('craftnce_show_about_skills_section_ctrl', array(
        'label'             =>  __('Show skills section', 'craftnce'),
        'section'           =>  'craftnce_about_page_skills',
        'settings'          =>  'craftnce_show_about_page_skills_section_setting',
        'type'              =>  'checkbox'
    ));

    /**
     * Skills Section - Heading
     */
    $wp_customize->add_setting('craftnce_about_skills_heading_setting', array(
        'default'           => 'We Have achieved Experiences & Skills',
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('craftnce_about_skills_heading_ctrl', array(
        'label'             =>  __('Heading', 'craftnce'),
        'section'           =>  'craftnce_about_page_skills',
        'settings'          =>  'craftnce_about_skills_heading_setting',
        'type'              =>  'text'
    ));

    /**
     * skills Section - First Button Icon
     */
    $wp_customize->add_setting('craftnce_about_skills_award_icon_setting', array(
        'default'           =>  'fas fa-award',
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('craftnce_home_skills_award_icon_ctrl', array(
        'label'             =>  __('Award Icon Class', 'craftnce'),
        'section'           =>  'craftnce_about_page_skills',
        'settings'          =>  'craftnce_about_skills_award_icon_setting',
        'type'              =>  'text'
    ));