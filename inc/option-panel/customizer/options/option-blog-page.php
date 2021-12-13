<?php
    $wp_customize->add_section( 'craftnce_blog_page', array(
        'title'      => __( 'Blog Page Options', 'craftnce' ),
        'capability' => 'edit_theme_options',
        'panel'      => 'craftnce_options',
    ));

    /**
     * Show breadcrumb
     */
    $wp_customize->add_setting('craftnce_blog_page_show_breadcrumb_setting', array(
        'default'           => 1,
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => function( $input, $setting ) {
            $input = sanitize_key($input);
            $choices = $setting->manager->get_control( $setting->id )->choices;
            return ( array_key_exists( $input, $choices ) ? $input : $setting->default );                
        }
    ));
    $wp_customize->add_control('craftnce_blog_page_show_breadcrumb_ctrl', array(
        'label'             =>  __('Show breadcrumb', 'craftnce'),
        'section'           =>  'craftnce_blog_page',
        'settings'          =>  'craftnce_blog_page_show_breadcrumb_setting',
        'type'              =>  'checkbox'
    ));

    /**
     * Blog Header Section - Show Section
     */
    $wp_customize->add_setting('craftnce_show_blog_page_header_section_setting', array(
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => function( $input, $setting ) {
            $input = sanitize_key($input);
            $choices = $setting->manager->get_control( $setting->id )->choices;
            return ( array_key_exists( $input, $choices ) ? $input : $setting->default );                
        }
    ));
    $wp_customize->add_control('craftnce_show_blog_page_header_section_ctrl', array(
        'label'             =>  __('Show Blog Page Header', 'craftnce'),
        'section'           =>  'craftnce_blog_page',
        'settings'          =>  'craftnce_show_blog_page_header_section_setting',
        'type'              =>  'checkbox'
    ));

    /**
     * brand Section - Show brand Section
     */
    $wp_customize->add_setting('craftnce_show_blog_page_brand_section_setting', array(
        'default'           =>  1,
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => function( $input, $setting ) {
            $input = sanitize_key($input);
            $choices = $setting->manager->get_control( $setting->id )->choices;
            return ( array_key_exists( $input, $choices ) ? $input : $setting->default );                
        }
    ));
    $wp_customize->add_control('craftnce_show_home_brand_section_ctrl', array(
        'label'             =>  __('Show brand section', 'craftnce'),
        'section'           =>  'craftnce_blog_page',
        'settings'          =>  'craftnce_show_blog_page_brand_section_setting',
        'type'              =>  'checkbox'
    ));

    /**
     * newsletter Section - Show newsletter Section
     */
    $wp_customize->add_setting('craftnce_show_blog_page_newsletter_section_setting', array(
        'default'           =>  1,
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => function( $input, $setting ) {
            $input = sanitize_key($input);
            $choices = $setting->manager->get_control( $setting->id )->choices;
            return ( array_key_exists( $input, $choices ) ? $input : $setting->default );                
        }
    ));
    $wp_customize->add_control('craftnce_show_home_newsletter_section_ctrl', array(
        'label'             =>  __('Show newsletter section', 'craftnce'),
        'section'           =>  'craftnce_blog_page',
        'settings'          =>  'craftnce_show_blog_page_newsletter_section_setting',
        'type'              =>  'checkbox'
    ));

    /**
     * Blog page - Heading
     */
    $wp_customize->add_setting('craftnce_blog_page_heading_setting', array(
        'default'           => 'ARTICLES',
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));
    $wp_customize->add_control('craftnce_blog_page_heading_ctrl', array(
        'label'             =>  __('Heading', 'craftnce'),
        'section'           =>  'craftnce_blog_page',
        'settings'          =>  'craftnce_blog_page_heading_setting',
        'type'              =>  'text'
    ));

    /**
     * Blog page - Sub-heading
     */
    $wp_customize->add_setting('craftnce_blog_page_sub_heading_settings', array(
        'default'           => 'SEE LATEST BLOG',
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));
    $wp_customize->add_control('craftnce_blog_page_sub_heading_ctrl', array(
        'label'             =>  __('Sub-heading', 'craftnce'),
        'section'           =>  'craftnce_blog_page',
        'settings'          =>  'craftnce_blog_page_sub_heading_settings',
        'type'              =>  'text'
    ));