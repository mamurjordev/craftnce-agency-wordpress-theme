<?php
    // Typography Colors
    function craftnce_color() {
        ?>
        <style>
            :root {
                --primary-color: <?php echo sanitize_hex_color(get_theme_mod('craftnce_primary_color_settings', '#007FE4')); ?>;
                --secondary-color: <?php echo sanitize_hex_color(get_theme_mod('craftnce_secondary_color_settings', '#EDF5FB')); ?>;
                --section-bg: <?php echo sanitize_hex_color(get_theme_mod('craftnce_section_bg_color_settings', '#082032')); ?>;
                --footer-bg: <?php echo sanitize_hex_color(get_theme_mod('craftnce_footer_bg_color_settings', '#082032')); ?>;
                --overlay: <?php echo sanitize_hex_color(get_theme_mod('craftnce_overlay_color_settings', '#082032')); ?>;

                --orange-color: #FFC700;
                --primary-gray: #dedede;
                --main-shadow: 20px 20px 100px 40px rgba(73, 103, 255, 0.07);

                --font-rubik: 'Rubik', sans-serif;
                --primary-font: 'Inter', sans-serif;
            }

            .counter-bg {
                background: url('<?php echo esc_url(get_theme_mod('craftnce_section_counter_section_featured_image_setting')); ?>');
                background-position: center;
                background-size: cover;
                background-repeat: no-repeat;
            }
            .newsletter-bg {
                background: url('<?php echo esc_url(get_theme_mod('craftnce_newsletter_section_background_image_setting')); ?>');
                background-position: center;
                background-size: cover;
                background-repeat: no-repeat;
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
            echo esc_url(home_url());
            echo '">';
            echo 'Home';
            echo '</a></li>';
            if (is_category() || is_single()) {
                $category = get_the_category();
                echo '<li class="breadcrumb-item active">' . $category[0]->cat_name . '</li><li>';
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
            echo esc_url(home_url());
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

    function theme_prefix_register_elementor_locations( $elementor_theme_manager ) {
        $elementor_theme_manager->register_all_core_location();
    }
    add_action( 'elementor/theme/register_locations', 'theme_prefix_register_elementor_locations' );


    function craftnce_comment_text_before($arg) {
        $arg['comment_notes_before'] = "<p class='comment-policy'>We are glad you have chosen to leave a comment.</p>";
        return $arg;
    }
      
    add_filter('comment_form_defaults', 'craftnce_comment_text_before');

    /**
     * Fix skip link focus in IE11.
     *
     * This does not enqueue the script because it is tiny and because it is only for IE11,
     * thus it does not warrant having an entire dedicated blocking script being loaded.
     *
     * @link https://git.io/vWdr2
     */
function craftnce_skip_link_focus_fix() {
	// The following is minified via `terser --compress --mangle -- js/skip-link-focus-fix.js`.
?>
	<script>
	    /(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())},!1);
	</script>
<?php
}
add_action( 'wp_print_footer_scripts', 'craftnce_skip_link_focus_fix' );