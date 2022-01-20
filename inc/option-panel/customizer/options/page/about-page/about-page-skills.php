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
     * Award Icon Class
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

    /**
     * Skills Section - Award Heading
     */
    $wp_customize->add_setting('craftnce_about_skills_award_heading_setting', array(
        'default'           => '25 Awards is in our hands',
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('craftnce_about_skills_award_heading_ctrl', array(
        'label'             =>  __('Award Box Text', 'craftnce'),
        'section'           =>  'craftnce_about_page_skills',
        'settings'          =>  'craftnce_about_skills_award_heading_setting',
        'type'              =>  'text'
    ));

    /**
     * Skills Section - Description
     */
    $wp_customize->add_setting('craftnce_about_skills_desc_setting', array(
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('craftnce_about_skills_desc_ctrl', array(
        'label'             =>  __('Award Box Text', 'craftnce'),
        'section'           =>  'craftnce_about_page_skills',
        'settings'          =>  'craftnce_about_skills_desc_setting',
        'type'              =>  'textarea'
    ));

    /**
     * Skills Section - Skills Progress Items
     */
    $wp_customize->add_setting( 'craftnce_skills_item_settings', array(
        'sanitize_callback' => 'customizer_repeater_sanitize'
    ));
    $wp_customize->add_control( new Customizer_Repeater( $wp_customize, 'craftnce_skills_item_ctrl', array(
        'label'                                             =>  esc_html__('Skill Progressbar Item','craftnce'),
        'section'                                           =>  'craftnce_about_page_skills',
        'settings'                                          =>  'craftnce_skills_item_settings',
        'customizer_repeater_title_control'                 =>  true,
        'customizer_repeater_subtitle_control'              =>  true,
    )));

    function craftnce_repeater_labels( $string, $id, $control ) {
        if ( $id === 'craftnce_skills_item_ctrl' ) {
            if ( $control === 'customizer_repeater_subtitle_control' ) {
                return esc_html__( 'Progress Number','craftnce' );
            }
       }
       return $string;
    }
    add_filter( 'repeater_input_labels_filter','craftnce_repeater_labels', 10 , 3 );