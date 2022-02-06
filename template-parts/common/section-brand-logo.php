<!-- Band Logo Section -->
<section class="py-5">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h2 class="fs-48 fw-900 text-uppercase">
                <?php echo esc_html( get_theme_mod('craftnce_brand_section_heading_setting', 'Trusted over 100+ companies') ); ?>
            </h2>
            <p class="text-muted">
                <?php echo esc_html( get_theme_mod('craftnce_brand_section_short_description_setting', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum asperiores labore tenetur?') ); ?>
            </p>
        </div>
        <div class="brand d-flex justify-content-between flex-wrap align-items-center align-content-center">
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