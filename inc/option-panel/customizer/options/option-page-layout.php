<?php
    $wp_customize->add_section( 'craftnce_page_layouts', array(
        'title'      => __( 'Layout', 'craftnce' ),
        'capability' => 'edit_theme_options',
        'panel'      => 'craftnce_options',
    ));

    /**
     * Show breadcrumb
     */
    $wp_customize->add_setting('craftnce_blog_single_full_width_setting', array(
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => function( $input ) {
            return ( ( isset( $input ) && true == $input ) ? true : false );
        }
    ));
    $wp_customize->add_control('craftnce_blog_single_full_width_ctrl', array(
        'label'             =>  __('Blog Single Full-width', 'craftnce'),
        'section'           =>  'craftnce_page_layouts',
        'settings'          =>  'craftnce_blog_single_full_width_setting',
        'type'              =>  'checkbox'
    ));

    /**
     * Show breadcrumb
     */
    $wp_customize->add_setting('craftnce_show_breadcrumb_setting', array(
        'default'           => 1,
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => function( $input ) {
            return ( ( isset( $input ) && true == $input ) ? true : false );
        }
    ));
    $wp_customize->add_control('craftnce_show_breadcrumb_ctrl', array(
        'label'             =>  __('Show page breadcrumb', 'craftnce'),
        'section'           =>  'craftnce_page_layouts',
        'settings'          =>  'craftnce_show_breadcrumb_setting',
        'type'              =>  'checkbox'
    ));

    /**
     * Page - Top and Bottom Padding
     */
    $wp_customize->add_setting('craftnce_page_top_bottom_container_padding_setting', array(
        'default'           => 1,
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => function( $input ) {
            return ( ( isset( $input ) && true == $input ) ? true : false );
        }
    ));
    $wp_customize->add_control('craftnce_page_top_bottom_container_padding_ctrl', array(
        'label'             =>  __('Page container default padding (top & bottom)', 'craftnce'),
        'section'           =>  'craftnce_page_layouts',
        'settings'          =>  'craftnce_page_top_bottom_container_padding_setting',
        'type'              =>  'checkbox'
    ));

    /**
     * Page - Social Share
     */

     
    $wp_customize->add_setting('craftnce_single_blog_page_social_share_setting', array(
        'default'           => 1,
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => function( $input ) {
            return ( ( isset( $input ) && true == $input ) ? true : false );
        }
    ));
    $wp_customize->add_control('craftnce_single_blog_page_social_share_ctrl', array(
        'label'             =>  __('Show ingle blog page social share', 'craftnce'),
        'section'           =>  'craftnce_page_layouts',
        'settings'          =>  'craftnce_single_blog_page_social_share_setting',
        'type'              =>  'checkbox'
    ));