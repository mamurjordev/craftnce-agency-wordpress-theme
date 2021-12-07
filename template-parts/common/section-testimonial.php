<?php
    if(get_craftnce_data('is_show_testimonial_section')) :
?>

<!-- Testimonial Section -->
<section>
    <div class="py-50">
        <div class="container text-center py-5">
            <div class="row">
                <div class="col-lg-7 mx-auto">
                    <h6 class="text-uppercase text-md fw-bold text-primary">
                        <?php
                            echo get_craftnce_data('testimonial_section_subtitle');
                        ?>
                    </h6>
                    <h2 class="text-uppercase fw-900 text-xl mt-3">
                        <?php
                            echo get_craftnce_data('testimonial_section_title');
                        ?>
                    </h2>
                </div>
            </div>

            <div class="row position-relative mt-5 pt-5">
                <div class="col-xl-10 offset-xl-1" >
                    <div class="testimonial-nav mb-30 d-flex justify-items-center">
                        <?php
                            $testimonial_items_avatar = get_craftnce_data('testimonial_items');
                            $testimonial_avatar_count = count((array)$testimonial_items_avatar);
                            
                            for($i = 0; $i < $testimonial_avatar_count; $i++) :
                        ?>
                        <div class="testimonial-thumb">
                            <img src="<?php echo esc_url($testimonial_items_avatar[$i]['testimonial_thumbnail']['url']); ?>" alt="">
                        </div>
                        <?php endfor; ?>
                    </div>
                    <div class="testimonial-active mt-5">
                        <?php
                            $testimonial_items = get_craftnce_data('testimonial_items');
                            $testimonial_count = count((array)$testimonial_items);
                            
                            for($i = 0; $i < $testimonial_count; $i++) :
                        ?>
                        <div class="testimonial-item text-center">
                            <div class="designation mb-30">
                                <h3>
                                    <?php
                                        echo $testimonial_items[$i]['testimonial_title'];
                                    ?>
                                </h3>
                                <span>
                                    <?php
                                        echo $testimonial_items[$i]['testimonial_person_designation'];
                                    ?>
                                </span>
                            </div>
                            <p>
                                <?php
                                    echo $testimonial_items[$i]['testimonial_message'];
                                ?>
                            </p>
                            <div class="rating w-max mx-auto d-flex">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/star.png" alt="">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/star.png" alt="">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/star.png" alt="">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/star.png" alt="">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/star.png" alt="">
                            </div>
                        </div>
                        <?php endfor; ?>
                    </div>
                </div>
                <div class="d-flex justify-content-between top-50 position-absolute">
                    <button type="button" class="prev btn btn-primary rounded-0 px-2 py-0 fs-3"><i class="ri-arrow-left-s-line"></i></button>
                    <button type="button" class="next btn btn-primary rounded-0 px-2 py-0 fs-3"><i class="ri-arrow-right-s-line"></i></button>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
    endif;
?>