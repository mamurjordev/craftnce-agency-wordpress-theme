<?php
    CSF::createSection($option_prefix, array(
        'title'                     =>  __('Sections', 'craftnce'),
        'id'                        => 'sections',
    ));

    include_once get_template_directory().'/inc/option-panel/sections/option-service.php';
    include_once get_template_directory().'/inc/option-panel/sections/option-counter.php';
    include_once get_template_directory().'/inc/option-panel/sections/option-testimonial.php';
    include_once get_template_directory().'/inc/option-panel/sections/option-brand-logo.php';
    include_once get_template_directory().'/inc/option-panel/sections/option-blog-section.php';