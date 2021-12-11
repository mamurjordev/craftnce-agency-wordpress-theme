<?php
    $wp_customize->add_section( 'craftnce_page_layouts', array(
        'title'      => __( 'Layout', 'craftnce' ),
        'capability' => 'edit_theme_options',
        'panel'      => 'craftnce_options',
    ));

    /**
     * Page Layout Select
     */
    $wp_customize->add_setting('craftnce_page_layout_settings', array(
        'default'           => 'full_width',
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod'
    ));
    $wp_customize->add_control('craftnce_page_layout_ctrl', array(
        'label'             =>  __('Page Layout', 'craftnce'),
        'section'           =>  'craftnce_page_layouts',
        'settings'          =>  'craftnce_page_layout_settings',
        'type'              =>  'select',
        'choices' => array(
            'no_sidebar'                =>  __( 'Full Width' ),
            'left_sidebar'              =>  __( 'Left Sidebar' ),
            'right_sidebar'             =>  __( 'Right Sidebar' ),
        ),
    ));

    /**
     * Blog Single Page Layout Select
     */
    $wp_customize->add_setting('craftnce_single_blog_page_layout_settings', array(
        'default'           => 'full_width',
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'type'              => 'theme_mod'
    ));
    $wp_customize->add_control('craftnce_single_blog_page_layout_ctrl', array(
        'label'             =>  __('Blog Single Layout', 'craftnce'),
        'section'           =>  'craftnce_page_layouts',
        'settings'          =>  'craftnce_single_blog_page_layout_settings',
        'type'              =>  'select',
        'choices' => array(
            'no_sidebar'                =>  __( 'Full Width' ),
            'left_sidebar'              =>  __( 'Left Sidebar' ),
            'right_sidebar'             =>  __( 'Right Sidebar' ),
        ),
    ));