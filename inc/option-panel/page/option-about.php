<?php
    CSF::createSection($option_prefix, array(
        'title'                     =>  __('About Page', 'craftnce'),
        'id'                        => 'about_page',
    ));

    CSF::createSection($option_prefix, array(
        'title'                     =>  __('Info Section', 'craftnce'),
        'parent'                    =>  'about_page',
        'fields'                    =>  array(
            array(
                'type'    => 'notice',
                'style'   => 'info',
                'content' => __('<h1>Info Section</h1>', 'craftnce'),
            ),
            array(
                'title'                 =>  __('Show Section', 'craftnce'),
                'id'                    =>  'is_show_about_page_info_section',
                'type'                  =>  'switcher',
            ),
            array(
                'title'                 =>  __('Featured Image', 'craftnce'),
                'id'                    =>  'about_page_info_feat_image',
                'type'                  =>  'media',
            ),
            array(
                'title'                 =>  __('Title', 'craftnce'),
                'id'                    =>  'about_page_info_title',
                'type'                  =>  'text',
            ),
            array(
                'title'                 =>  __('Subtitle', 'craftnce'),
                'id'                    =>  'about_page_info_subtitle',
                'type'                  =>  'text',
            ),
            array(
                'title'                 =>  __('Description', 'craftnce'),
                'id'                    =>  'about_page_info_description',
                'type'                  =>  'wp_editor',
                'media_buttons'         =>  false,
                'height'                =>  '150px',
            ),
        ),
    ));

    CSF::createSection($option_prefix, array(
        'title'                     =>  __('Case Study', 'craftnce'),
        'parent'                    =>  'about_page',
        'fields'                    =>  array(
            array(
                'type'    => 'notice',
                'style'   => 'info',
                'content' => __('<h1>Case Study Section</h1>', 'craftnce'),
            ),
            array(
                'title'                 =>  __('Show Section', 'craftnce'),
                'id'                    =>  'is_show_about_page_case_study_section',
                'type'                  =>  'switcher',
            ),
            array(
                'title'                 =>  __('Featured Image', 'craftnce'),
                'id'                    =>  'about_page_case_study_feat_image',
                'type'                  =>  'media',
            ),
            array(
                'title'                 =>  __('Title', 'craftnce'),
                'id'                    =>  'about_page_case_study_title',
                'type'                  =>  'text',
            ),
            array(
                'title'                 =>  __('Description', 'craftnce'),
                'id'                    =>  'about_page_case_study_short_description',
                'type'                  =>  'wp_editor',
                'media_buttons'         =>  false,
                'height'                =>  '150px',
            ),

            array(
                'type'    => 'notice',
                'style'   => 'info',
                'content' => __('<h1>Case Study Box</h1>', 'craftnce'),
            ),
            array(
                'title'                 =>  __('Show Box', 'craftnce'),
                'id'                    =>  'is_show_about_page_case_study_box',
                'type'                  =>  'switcher',
            ),
            array(
                'title'                 =>  __('Title', 'craftnce'),
                'id'                    =>  'about_page_case_study_box_title',
                'type'                  =>  'text',
            ),
            array(
                'title'                 =>  __('Description', 'craftnce'),
                'id'                    =>  'about_page_case_study_box_short_description',
                'type'                  =>  'wp_editor',
                'media_buttons'         =>  false,
                'height'                =>  '100px',
            ),
            array(
                'title'                 =>  __('Info Grid', 'craftnce'),
                'id'                    =>  'about_page_case_study_info_grid',
                'type'                  =>  'repeater',
                'min'                   =>  1,
                'max'                   =>  2,
                'fields'                =>  array(
                    array(
                        'title'             =>  __('Icon', 'craftnce'),
                        'id'                =>  'case_study_info_grid_icon',
                        'type'              =>  'icon'
                    ),
                    array(
                        'title'             =>  __('Title', 'craftnce'),
                        'id'                =>  'case_study_info_grid_title',
                        'type'              =>  'text'
                    ),
                    array(
                        'title'             =>  __('Description', 'craftnce'),
                        'id'                =>  'case_study_info_grid_description',
                        'type'              =>  'wp_editor',
                        'media_buttons'     =>  false,
                        'height'            =>  '100px',
                    ),
                ),
            ),
        ),
    ));

    // Skill Progressbar
    CSF::createSection($option_prefix, array(
        'title'                     =>  __('Skills', 'craftnce'),
        'parent'                    =>  'about_page',
        'fields'                    =>  array(
            array(
                'type'    => 'notice',
                'style'   => 'info',
                'content' => __('<h1>Info Section</h1>', 'craftnce'),
            ),
            array(
                'title'                 =>  __('Show Section', 'craftnce'),
                'id'                    =>  'is_show_about_page_skill_section',
                'type'                  =>  'switcher',
            ),
            array(
                'title'                 =>  __('Title', 'craftnce'),
                'id'                    =>  'about_page_skill_section_title',
                'type'                  =>  'text',
            ),
            array(
                'title'                 =>  __('Award Box', 'craftnce'),
                'id'                    =>  'is_show_about_page_skill_section_award_box',
                'type'                  =>  'switcher',
            ),
            array(
                'title'                 =>  __('Award Box Icon', 'craftnce'),
                'id'                    =>  'about_page_skill_section_award_box_icon',
                'type'                  =>  'icon',
            ),
            array(
                'title'                 =>  __('Award Box Title', 'craftnce'),
                'id'                    =>  'about_page_skill_section_award_box_title',
                'type'                  =>  'text',
            ),
            array(
                'title'             =>  __('Description', 'craftnce'),
                'id'                =>  'about_page_skill_section_award_box_description',
                'type'              =>  'wp_editor',
                'media_buttons'     =>  false,
                'height'            =>  '100px',
            ),
            array(
                'title'                 =>  __('Progress Bar', 'craftnce'),
                'id'                    =>  'about_page_skill_progress_bars',
                'type'                  =>  'repeater',
                'min'                   =>  1,
                'max'                   =>  5,
                'fields'                =>  array(
                    array(
                        'title'             =>  __('Title', 'craftnce'),
                        'id'                =>  'skill_title',
                        'type'              =>  'text'
                    ),
                    array(
                        'title'             =>  __('Percentage Text', 'craftnce'),
                        'id'                =>  'skill_percentage_text',
                        'type'              =>  'text',
                    ),
                    array(
                        'title'             =>  __('Percentage', 'craftnce'),
                        'id'                =>  'skill_percentage_progress',
                        'type'              =>  'slider',
                    ),
                ),
            ),
        ),
    ));