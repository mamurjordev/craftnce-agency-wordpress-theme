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

    /**
     * team Section - First team member
     * 
     * Name
     */
    $wp_customize->add_setting('craftnce_team_member_1_name_settings', array(
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control('craftnce_team_member_1_name_ctrl', array(
        'label'             =>  __('First Team Member Name', 'craftnce'),
        'section'           =>  'craftnce_team_member_section',
        'settings'          =>  'craftnce_team_member_1_name_settings',
        'type'              =>  'text'
    ));

    /**
     * Designation
     */
    $wp_customize->add_setting('craftnce_team_member_1_designation_settings', array(
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control('craftnce_team_member_1_designation_ctrl', array(
        'label'             =>  __('First Team Member Designation', 'craftnce'),
        'section'           =>  'craftnce_team_member_section',
        'settings'          =>  'craftnce_team_member_1_designation_settings',
        'type'              =>  'text'
    ));

    // Service Items
    $wp_customize->add_setting( 'craftnce_team_social_media_repeater_item_settings', array(
        'sanitize_callback' => 'customizer_repeater_sanitize'
    ));
    $wp_customize->add_control( new Customizer_Repeater( $wp_customize, 'craftnce_team_social_media_repeater_item_ctrl', array(
        'label'                                             =>  esc_html__('Social Media','craftnce'),
        'section'                                           =>  'craftnce_team_member_section',
        'settings'                                          =>  'craftnce_team_social_media_repeater_item_settings',
        'customizer_repeater_icon_control'                  =>  true,
        'customizer_repeater_title_control'                 =>  true,
        'customizer_repeater_text_control'                  =>  true,
    )));

    function team_social_repeater_name_labels( $string, $id, $control ) {
        if ( $id === 'craftnce_show_team_social_media_repeater_item_ctrl' ) {
            if ( $control === 'customizer_repeater_title_control' ) {
                return esc_html__( 'Social Media Name','craftnce' );
            }
       }
       return $string;
    }
    add_filter( 'repeater_input_labels_filter','team_social_repeater_name_labels', 10 , 3 );

    function team_social_repeater_link_labels( $string, $id, $control ) {
        if ( $id === 'craftnce_show_team_social_media_repeater_item_ctrl' ) {
            if ( $control === 'customizer_repeater_text_control' ) {
                return esc_html__( 'Social Media Link','craftnce' );
            }
       }
       return $string;
    }
    add_filter( 'repeater_input_labels_filter','team_social_repeater_link_labels', 10 , 3 );



    /**
     * team Section - Second team member
     * 
     * Name
     */
    $wp_customize->add_setting('craftnce_team_member_2_name_settings', array(
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control('craftnce_team_member_2_name_ctrl', array(
        'label'             =>  __('Second Team Member Name', 'craftnce'),
        'section'           =>  'craftnce_team_member_section',
        'settings'          =>  'craftnce_team_member_2_name_settings',
        'type'              =>  'text'
    ));

    /**
     * Designation
     */
    $wp_customize->add_setting('craftnce_team_member_2_designation_settings', array(
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control('craftnce_team_member_2_designation_ctrl', array(
        'label'             =>  __('Second Team Member Designation', 'craftnce'),
        'section'           =>  'craftnce_team_member_section',
        'settings'          =>  'craftnce_team_member_2_designation_settings',
        'type'              =>  'text'
    ));

    // Service Items
    $wp_customize->add_setting( 'craftnce_team_social_media_repeater_item_settings2', array(
        'sanitize_callback' => 'customizer_repeater_sanitize'
    ));
    $wp_customize->add_control( new Customizer_Repeater( $wp_customize, 'craftnce_team_social_media_repeater_item_ctrl2', array(
        'label'                                             =>  esc_html__('Social Media','craftnce'),
        'section'                                           =>  'craftnce_team_member_section',
        'settings'                                          =>  'craftnce_team_social_media_repeater_item_settings2',
        'customizer_repeater_icon_control'                  =>  true,
        'customizer_repeater_title_control'                 =>  true,
        'customizer_repeater_text_control'                  =>  true,
    )));

    function team_social_repeater_name_labels2( $string, $id, $control ) {
        if ( $id === 'craftnce_show_team_social_media_repeater_item_ctrl' ) {
            if ( $control === 'customizer_repeater_title_control' ) {
                return esc_html__( 'Social Media Name','craftnce' );
            }
       }
       return $string;
    }
    add_filter( 'repeater_input_labels_filter','team_social_repeater_name_labels2', 10 , 3 );

    function team_social_repeater_link_labels2( $string, $id, $control ) {
        if ( $id === 'craftnce_team_social_media_repeater_item_ctrl2' ) {
            if ( $control === 'customizer_repeater_text_control' ) {
                return esc_html__( 'Social Media Link','craftnce' );
            }
       }
       return $string;
    }
    add_filter( 'repeater_input_labels_filter','team_social_repeater_link_labels2', 10 , 3 );




    /**
     * team Section - Third team member
     * 
     * Name
     */
    $wp_customize->add_setting('craftnce_team_member_3_name_settings', array(
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control('craftnce_team_member_3_name_ctrl', array(
        'label'             =>  __('Third Team Member Name', 'craftnce'),
        'section'           =>  'craftnce_team_member_section',
        'settings'          =>  'craftnce_team_member_3_name_settings',
        'type'              =>  'text'
    ));

    /**
     * Designation
     */
    $wp_customize->add_setting('craftnce_team_member_3_designation_settings', array(
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control('craftnce_team_member_3_designation_ctrl', array(
        'label'             =>  __('Third Team Member Designation', 'craftnce'),
        'section'           =>  'craftnce_team_member_section',
        'settings'          =>  'craftnce_team_member_3_designation_settings',
        'type'              =>  'text'
    ));

    // Service Items
    $wp_customize->add_setting( 'craftnce_team_social_media_repeater_item_settings3', array(
        'sanitize_callback' => 'customizer_repeater_sanitize'
    ));
    $wp_customize->add_control( new Customizer_Repeater( $wp_customize, 'craftnce_team_social_media_repeater_item_ctrl3', array(
        'label'                                             =>  esc_html__('Social Media','craftnce'),
        'section'                                           =>  'craftnce_team_member_section',
        'settings'                                          =>  'craftnce_team_social_media_repeater_item_settings3',
        'customizer_repeater_icon_control'                  =>  true,
        'customizer_repeater_title_control'                 =>  true,
        'customizer_repeater_text_control'                  =>  true,
    )));

    function team_social_repeater_name_labels3( $string, $id, $control ) {
        if ( $id === 'craftnce_team_social_media_repeater_item_ctrl3' ) {
            if ( $control === 'customizer_repeater_title_control' ) {
                return esc_html__( 'Social Media Name','craftnce' );
            }
       }
       return $string;
    }
    add_filter( 'repeater_input_labels_filter','team_social_repeater_name_labels3', 10 , 3 );

    function team_social_repeater_link_labels3( $string, $id, $control ) {
        if ( $id === 'craftnce_team_social_media_repeater_item_ctrl3' ) {
            if ( $control === 'customizer_repeater_text_control' ) {
                return esc_html__( 'Social Media Link','craftnce' );
            }
       }
       return $string;
    }
    add_filter( 'repeater_input_labels_filter','team_social_repeater_link_labels3', 10 , 3 );