<div class="col-xl-4 mt-5 mt-xl-0">
    <div class="sticky-sidebar sticky-top">
        <?php
            if(is_active_sidebar('page_sidebar')) {
                dynamic_sidebar('page_sidebar');
            }
        ?>
    </div>
</div>