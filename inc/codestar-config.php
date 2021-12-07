<?php
    if(class_exists('CSF')) {
        $option_prefix = 'craftnce_options';

        CSF::createOptions($option_prefix, array(
            'menu_title'                =>  __('Craftnce Options', 'craftnce'),
            'menu_slug'                 =>  'craftnce-options',
            'menu_icon'                 =>  'dashicons-screenoptions'
        ));

        // General Options
        include_once get_template_directory().'/inc/option-panel/option-general.php';

        // Page Specific Options
        include_once get_template_directory().'/inc/option-panel/page/option-front-page.php';
        include_once get_template_directory().'/inc/option-panel/page/option-about.php';
        include_once get_template_directory().'/inc/option-panel/page/option-blog.php';

        // Common Sections
        include_once get_template_directory().'/inc/option-panel/sections/sections.php';
    }