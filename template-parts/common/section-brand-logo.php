<?php
    if(get_craftnce_data('is_show_brand_slider_section')) :
?>

<!-- Band Logo Section -->
<div class="brand my-5">
    <?php
        global $craftnce_options;

        $gallery_opt = get_craftnce_data('brand_slider_logo');
        $gallery_ids = explode( ',', $gallery_opt );
        
        if ( ! empty( $gallery_ids ) ) :
            foreach ( $gallery_ids as $gallery_item_id ) :
    ?>
    <div>
        <img src="<?php echo wp_get_attachment_url($gallery_item_id); ?>" alt="">
    </div>
    <?php
            endforeach;
        endif;
    ?>
</div>

<?php
    endif;
?>