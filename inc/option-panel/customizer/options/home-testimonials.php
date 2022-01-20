<?php
    $wp_customize->add_section( 'craftnce_home_page_testimonials', array(
        'title'      => __( 'Testimonials Section', 'craftnce' ),
        'capability' => 'edit_theme_options',
        'panel'      => 'home_page_panel',
    ));

    /**
     * testimonials Section - Show Section
     */
    $wp_customize->add_setting('craftnce_show_home_testimonials_section_setting', array(
        'default'           => 1,
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => function( $input ) {
            return ( ( isset( $input ) && true == $input ) ? true : false );
        }
    ));
    $wp_customize->add_control('craftnce_show_home_testimonials_section_ctrl', array(
        'label'             =>  __('Show testimonials section', 'craftnce'),
        'section'           =>  'craftnce_home_page_testimonials',
        'settings'          =>  'craftnce_show_home_testimonials_section_setting',
        'type'              =>  'checkbox'
    ));

    /**
     * testimonials Section - Heading
     */
    $wp_customize->add_setting('craftnce_home_testimonials_heading_setting', array(
        'default'           => 'Our worldwide clients says about us ',
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('craftnce_home_testimonials_heading_ctrl', array(
        'label'             =>  __('Heading', 'craftnce'),
        'section'           =>  'craftnce_home_page_testimonials',
        'settings'          =>  'craftnce_home_testimonials_heading_setting',
        'type'              =>  'text'
    ));

    /**
     * testimonials Section - Sub-heading
     */
    $wp_customize->add_setting('craftnce_home_testimonials_subheading_setting', array(
        'default'           => 'testimonial',
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('craftnce_home_testimonials_subheading_ctrl', array(
        'label'             =>  __('Sub-heading', 'craftnce'),
        'section'           =>  'craftnce_home_page_testimonials',
        'settings'          =>  'craftnce_home_testimonials_subheading_setting',
        'type'              =>  'text'
    ));
    
    // testimonials Items
    $wp_customize->add_setting( 'craftnce_home_testimonials_item_settings', array(
        'capability'            => 'edit_theme_options',
        'transport'             => 'refresh',
        'type'                  => 'theme_mod',
        'sanitize_callback'     => 'customizer_repeater_sanitize',
    ));
    $wp_customize->add_control( new Customizer_Repeater( $wp_customize, 'craftnce_home_testimonials_items_control', array(
        'label'                                             =>  esc_html__('Testimonials Item','craftnce'),
        'section'                                           =>  'craftnce_home_page_testimonials',
        'settings'                                          =>  'craftnce_home_testimonials_item_settings',
        'customizer_repeater_icon_control'                  =>  true,
        'customizer_repeater_image_control'                 =>  true,
        'customizer_repeater_title_control'                 =>  true,
        'customizer_repeater_text_control'                  =>  true,
        'customizer_repeater_subtitle_control'              =>  true,
    )));

    function repeater_title_labels( $string, $id, $control ) {
        if ( $id === 'craftnce_home_testimonials_items_control' ) {
            if ( $control === 'customizer_repeater_title_control' ) {
                return esc_html__( 'Name','craftnce' );
            }
       }
       return $string;
    }
    add_filter( 'repeater_input_labels_filter','repeater_title_labels', 10 , 3 );

    function repeater_text_labels( $string, $id, $control ) {
        if ( $id === 'craftnce_home_testimonials_items_control' ) {
            if ( $control === 'customizer_repeater_text_control' ) {
                return esc_html__( 'Testimonial Description','craftnce' );
            }
       }
       return $string;
    }
    add_filter( 'repeater_input_labels_filter','repeater_text_labels', 10 , 3 );

    function repeater_rating_num_labels( $string, $id, $control ) {
        if ( $id === 'craftnce_home_testimonials_items_control' ) {
            if ( $control === 'customizer_repeater_subtitle_control' ) {
                return esc_html__( 'Ratings (out of 5)','craftnce' );
            }
       }
       return $string;
    }
    add_filter( 'repeater_input_labels_filter','repeater_rating_num_labels', 10 , 3 );

    function repeater_input_types( $string, $id, $control ) {
        if ( $id === 'testimonials_content' ) { // here is the id of the control you want to change
            if ( $control === 'customizer_repeater_subtitle_control' ) { //Here is the input you want to change
                return 'textarea';
            }
        }
        return $string;
    }
    add_filter( 'customizer_repeater_input_types_filter','repeater_input_types', 10 , 3 );