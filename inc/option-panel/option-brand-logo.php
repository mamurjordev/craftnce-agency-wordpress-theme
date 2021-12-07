<?php
    // Brand Slider Section
    CSF::createSection($option_prefix, array(
        'title'                     =>  __('Brands', 'craftnce'),
        'fields'                    =>  array(
            array(
                'type'    => 'notice',
                'style'   => 'info',
                'content' => __('<h1>Brand Slider</h1>', 'craftnce'),
            ),
            array(
                'title'                     =>  __('Show Section'),
                'id'                        =>  'is_show_brand_slider_section',
                'type'                      =>  'switcher',
            ),
            array(
                'title'                     =>  __('Section Title'),
                'id'                        =>  'brand_slider_section_title',
                'type'                      =>  'text',
            ),
            array(
                'title'                     =>  __('Section Description'),
                'id'                        =>  'brand_section_description',
                'type'                      =>  'wp_editor',
                'media_buttons'             =>  false,
                'height'                    =>  '100px',
            ),
            array(
                'title'                     =>  __('Logo Gallery'),
                'id'                        =>  'brand_slider_logo',
                'type'                      =>  'gallery',
            ),
        ),
    ));