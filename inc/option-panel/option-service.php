<?php
    // Services Section
    CSF::createSection($option_prefix, array(
        'title'                     =>  __('Services', 'craftnce'),
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
                'id'                        =>  'service_items',
                'type'                      =>  'repeater',
                'min'                       =>  1,
                'fields'                    =>  array(
                    array(
                        'title'             =>  __('Icon', 'craftnce'),
                        'id'                =>  'service_icon',
                        'type'              =>  'media',
                    ),
                    array(
                        'title'             =>  __('Item Title', 'craftnce'),
                        'id'                =>  'service_item_title',
                        'type'              =>  'text',
                    ),
                    array(
                        'title'             =>  __('Item Description', 'craftnce'),
                        'id'                =>  'service_item_description',
                        'type'              =>  'wp_editor',
                        'height'            =>  '100px',
                        'media_buttons'     =>  false
                    ),
                ),
            ),
        ),
    ));