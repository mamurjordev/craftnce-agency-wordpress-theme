<?php
    CSF::createSection($option_prefix, array(
        'title'                     =>  __('Front Page', 'craftnce'),
        'id'                        => 'front_page',
    ));

    // Hero Section
    CSF::createSection($option_prefix, array(
        'title'                     =>  __('Hero Section', 'craftnce'),
        'parent'                    =>  'front_page',
        'fields'                    =>  array(
            array(
                'type'    => 'notice',
                'style'   => 'info',
                'content' => __('<h1>Hero Section</h1>', 'craftnce'),
            ),
            // Text and Image
            array(
                'title'                 =>  __('Show Hero Section', 'craftnce'),
                'id'                    =>  'is_show_hero_section',
                'type'                  =>  'switcher',
            ),
            array(
                'title'                 =>  __('Hero Section Title', 'craftnce'),
                'id'                    =>  'hero_section_title',
                'type'                  =>  'text',
            ),
            array(
                'title'                 =>  __('Hero Section Subtitle', 'craftnce'),
                'id'                    =>  'hero_section_subtitle',
                'type'                  =>  'text',
            ),
            array(
                'title'                 =>  __('Hero Section Image', 'craftnce'),
                'id'                    =>  'hero_section_image',
                'type'                  =>  'media',
            ),

            // Buttons
            // First Button
            array(
                'title'                 =>  __('Show First Buttons', 'craftnce'),
                'id'                    =>  'is_show_hero_first_buttons',
                'type'                  =>  'switcher',
            ),
            array(
                'title'                 =>  __('First Button Label', 'craftnce'),
                'id'                    =>  'hero_first_button_label',
                'type'                  =>  'text',
            ),
            array(
                'title'                 =>  __('First Button Link', 'craftnce'),
                'id'                    =>  'hero_first_button_link',
                'type'                  =>  'link',
            ),
            array(
                'title'                 =>  __('First Button Font Awesome Icon Class', 'craftnce'),
                'id'                    =>  'hero_first_button_icon_class',
                'type'                  =>  'text',
            ),
            // Second Button
            array(
                'title'                 =>  __('Show Second Buttons', 'craftnce'),
                'id'                    =>  'is_show_hero_second_buttons',
                'type'                  =>  'switcher',
            ),
            array(
                'title'                 =>  __('Second Button Label', 'craftnce'),
                'id'                    =>  'hero_second_button_label',
                'type'                  =>  'text',
            ),
            array(
                'title'                 =>  __('Second Button Link', 'craftnce'),
                'id'                    =>  'hero_second_button_link',
                'type'                  =>  'link',
            ),
            array(
                'title'                 =>  __('Second Button Font Awesome Icon Class', 'craftnce'),
                'id'                    =>  'hero_second_button_icon_class',
                'type'                  =>  'text',
            ),
        ),
    ));

    // Info Section
    CSF::createSection($option_prefix, array(
        'title'                     =>  __('Info Section Under Hero', 'craftnce'),
        'parent'                    =>  'front_page',
        'fields'                    =>  array(
            array(
                'type'    => 'notice',
                'style'   => 'info',
                'content' => __('<h1>About Us Info Section</h1>', 'craftnce'),
            ),
            array(
                'title'                 =>  __('Show info section inder hero'),
                'id'                    =>  'is_show_info_under_hero',
                'type'                  =>  'switcher',
            ),
            array(
                'title'                 =>  __('Left Image', 'craftnce'),
                'id'                    =>  'first_info_section_left_image',
                'type'                  =>  'media',
            ),
            array(
                'title'                 =>  __('Subtitle', 'craftnce'),
                'id'                    =>  'first_info_section_subtitle',
                'type'                  =>  'text',
            ),
            array(
                'title'                 =>  __('Title', 'craftnce'),
                'id'                    =>  'first_info_section_title',
                'type'                  =>  'text',
            ),
            array(
                'title'                 =>  __('Description', 'craftnce'),
                'id'                    =>  'first_info_section_description',
                'type'                  =>  'wp_editor',
                'height'                =>  '100px',
                'media_buttons'         =>  false,
            ),

            // Buttons
            // First Button
            array(
                'title'                 =>  __('Show First Button', 'craftnce'),
                'id'                    =>  'is_show_about_us_info_first_button',
                'type'                  =>  'switcher',
            ),
            array(
                'title'                 =>  __('Label', 'craftnce'),
                'id'                    =>  'about_us_info_first_button_label',
                'type'                  =>  'text',
            ),
            array(
                'title'                 =>  __('Link', 'craftnce'),
                'id'                    =>  'about_us_info_first_button_link',
                'type'                  =>  'link',
            ),
            array(
                'title'                 =>  __('FontAwesome Icon Class', 'craftnce'),
                'id'                    =>  'about_us_info_first_button_icon',
                'type'                  =>  'text',
            ),

            array(
                'title'                 =>  __('Show Second Button', 'craftnce'),
                'id'                    =>  'is_show_about_us_info_second_button',
                'type'                  =>  'switcher',
            ),
            array(
                'title'                 =>  __('Label', 'craftnce'),
                'id'                    =>  'about_us_info_second_button_label',
                'type'                  =>  'text',
            ),
            array(
                'title'                 =>  __('Link', 'craftnce'),
                'id'                    =>  'about_us_info_second_button_link',
                'type'                  =>  'link',
            ),
            array(
                'title'                 =>  __('FontAwesome Icon Class', 'craftnce'),
                'id'                    =>  'about_us_info_second_button_icon',
                'type'                  =>  'text',
            ),
        ),
    ));

    // Features Info Section
    CSF::createSection($option_prefix, array(
        'title'                     =>  __('Features Info', 'craftnce'),
        'parent'                    =>  'front_page',
        'fields'                    =>  array(
            array(
                'type'    => 'notice',
                'style'   => 'info',
                'content' => __('<h1>Features Info</h1>', 'craftnce'),
            ),
            array(
                'title'                     =>  __('Show Section'),
                'id'                        =>  'is_show_features_section',
                'type'                      =>  'switcher',
            ),
            array(
                'title'                     =>  __('Features Item'),
                'id'                        =>  'features_items',
                'type'                      =>  'repeater',
                'min'                       =>  1,
                'max'                       =>  4,
                'fields'                    =>  array(
                    array(
                        'title'             =>  __('Font-awesome Icon Class', 'craftnce'),
                        'id'                =>  'features_item_icon_class',
                        'type'              =>  'text',
                    ),
                    array(
                        'title'             =>  __('Item Title', 'craftnce'),
                        'id'                =>  'features_item_title',
                        'type'              =>  'text',
                    ),
                ),
            ),
        ),
    ));

    // Services Section
    CSF::createSection($option_prefix, array(
        'title'                     =>  __('Services', 'craftnce'),
        'parent'                    =>  'front_page',
        'fields'                    =>  array(
            array(
                'type'    => 'notice',
                'style'   => 'info',
                'content' => __('<h1>Services</h1>', 'craftnce'),
            ),
            array(
                'title'                     =>  __('Show Section'),
                'id'                        =>  'is_show_service_section',
                'type'                      =>  'switcher',
            ),
            array(
                'title'                     =>  __('Section Subtitle'),
                'id'                        =>  'service_section_subtitle',
                'type'                      =>  'text',
            ),
            array(
                'title'                     =>  __('Section Title'),
                'id'                        =>  'service_section_title',
                'type'                      =>  'text',
            ),
            array(
                'title'                     =>  __('Services Item'),
                'id'                        =>  'features_items',
                'type'                      =>  'repeater',
                'min'                       =>  1,
                'fields'                    =>  array(
                    array(
                        'title'             =>  __('Font-awesome Icon Class', 'craftnce'),
                        'id'                =>  'features_item_icon_class',
                        'type'              =>  'text',
                    ),
                    array(
                        'title'             =>  __('Item Title', 'craftnce'),
                        'id'                =>  'features_item_title',
                        'type'              =>  'text',
                    ),
                ),
            ),
        ),
    ));