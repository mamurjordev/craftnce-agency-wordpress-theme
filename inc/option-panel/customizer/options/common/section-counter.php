<?php
    $wp_customize->add_section( 'craftnce_home_page_counter', array(
        'title'      => __( 'Counter', 'craftnce' ),
        'capability' => 'edit_theme_options',
        'panel'      => 'common_section_panel',
    ));

    /**
     * counter Section - Show Section
     */
    $wp_customize->add_setting('craftnce_show_section_counter_section_setting', array(
        'default'           => 1,
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => function( $input ) {
            return ( ( isset( $input ) && true == $input ) ? true : false );
        }
    ));
    $wp_customize->add_control('craftnce_show_section_counter_section_ctrl', array(
        'label'             =>  __('Show counter section', 'craftnce'),
        'section'           =>  'craftnce_home_page_counter',
        'settings'          =>  'craftnce_show_section_counter_section_setting',
        'type'              =>  'checkbox'
    ));

    /**
     * counter Section - Heading
     */
    $wp_customize->add_setting('craftnce_section_counter_heading_setting', array(
        'default'           => 'Helping dreams to do',
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('craftnce_section_counter_heading_ctrl', array(
        'label'             =>  __('Heading', 'craftnce'),
        'section'           =>  'craftnce_home_page_counter',
        'settings'          =>  'craftnce_section_counter_heading_setting',
        'type'              =>  'text'
    ));

    /**
     * counter Section - Sub-heading
     */
    $wp_customize->add_setting('craftnce_section_counter_subheading_setting', array(
        'default'           => 'featured case study ',
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('craftnce_section_counter_subheading_ctrl', array(
        'label'             =>  __('Sub-heading', 'craftnce'),
        'section'           =>  'craftnce_home_page_counter',
        'settings'          =>  'craftnce_section_counter_subheading_setting',
        'type'              =>  'text'
    ));
    
    // counter Items
    $wp_customize->add_setting( 'craftnce_section_counter_item_settings', array(
        'sanitize_callback' => 'customizer_repeater_sanitize'
    ));
    $wp_customize->add_control( new Customizer_Repeater( $wp_customize, 'craftnce_show_section_counter_item_ctrl', array(
        'label'                                             =>  __('Counter Item','craftnce'),
        'section'                                           =>  'craftnce_home_page_counter',
        'settings'                                          =>  'craftnce_section_counter_item_settings',
        'customizer_repeater_icon_control'                  =>  true,
        'customizer_repeater_title_control'                 =>  true,
        'customizer_repeater_text_control'                  =>  true,
    )));

    function counter_repeater_labels( $string, $id, $control ) {
        if ( $id === 'craftnce_show_section_counter_item_ctrl' ) {
            if ( $control === 'customizer_repeater_title_control' ) {
                return esc_html__( 'Counter Numbers','craftnce' );
            }
       }
       return $string;
    }
    add_filter( 'repeater_input_labels_filter','counter_repeater_labels', 10 , 3 );


    /**
     * Counter Section - Featured Image
     */
    $wp_customize->add_setting('craftnce_section_counter_section_featured_image_setting', array(
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
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'craftnce_section_counter_featured_image_ctrl', array(
        'label'             =>  __('Counter Section Featured Image', 'craftnce'),
        'section'           =>  'craftnce_home_page_counter',
        'settings'          =>  'craftnce_section_counter_section_featured_image_setting',
        'button_labels'     => array(
            'select'        => __('Select Image', 'craftnce'),
            'remove'        => __('Remove Image', 'craftnce'),
            'change'        => __('Change Image', 'craftnce'),
        )
    )));