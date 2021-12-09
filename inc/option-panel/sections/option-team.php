<?php
    // Testimonial Section
    CSF::createSection($option_prefix, array(
        'title'                     =>  __('Team Members', 'craftnce'),
        'parent'                    =>  'sections',
        'fields'                    =>  array(
            array(
                'type'    => 'notice',
                'style'   => 'info',
                'content' => __('<h1>Team Members</h1>', 'craftnce'),
            ),
            array(
                'title'                     =>  __('Show Section'),
                'id'                        =>  'is_show_team_section',
                'type'                      =>  'switcher',
            ),
            array(
                'title'                     =>  __('Section Title'),
                'id'                        =>  'team_section_title',
                'type'                      =>  'text',
            ),
            array(
                'title'                     =>  __('Team Members'),
                'id'                        =>  'team_member_items',
                'type'                      =>  'repeater',
                'min'                       =>  1,
                'fields'                    =>  array(
                    array(
                        'title'             =>  __('Thumbnail', 'craftnce'),
                        'id'                =>  'team_member_thumbnail',
                        'type'              =>  'media',
                    ),
                    array(
                        'title'             =>  __('Name', 'craftnce'),
                        'id'                =>  'team_member_name',
                        'type'              =>  'text',
                    ),
                    array(
                        'title'             =>  __('Designation', 'craftnce'),
                        'id'                =>  'team_member_designation',
                        'type'              =>  'text',
                    ),
                    array(
                        'title'             =>  __('Social Media', 'craftnce'),
                        'id'                =>  'team_member_social_media',
                        'type'              =>  'repeater',
                        'fields'                    =>  array(
                            array(
                                'title'             =>  __('Social Media Name'),
                                'id'                =>  'social_media_name',
                                'type'              =>  'text',
                            ),
                            array(
                                'title'             =>  __('Social Media Icon'),
                                'id'                =>  'social_media_icon',
                                'type'              =>  'icon',
                            ),
                            array(
                                'title'             =>  __('Social Media Profile Link'),
                                'id'                =>  'social_media_link',
                                'type'              =>  'link',
                            ),
                        )
                    ),
                ),
            ),
        ),
    ));