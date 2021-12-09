<?php
    if(get_craftnce_data('is_show_counter_section')) :
?>

<!-- Counter Section -->
<section class="counter-bg">
    <div class="counter-overlay py-50">
        <div class="container text-center py-5">
            <h6 class="text-uppercase text-md fw-bold counter-section-subtitle">
                <?php
                    echo get_craftnce_data('service_counter_subtitle');
                ?>
            </h6>
            <h2 class="text-uppercase text-light fw-900 text-xl mt-3">
                <?php
                    echo get_craftnce_data('service_counter_title');
                ?>
            </h2>

            <div class="row mt-5">
                <?php
                    $counter_items = get_craftnce_data('counter_items');
                    $_counter = count((array)$counter_items);
                    
                    for($i = 0; $i < $_counter; $i++) :
                ?>
                <div class="col-sm-6 col-lg-3 text-uppercase">
                    <i class="<?php echo esc_attr($counter_items[$i]['counter_icon']); ?> text-warning fs-48 mb-3"></i>
                    <h2 class="text-uppercase text-light fw-900 fs-48">
                        <?php echo $counter_items[$i]['countable_numbers']; ?>
                    </h2>
                    <p class="text-white">
                        <?php echo $counter_items[$i]['counter_title']; ?>
                    </p>
                </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>
</section>
<?php
    endif;
?>