<?php
    CSF::createSection($option_prefix, array(
        'title'                     =>  __('Page', 'craftnce'),
        'id'                        =>  'options_page',
    ));

    CSF::createSection($option_prefix, array(
        'title'                     =>  __('Front Page', 'craftnce'),
        'parent'                    =>  'options_page',
        'fields'                    =>  array(
            array(
                'type'    => 'notice',
                'style'   => 'info',
                'content' => '<h1>Hero Section</h1>',
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
            array(
                'title'                 =>  __('Show Hero Buttons', 'craftnce'),
                'id'                    =>  'is_show_hero_buttons',
                'type'                  =>  'switcher',
            ),
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

            array(
                'type'    => 'notice',
                'style'   => 'info',
                'content' => '<h1>First Info Section Under Hero Section</h1>',
            ),
            array(
                'title'                 =>  __('Left Image', 'craftnce'),
                'id'                    =>  'first_info_section_left_image',
                'type'                  =>  'media',
            ),
        ),
    ));