<?php
    if(get_craftnce_data('is_show_service_section')) :
?>

<section>
    <div class="container py-5">
        <div class="row text-center">
            <h6 class="text-uppercase fw-bold text-md text-primary">
                <?php echo get_craftnce_data('service_section_subtitle'); ?>
            </h6>
            <h2 class="text-capitalize fw-900 text-xl mt-3">
                <?php echo get_craftnce_data('service_section_title'); ?>
            </h2>
        </div>
        <div class="row my-5">
            <?php
                $service_items = get_craftnce_data('service_items');
                $service_count = count((array)$service_items);

                for($i = 0; $i < $service_count; $i++) :
            ?>
            <div class="col-md-6 col-lg-4 mt-4">
                <div class="card service p-4 border-0">
                    <img src="<?php echo esc_url($service_items[$i]['service_icon']['url']); ?>" alt="">
                    <h4 class="fw-bold my-3">
                        <?php
                            echo $service_items[$i]['service_item_title'];
                        ?>
                    </h4>
                    <p class="text-sm text-muted lh-base">
                        <?php echo $service_items[$i]['service_item_description']; ?>
                    </p>
                </div>
            </div>
            <?php endfor; ?>
        </div>
    </div>
</section>
<?php
    endif;
?>