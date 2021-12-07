<?php
    // Testimonial Section
    CSF::createSection($option_prefix, array(
        'title'                     =>  __('Testimonial', 'craftnce'),
        'parent'                    =>  'sections',
        'fields'                    =>  array(
            array(
                'type'    => 'notice',
                'style'   => 'info',
                'content' => __('<h1>Testimonial Slider</h1>', 'craftnce'),
            ),
            array(
                'title'                     =>  __('Show Section'),
                'id'                        =>  'is_show_testimonial_section',
                'type'                      =>  'switcher',
            ),
            array(
                'title'                     =>  __('Section Subtitle'),
                'id'                        =>  'testimonial_section_subtitle',
                'type'                      =>  'text',
            ),
            array(
                'title'                     =>  __('Section Title'),
                'id'                        =>  'testimonial_section_title',
                'type'                      =>  'text',
            ),
            array(
                'title'                     =>  __('Testimonial Item'),
                'id'                        =>  'testimonial_items',
                'type'                      =>  'repeater',
                'min'                       =>  1,
                'fields'                    =>  array(
                    array(
                        'title'             =>  __('Thumbnail', 'craftnce'),
                        'id'                =>  'testimonial_thumbnail',
                        'type'              =>  'media',
                    ),
                    array(
                        'title'             =>  __('Testimonial Title', 'craftnce'),
                        'id'                =>  'testimonial_person_designation',
                        'type'              =>  'text',
                    ),
                    array(
                        'title'             =>  __('Testimonial Title', 'craftnce'),
                        'id'                =>  'testimonial_title',
                        'type'              =>  'text',
                    ),
                    array(
                        'title'             =>  __('Testimonial Message', 'craftnce'),
                        'id'                =>  'testimonial_message',
                        'type'              =>  'text',
                    ),
                ),
            ),
        ),
    ));