<?php
    if(get_craftnce_data('is_show_counter_section')) :
?>

<!-- Counter Section -->
<section class="counter-bg">
    <div class="counter-overlay py-50">
        <div class="container text-center py-5">
            <h6 class="text-uppercase text-md fw-bold counter-section-subtitle">
                <?php
                    echo esc_html( get_theme_mod('craftnce_home_counter_subheading_setting') );
                ?>
            </h6>
            <h2 class="text-uppercase text-light fw-900 text-xl mt-3">
                <?php
                    echo esc_html( get_theme_mod('craftnce_home_counter_heading_setting') );
                ?>
            </h2>

            <div class="row mt-5">
                <?php
                    $craftnce_counter_repeater = get_theme_mod('craftnce_home_counter_item_settings');
                    $craftnce_counter_repeater_decoded = json_decode($craftnce_counter_repeater);
                    if(!empty($craftnce_counter_repeater_decoded)) :
                        foreach($craftnce_counter_repeater_decoded as $repeater_item) :
                ?>
                <div class="col-sm-6 col-lg-3 text-uppercase">
                    <i class="<?php echo esc_attr($repeater_item->icon_value); ?> text-warning fs-48 mb-3"></i>
                    <h2 class="text-uppercase text-light fw-900 fs-48">
                        <?php echo $repeater_item->title; ?>
                    </h2>
                    <p class="text-white">
                        <?php echo $repeater_item->text; ?>
                    </p>
                </div>
                <?php
                        endforeach;
                    endif;
                ?>
            </div>
        </div>
    </div>
</section>
<?php
    endif;
?>