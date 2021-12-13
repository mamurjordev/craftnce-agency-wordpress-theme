<!-- Band Logo Section -->
<section class="py-5">
    <div class="container py-5">
        <div class="mb-4 text-center">
            <h2 class="fs-48 fw-900 text-uppercase">
                <?php echo esc_html( get_theme_mod('craftnce_brand_section_heading_setting') ); ?>
            </h2>
            <p>
                <?php echo esc_html( get_theme_mod('craftnce_brand_section_short_description_setting') ); ?>
            </p>
        </div>
        <div class="brand my-5 d-flex justify-content-between flex-wrap align-items-center align-content-center">
            <?php
                $craftnce_brand_repeater = get_theme_mod('craftnce_home_brand_item_settings');
                $craftnce_brand_repeater_decoded = json_decode($craftnce_brand_repeater);
                if(!empty($craftnce_brand_repeater_decoded)) :
                    foreach($craftnce_brand_repeater_decoded as $repeater_item) :
            ?>
            <div>
                <img src="<?php echo esc_url($repeater_item->image_url); ?>" alt="">
            </div>
            <?php
                    endforeach;
                endif;
            ?>
        </div>
    </div>
</section>