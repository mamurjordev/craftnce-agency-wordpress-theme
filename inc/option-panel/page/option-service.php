<?php
    CSF::createSection($option_prefix, array(
        'title'                     =>  __('Service Page', 'craftnce'),
        'id'                        => 'service_page',
    ));

    CSF::createSection($option_prefix, array(
        'title'                     =>  __('Info Section', 'craftnce'),
        'parent'                    =>  'service_page',
        'fields'                    =>  array(
            array(
                'type'    => 'notice',
                'style'   => 'info',
                'content' => __('<h1>Info Tabs Section</h1>', 'craftnce'),
            ),
            array(
                'title'                 =>  __('Show Section', 'craftnce'),
                'id'                    =>  'is_show_service_tab_info_section',
                'type'                  =>  'switcher',
            ),
            array(
                'title'                 =>  __('Title', 'craftnce'),
                'id'                    =>  'service_tab_info_section_title',
                'type'                  =>  'text',
            ),
            array(
                'title'                 =>  __('Tabs', 'craftnce'),
                'id'                    =>  'service_tab_section',
                'type'                  =>  'repeater',
                'max'                   =>  4,
                'fields'                =>  array(
                    array(
                        'title'             =>  __('Title', 'craftnce'),
                        'id'                =>  'service_tabs_title',
                        'type'              =>  'text'
                    ),
                    array(
                        'title'             =>  __('Description', 'craftnce'),
                        'id'                =>  'service_tabs_description',
                        'type'              =>  'wp_editor',
                        'media_buttons'     =>  false,
                        'height'            =>  '100px'
                    ),
                ),
            ),
        ),
    ));