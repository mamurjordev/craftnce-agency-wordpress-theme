<?php
    CSF::createSection($option_prefix, array(
        'title'                     =>  __('About Page', 'craftnce'),
        'id'                        => 'about_page',
    ));

    CSF::createSection($option_prefix, array(
        'title'                     =>  __('Info Section', 'craftnce'),
        'id'                        => 'about_page_info',
        'parent'                    =>  'about_page',
        'fields'                    =>  array(
            array(
                'title'                 =>  __('Show Section', 'craftnce'),
                'id'                    =>  'is_show_about_page_info_section',
                'type'                  =>  'switcher',
            ),
        ),
    ));