<?php
    $wp_customize->add_section( 'craftnce_about_page_stability', array(
        'title'      => __( 'Stability', 'craftnce' ),
        'capability' => 'edit_theme_options',
        'panel'      => 'about_page_panel',
    ));

    /**
     * stability Section - Show Section
     */
    $wp_customize->add_setting('craftnce_show_about_page_stability_section_setting', array(
        'default'           => 1,
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => function( $input ) {
            return ( ( isset( $input ) && true == $input ) ? true : false );
        }
    ));
    $wp_customize->add_control('craftnce_show_about_page_stability_section_ctrl', array(
        'label'             =>  __('Show stability section', 'craftnce'),
        'section'           =>  'craftnce_about_page_stability',
        'settings'          =>  'craftnce_show_about_page_stability_section_setting',
        'type'              =>  'checkbox'
    ));

    /**
     * stability Section - Heading
     */
    $wp_customize->add_setting('craftnce_about_page_stability_heading_setting', array(
        'default'           => 'Our amazing stabilities',
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('craftnce_about_page_stability_heading_ctrl', array(
        'label'             =>  __('Heading', 'craftnce'),
        'section'           =>  'craftnce_about_page_stability',
        'settings'          =>  'craftnce_about_page_stability_heading_setting',
        'type'              =>  'text'
    ));

    /**
     * stability Section - Sub-heading
     */
    $wp_customize->add_setting('craftnce_about_page_stability_subheading_setting', array(
        'default'           => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy',
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('craftnce_about_page_stability_subheading_ctrl', array(
        'label'             =>  __('Description', 'craftnce'),
        'section'           =>  'craftnce_about_page_stability',
        'settings'          =>  'craftnce_about_page_stability_subheading_setting',
        'type'              =>  'textarea'
    ));
    
    // stability Items
    $wp_customize->add_setting( 'craftnce_about_page_stability_item_settings', array(
        'sanitize_callback' => 'customizer_repeater_sanitize'
    ));
    $wp_customize->add_control( new Customizer_Repeater( $wp_customize, 'craftnce_show_about_page_stability_item_ctrl', array(
        'label'                                             =>  esc_html__('Stability Item','craftnce'),
        'section'                                           =>  'craftnce_about_page_stability',
        'settings'                                          =>  'craftnce_about_page_stability_item_settings',
        'customizer_repeater_icon_control'                  =>  true,
        'customizer_repeater_image_control'                 =>  true,
        'customizer_repeater_title_control'                 =>  true,
        'customizer_repeater_text_control'                  =>  true,
    )));

    function craftnce_stability_items_repeater_labels( $string, $id, $control ) {
        if ( $id === 'craftnce_show_about_page_stability_item_ctrl' ) {
            if ( $control === 'customizer_repeater_text_control' ) {
                return esc_html__( 'Description','craftnce' );
            }
       }
       return $string;
    }
    add_filter( 'repeater_input_labels_filter','craftnce_stability_items_repeater_labels', 10 , 3 );