<?php
    // Blog Section
    CSF::createSection($option_prefix, array(
        'title'                     =>  __('Blog Section', 'craftnce'),
        'parent'                    =>  'sections',
        'fields'                    =>  array(
            array(
                'type'    => 'notice',
                'style'   => 'info',
                'content' => __('<h1>Brand Slider</h1>', 'craftnce'),
            ),
            array(
                'title'                     =>  __('Show Section', 'craftnce'),
                'id'                        =>  'is_show_blog_section',
                'type'                      =>  'switcher',
            ),
            array(
                'title'                     =>  __('Section Title', 'craftnce'),
                'id'                        =>  'blog_section_title',
                'type'                      =>  'text',
            ),
            array(
                'title'                     =>  __('Section Subtitle', 'craftnce'),
                'id'                        =>  'blog_section_subtitle',
                'type'                      =>  'text',
            ),

            // See More Button
            array(
                'title'                     =>  __('Show See More Button', 'craftnce'),
                'id'                        =>  'is_show_see_more_blog_btn',
                'type'                      =>  'switcher',
            ),
            array(
                'title'                     =>  __('See full blog button label', 'craftnce'),
                'id'                        =>  'see_full_blog_button_label',
                'type'                      =>  'text',
            ),
            array(
                'title'                     =>  __('See full blog button icon', 'craftnce'),
                'id'                        =>  'see_full_blog_button_icon',
                'type'                      =>  'icon',
            ),
            array(
                'title'                     =>  __('See full blog button link', 'craftnce'),
                'id'                        =>  'see_full_blog_button_url',
                'type'                      =>  'link',
            ),
        ),
    ));