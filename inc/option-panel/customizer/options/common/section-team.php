<?php
    $wp_customize->add_section( 'craftnce_team_member_section', array(
        'title'      => __( 'Team Member', 'craftnce' ),
        'capability' => 'edit_theme_options',
        'panel'      => 'common_section_panel',
    ));

    /**
     * team Section - Show Section
     */
    $wp_customize->add_setting('craftnce_show_about_page_team_section_section_setting', array(
        'default'           => 1,
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => function( $input ) {
            return ( ( isset( $input ) && true == $input ) ? true : false );
        }
    ));
    $wp_customize->add_control('craftnce_show_about_page_team_section_section_ctrl', array(
        'label'             =>  __('Show in about page', 'craftnce'),
        'section'           =>  'craftnce_team_member_section',
        'settings'          =>  'craftnce_show_about_page_team_section_section_setting',
        'type'              =>  'checkbox'
    ));

    $wp_customize->add_setting('craftnce_show_service_page_team_section_section_setting', array(
        'default'           => 1,
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => function( $input ) {
            return ( ( isset( $input ) && true == $input ) ? true : false );
        }
    ));
    $wp_customize->add_control('craftnce_show_service_page_team_section_section_ctrl', array(
        'label'             =>  __('Show in service page', 'craftnce'),
        'section'           =>  'craftnce_team_member_section',
        'settings'          =>  'craftnce_show_service_page_team_section_section_setting',
        'type'              =>  'checkbox'
    ));

    /**
     * team Section - Heading
     */
    $wp_customize->add_setting('craftnce_team_section_heading_setting', array(
        'default'           => 'Meet Our Experienced & Skilled Team',
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('craftnce_team_section_heading_ctrl', array(
        'label'             =>  __('Heading', 'craftnce'),
        'section'           =>  'craftnce_team_member_section',
        'settings'          =>  'craftnce_team_section_heading_setting',
        'type'              =>  'text'
    ));