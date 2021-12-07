<?php
    CSF::createSection($option_prefix, array(
        'title'                 =>  __('Blog Page', 'craftnce'),
        'fields'                =>  array(
            array(
                'title'                 =>  __('Blog Page Subheader', 'craftnce'),
                'id'                    =>  'blog_page_subheader',
                'type'                  =>  'text',
            ),
            array(
                'title'                 =>  __('Blog Page Header', 'craftnce'),
                'id'                    =>  'blog_page_header',
                'type'                  =>  'text',
            ),
        ),
    ));