<div class="row">
    <div class="col-6 col-xl-4 mt-4 footer-address-area">
        <?php
            if(is_active_sidebar( 'footer_bottom_first_widget_area' )) {
                dynamic_sidebar( 'footer_bottom_first_widget_area' );
            }
        ?>
    </div>

    <div class="col-6 col-xl-4 mt-4">
        <?php
            if(is_active_sidebar( 'footer_bottom_second_widget_area' )) {
                dynamic_sidebar( 'footer_bottom_second_widget_area' );
            }
        ?>
    </div>

    <div class="col-6 col-xl-4 mt-4">
        <?php
            if(is_active_sidebar( 'footer_bottom_third_widget_area' )) {
                dynamic_sidebar( 'footer_bottom_third_widget_area' );
            }
        ?>
    </div>
</div>