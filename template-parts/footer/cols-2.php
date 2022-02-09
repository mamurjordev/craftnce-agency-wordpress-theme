<div class="row row-cols-sm-2">
    <div class="col mt-4 widget-area">
        <?php
            if(is_active_sidebar( 'first_upper_footer_widget_area' )) {
                dynamic_sidebar( 'first_upper_footer_widget_area' );
            }
        ?>
    </div>
    <div class="col mt-4 widget-area">
        <?php
            if(is_active_sidebar( 'second_upper_footer_widget_area' )) {
                dynamic_sidebar( 'second_upper_footer_widget_area' );
            }
        ?>
    </div>
</div>

<hr class="footer-bottom-line">