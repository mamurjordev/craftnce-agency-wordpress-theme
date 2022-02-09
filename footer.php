        <?php if(get_theme_mod('craftnce_footer_widget_show_setting', 1)) : ?>
        <div class="footer-widget-wrapper py-5">
            <div class="container">
                <?php
                    // Upper Panel
                    if('col_6' === get_theme_mod('craftnce_footer_widget_upper_section_layout_setting')) {
                        get_template_part('/template-parts/footer/six-quarter');
                    } elseif('col_4' === get_theme_mod('craftnce_footer_widget_upper_section_layout_setting')) {
                        get_template_part('/template-parts/footer/quarter');
                    } elseif('col_2' === get_theme_mod('craftnce_footer_widget_upper_section_layout_setting')) {
                        get_template_part('/template-parts/footer/cols-2');
                    }
// Bottom Panel
                    if('col_b_3' === get_theme_mod('craftnce_footer_widget_bottom_section_layout_setting')) {
                        get_template_part('/template-parts/footer/bottom-3-panel');
                    } elseif('col_b_2' === get_theme_mod('craftnce_footer_widget_bottom_section_layout_setting')) {
                        get_template_part('/template-parts/footer/bottom-2-panel');
                    } elseif('col_b_1' === get_theme_mod('craftnce_footer_widget_bottom_section_layout_setting')) {
                        get_template_part('/template-parts/footer/bottom-1-panel');
                    }
                ?>
            </div>
        </div>
        <?php endif; ?>
        
        <footer class="main-footer py-4">
            <div class="container">
                <div class="copyright-text text-center text-light text-sm">
                    <?php
                        if(get_theme_mod('craftnce_copyright_text_settings')) {
                            echo esc_html( get_theme_mod('craftnce_copyright_text_settings'));
                        } else {
                            echo '@ Craftnce | Developed by <a href="https://mamurjor.com/">Mamurjor</a> | 2021';
                        }
                    ?>
                </div>
            </div>
        </footer>
    </div>

    <?php wp_footer(); ?>
</body>
</html>