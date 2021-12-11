<?php
    if(get_craftnce_data('is_show_brand_slider_section')) :
?>

<!-- Band Logo Section -->
<div class="brand my-5">
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

<?php
    endif;
?>