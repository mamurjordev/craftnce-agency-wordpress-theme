<?php
    // Typography Colors
    function craftnce_color() {
        ?>
        <style>
            :root {
                --primary-color: <?php echo get_theme_mod('craftnce_primary_color_settings', '#007FE6'); ?>;
                --secondary-color: <?php echo get_theme_mod('craftnce_secondary_color_settings', '#EDF5FB') . '20'; ?>;
                --orange-color: #FFC700;
                --primary-gray: #dedede;
                --font-inconsolata: 'Inconsolata', monospace;
                --overlay: <?php echo get_theme_mod('craftnce_overlay_color_settings', '#082032') . 'd6'; ?>;

                --primary-font: 'Inter', sans-serif;
                --main-shadow: 20px 20px 100px 40px rgba(73, 103, 255, 0.07);
            }

            .counter-bg {
                background: url('<?php echo esc_url(get_theme_mod('craftnce_home_counter_section_featured_image_setting')); ?>');
            }
        </style>
        <?php
    }
    add_action( 'wp_head', 'craftnce_color');

    // Get Codestar Option
    if ( ! function_exists( 'get_craftnce_data' ) ) {
        function get_craftnce_data( $option = '', $default = null ) {
            $options = get_option( 'craftnce_options' );
            return ( isset( $options[$option] ) ) ? $options[$option] : $default;
        }
    }

    // Breadcrumb
    function get_the_breadcrumb() {
        global $post;
        echo '<ol class="breadcrumb mb-0">';
        if (!is_home()) {
            echo '<li class="breadcrumb-item"><a href="';
            echo get_option('home');
            echo '">';
            echo 'Home';
            echo '</a></li>';
            if (is_category() || is_single()) {
                echo '<li class="breadcrumb-item">';
                the_category(' </li><li class="breadcrumb-item active"> / </li><li> ');
                if (is_single()) {
                    echo '</li><li class="text-muted mx-2"> / </li><li class="breadcrumb-item active">';
                    the_title();
                    echo '</li>';
                }
            } elseif (is_page()) {
                if($post->post_parent){
                    $anc = get_post_ancestors( $post->ID );
                    $title = get_the_title();
                    foreach ( $anc as $ancestor ) {
                        $output = '<li class="breadcrumb-item"><a href="'.get_permalink($ancestor).'" title="'.get_the_title($ancestor).'">'.get_the_title($ancestor).'</a></li> <li class="breadcrumb-item active">/</li>';
                    }
                    echo $output;
                    echo '<strong title="'.$title.'"> '.$title.'</strong>';
                } else {
                    echo '<li class="breadcrumb-item active">'.get_the_title().'</li>';
                }
            }
        }
        elseif (is_tag()) {single_tag_title();}
        elseif (is_day()) {echo'<li class="breadcrumb-item active">Archive for '; the_time('F jS, Y'); echo'</li>';}
        elseif (is_month()) {echo'<li class="breadcrumb-item active">Archive for '; the_time('F, Y'); echo'</li>';}
        elseif (is_year()) {echo'<li class="breadcrumb-item active">Archive for '; the_time('Y'); echo'</li>';}
        elseif (is_author()) {echo'<li class="breadcrumb-item active">Author Archive'; echo'</li>';}
        elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {echo '<li class="breadcrumb-item active">Blog Archives'; echo'</li>';}
        elseif (is_search()) {echo'<li class="breadcrumb-item active">Search Results'; echo'</li>';}
        elseif (!is_single() && is_home()) {echo '<li class="breadcrumb-item"><a href="';
            echo get_option('home');
            echo '">';
            echo 'Home';
            echo '</a></li>';
            echo '<li class="text-muted mx-2"> / </li><li class="breadcrumb-item active">';
            echo get_the_title(get_option('page_for_posts', true));
            echo '</li>';
        }
        echo '</ol>';
    }

    // Excerpt wrap by char limit
    function excerpt_char_limit($e){
		return substr($e,0,200);
	}
	add_filter('get_the_excerpt','excerpt_char_limit');