<?php
    // Counter Section
    CSF::createSection($option_prefix, array(
        'title'                     =>  __('Counter', 'craftnce'),
        'fields'                    =>  array(
            array(
                'type'    => 'notice',
                'style'   => 'info',
                'content' => __('<h1>Case Study Counter</h1>', 'craftnce'),
            ),
            array(
                'title'                     =>  __('Show Section'),
                'id'                        =>  'is_show_counter_section',
                'type'                      =>  'switcher',
            ),
            array(
                'title'                     =>  __('Section Subtitle'),
                'id'                        =>  'service_counter_subtitle',
                'type'                      =>  'text',
            ),
            array(
                'title'                     =>  __('Section Title'),
                'id'                        =>  'service_counter_title',
                'type'                      =>  'text',
            ),
            array(
                'title'                     =>  __('Counter Item'),
                'id'                        =>  'counter_items',
                'type'                      =>  'repeater',
                'min'                       =>  1,
                'max'                       =>  4,
                'fields'                    =>  array(
                    array(
                        'title'             =>  __('Icon', 'craftnce'),
                        'id'                =>  'counter_icon',
                        'type'              =>  'icon',
                    ),
                    array(
                        'title'             =>  __('Countable Numbers', 'craftnce'),
                        'id'                =>  'countable_numbers',
                        'type'              =>  'text',
                    ),
                    array(
                        'title'             =>  __('Title', 'craftnce'),
                        'id'                =>  'counter_title',
                        'type'              =>  'text',
                    ),
                ),
            ),
        ),
    ));