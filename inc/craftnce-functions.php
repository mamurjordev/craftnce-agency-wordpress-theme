<?php
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
        echo '</ol>';
    }

    // Excerpt wrap by char limit
    function excerpt_char_limit($e){
		return substr($e,0,200);
	}
	add_filter('get_the_excerpt','excerpt_char_limit');