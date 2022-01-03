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