<?php
    $wp_customize->add_section( 'craftnce_blog_page', array(
        'title'      => __( 'Blog Page Options', 'craftnce' ),
        'capability' => 'edit_theme_options',
        'panel'      => 'craftnce_options',
    ));

    /**
     * Info Section - Show Info Section
     */
    $wp_customize->add_setting('craftnce_show_blog_page_header_section_setting', array(
        'default'           => 1,
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod'
    ));
    $wp_customize->add_control('craftnce_show_blog_page_header_section_ctrl', array(
        'label'             =>  __('Show Blog Page Header', 'craftnce'),
        'section'           =>  'craftnce_blog_page',
        'settings'          =>  'craftnce_show_blog_page_header_section_setting',
        'type'              =>  'checkbox'
    ));

    /**
     * Blog page Section - Heading
     */
    $wp_customize->add_setting('craftnce_blog_page_heading_setting', array(
        'default'           => 'ARTICLES',
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod'
    ));
    $wp_customize->add_control('craftnce_home_blog_page_heading_ctrl', array(
        'label'             =>  __('Heading', 'craftnce'),
        'section'           =>  'craftnce_blog_page',
        'settings'          =>  'craftnce_blog_page_heading_setting',
        'type'              =>  'text'
    ));

    /**
     * Blog page Section - Sub-heading
     */
    $wp_customize->add_setting('craftnce_blog_page_subheading_setting', array(
        'default'           => 'SEE LATEST BLOG',
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod'
    ));
    $wp_customize->add_control('craftnce_home_blog_page_subheading_ctrl', array(
        'label'             =>  __('Sub-heading', 'craftnce'),
        'section'           =>  'craftnce_blog_page',
        'settings'          =>  'craftnce_blog_page_subheading_setting',
        'type'              =>  'text'
    ));