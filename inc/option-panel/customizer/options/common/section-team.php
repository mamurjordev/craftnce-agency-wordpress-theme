<?php
    $wp_customize->add_section( 'craftnce_team_member_section', array(
        'title'      => __( 'Team Member', 'craftnce' ),
        'capability' => 'edit_theme_options',
        'panel'      => 'common_section_panel',
    ));

    /**
     * team Section - Show Section
     */
    $wp_customize->add_setting('craftnce_show_team_section_section_setting', array(
        'default'           => 1,
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => function( $input ) {
            return ( ( isset( $input ) && true == $input ) ? true : false );
        }
    ));
    $wp_customize->add_control('craftnce_show_team_section_section_ctrl', array(
        'label'             =>  __('Show team section', 'craftnce'),
        'section'           =>  'craftnce_team_member_section',
        'settings'          =>  'craftnce_show_team_section_section_setting',
        'type'              =>  'checkbox'
    ));

    /**
     * team Section - Heading
     */
    $wp_customize->add_setting('craftnce_team_section_heading_setting', array(
        'default'           => 'Helping dreams to do',
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
     * team Section - Sub-heading
     */
    $wp_customize->add_setting('craftnce_team_section_subheading_setting', array(
        'default'           => 'featured case study ',
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('craftnce_team_section_subheading_ctrl', array(
        'label'             =>  __('Sub-heading', 'craftnce'),
        'section'           =>  'craftnce_team_member_section',
        'settings'          =>  'craftnce_team_section_subheading_setting',
        'type'              =>  'text'
    ));
    
    // team Items
    $wp_customize->add_setting( 'craftnce_team_section_item_settings', array(
        'sanitize_callback' => 'customizer_repeater_sanitize'
    ));
    $wp_customize->add_control( new Customizer_Repeater( $wp_customize, 'craftnce_show_team_section_item_ctrl', array(
        'label'                                             =>  __('Member','craftnce'),
        'section'                                           =>  'craftnce_team_member_section',
        'settings'                                          =>  'craftnce_team_section_item_settings',
        'customizer_repeater_icon_control'                  =>  true,
        'customizer_repeater_image_control'                 =>  true,
        'customizer_repeater_title_control'                 =>  true,
        'customizer_repeater_text_control'                  =>  true,
        'customizer_repeater_repeater_control'              =>  true
    )));

    function team_repeater_labels( $string, $id, $control ) {
        if ( $id === 'craftnce_show_team_section_item_ctrl' ) {
            if ( $control === 'customizer_repeater_title_control' ) {
                return esc_html__( 'Name','craftnce' );
            }
       }
       return $string;
    }
    add_filter( 'repeater_input_labels_filter','team_repeater_labels', 10 , 3 );