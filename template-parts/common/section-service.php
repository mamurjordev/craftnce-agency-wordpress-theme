<div class="row my-5">
    <?php
        $craftnce_service_repeater = get_theme_mod('craftnce_home_service_item_settings');
        $craftnce_service_repeater_decoded = json_decode($craftnce_service_repeater);
        if(!empty($craftnce_service_repeater_decoded)) :
            foreach($craftnce_service_repeater_decoded as $repeater_item) :
    ?>
    <div class="col-md-6 col-lg-4 mt-4">
        <div class="card service p-4 border-0">
            <img src="<?php echo esc_url($repeater_item->image_url); ?>" alt="">
            <h4 class="fw-bold my-3 font-inter">
                <?php
                    echo $repeater_item->title;
                ?>
            </h4>
            <p class="text-sm text-muted lh-base">
                <?php echo $repeater_item->text; ?>
            </p>
        </div>
    </div>
    <?php
            endforeach;
        endif;
    ?>
</div>