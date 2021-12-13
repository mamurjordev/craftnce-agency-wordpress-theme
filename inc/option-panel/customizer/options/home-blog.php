<?php
    $wp_customize->add_section( 'craftnce_home_page_blog', array(
        'title'      => __( 'Blog Section', 'craftnce' ),
        'capability' => 'edit_theme_options',
        'panel'      => 'home_page_panel',
    ));

    /**
     * blog Section - Show blog Section
     */
    $wp_customize->add_setting('craftnce_show_home_blog_section_setting', array(
        'default'           => 1,
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => function( $input ) {
            return ( ( isset( $input ) && true == $input ) ? true : false );
        }
    ));
    $wp_customize->add_control('craftnce_show_home_blog_section_ctrl', array(
        'label'             =>  __('Show blog section', 'craftnce'),
        'section'           =>  'craftnce_home_page_blog',
        'settings'          =>  'craftnce_show_home_blog_section_setting',
        'type'              =>  'checkbox'
    ));
    
    /**
     * blog Section - Heading
     */
    $wp_customize->add_setting('craftnce_home_blog_heading_setting', array(
        'default'           => ' Our recent blog',
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));
    $wp_customize->add_control('craftnce_home_blog_heading_ctrl', array(
        'label'             =>  __('Heading', 'craftnce'),
        'section'           =>  'craftnce_home_page_blog',
        'settings'          =>  'craftnce_home_blog_heading_setting',
        'type'              =>  'text'
    ));

    /**
     * blog Section - Sub-heading
     */
    $wp_customize->add_setting('craftnce_home_blog_subtext_setting', array(
        'default'           => 'blog posts',
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));
    $wp_customize->add_control('craftnce_home_blog_subtext_ctrl', array(
        'label'             =>  __('Sub-heading', 'craftnce'),
        'section'           =>  'craftnce_home_page_blog',
        'settings'          =>  'craftnce_home_blog_subtext_setting',
        'type'              =>  'text'
    ));


    /**
     * blog Section - Show Button
     */
    $wp_customize->add_setting('craftnce_home_blog_show_btn_setting', array(
        'default'           => 1,
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => function( $input ) {
            return ( ( isset( $input ) && true == $input ) ? true : false );
        }
    ));
    $wp_customize->add_control('craftnce_home_blog_show_btn_ctrl', array(
        'label'             =>  __('Show See More Button', 'craftnce'),
        'section'           =>  'craftnce_home_page_blog',
        'settings'          =>  'craftnce_home_blog_show_btn_setting',
        'type'              =>  'checkbox'
    ));

    /**
     * blog Section - Button Label
     */
    $wp_customize->add_setting('craftnce_home_blog_btn_label_setting', array(
        'default'           =>  'see more',
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));
    $wp_customize->add_control('craftnce_home_blog_btn_label_ctrl', array(
        'label'             =>  __('Button Label', 'craftnce'),
        'section'           =>  'craftnce_home_page_blog',
        'settings'          =>  'craftnce_home_blog_btn_label_setting',
        'type'              =>  'text'
    ));

    /**
     * blog Section - Button Link
     */
    $wp_customize->add_setting('craftnce_home_blog_btn_link_setting', array(
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));
    $wp_customize->add_control('craftnce_home_blog_btn_link_ctrl', array(
        'label'             =>  __('Button Link', 'craftnce'),
        'section'           =>  'craftnce_home_page_blog',
        'settings'          =>  'craftnce_home_blog_btn_link_setting',
        'type'              =>  'text'
    ));

    /**
     * blog Section - Button Icon
     */
    $wp_customize->add_setting('craftnce_home_blog_btn_icon_setting', array(
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));
    $wp_customize->add_control('craftnce_home_blog_btn_icon_ctrl', array(
        'label'             =>  __('Font-awesome Icon Class', 'craftnce'),
        'section'           =>  'craftnce_home_page_blog',
        'settings'          =>  'craftnce_home_blog_btn_icon_setting',
        'type'              =>  'text'
    ));