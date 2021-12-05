<?php
    if(class_exists('CSF')) {
        $option_prefix = 'craftnce_options';

        CSF::createOptions($option_prefix, array(
            'menu_title'                =>  __('Craftnce Options', 'craftnce'),
            'menu_slug'                 =>  'craftnce-options',
            'menu_icon'                 =>  'dashicons-screenoptions'
        ));

        include_once get_template_directory().'/inc/option-panel/option-general.php';
    }