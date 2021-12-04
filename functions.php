<?php
    function craftnce_theme_setup() {
        // Load Theme TextDomain
        load_theme_textdomain('craftnce');

        // Theme Supports
        add_theme_support('title-tag');
        add_theme_support('description');
        add_theme_support('menus');
        add_theme_support('widgets');
        add_theme_support('post-thumbnails');
        add_theme_support('custom-header');
        add_theme_support('custom-logo');
        add_theme_support('custom-background');
    }
    add_action('after_setup_theme', 'craftnce_theme_setup');