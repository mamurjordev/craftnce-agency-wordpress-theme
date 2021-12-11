<?php
    $wp_customize->add_section( 'craftnce_home_page_newsletter', array(
        'title'      => __( 'newsletter Section', 'craftnce' ),
        'capability' => 'edit_theme_options',
        'panel'      => 'home_page_panel',
    ));

    /**
     * newsletter Section - Show newsletter Section
     */
    $wp_customize->add_setting('craftnce_show_home_newsletter_section_setting', array(
        'default'           => 1,
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod'
    ));
    $wp_customize->add_control('craftnce_show_home_newsletter_section_ctrl', array(
        'label'             =>  __('Show newsletter section', 'craftnce'),
        'section'           =>  'craftnce_home_page_newsletter',
        'settings'          =>  'craftnce_show_home_newsletter_section_setting',
        'type'              =>  'checkbox'
    ));
    
    /**
     * newsletter Section - Heading
     */
    $wp_customize->add_setting('craftnce_home_newsletter_heading_setting', array(
        'default'           => 'SignUp Our Newsletter',
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod'
    ));
    $wp_customize->add_control('craftnce_home_newsletter_heading_ctrl', array(
        'label'             =>  __('Heading', 'craftnce'),
        'section'           =>  'craftnce_home_page_newsletter',
        'settings'          =>  'craftnce_home_newsletter_heading_setting',
        'type'              =>  'text'
    ));

    /**
     * newsletter Section - Sub-heading
     */
    $wp_customize->add_setting('craftnce_home_newsletter_subtext_setting', array(
        'default'           => 'Get in touch by subscribing here with your',
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod'
    ));
    $wp_customize->add_control('craftnce_home_newsletter_subtext_ctrl', array(
        'label'             =>  __('Sub-heading', 'craftnce'),
        'section'           =>  'craftnce_home_page_newsletter',
        'settings'          =>  'craftnce_home_newsletter_subtext_setting',
        'type'              =>  'text'
    ));