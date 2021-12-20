<!-- Testimonial Section -->
<section>
    <div class="py-50">
        <div class="container text-center py-5">
            <div class="row">
                <div class="col-lg-7 mx-auto">
                    <h6 class="text-uppercase text-md fw-bold text-primary">
                        <?php
                            echo esc_html( get_theme_mod('craftnce_home_testimonials_subheading_setting', 'testimonials') );
                        ?>
                    </h6>
                    <h2 class="text-uppercase fw-900 text-xl mt-3">
                        <?php
                            echo esc_html( get_theme_mod('craftnce_home_testimonials_heading_setting', 'Our worldwide clients says about us') );
                        ?>
                    </h2>
                </div>
            </div>

            <div class="row position-relative mt-5 pt-5">
                <div class="col-xl-10 offset-xl-1" >
                    <div class="testimonial-nav mb-30 d-flex justify-items-center">
                        <?php
                            $craftnce_features_repeater = get_theme_mod('craftnce_home_testimonials_item_settings');
                            $craftnce_features_repeater_decoded = json_decode($craftnce_features_repeater);
                            if(!empty($craftnce_features_repeater_decoded)) :
                                foreach($craftnce_features_repeater_decoded as $repeater_item) :
                        ?>
                        <div class="testimonial-thumb">
                            <img src="<?php echo esc_url($repeater_item->image_url); ?>" class="rounded-circle" alt="">
                        </div>
                        <?php
                                endforeach;
                            endif;
                        ?>
                    </div>
                    <div class="testimonial-active mt-5">
                        <?php
                            $craftnce_features_repeater_content = get_theme_mod('craftnce_home_testimonials_item_settings');
                            $craftnce_features_repeater_decoded_content = json_decode($craftnce_features_repeater_content);
                            if(!empty($craftnce_features_repeater_decoded_content)) :
                                foreach($craftnce_features_repeater_decoded_content as $repeater_item_content) :
                        ?>
                        <div class="testimonial-item text-center">
                            <div class="designation mb-30">
                                <h3><?php echo $repeater_item_content->title; ?></h3>
                            </div>
                            <p>
                                <?php echo $repeater_item_content->text; ?>
                            </p>
                            <div class="rating w-max mx-auto d-flex">
                                <?php
                                    if($repeater_item_content->subtitle == 5) {
                                        echo '<i class="ri-star-fill text-warning"></i>';
                                        echo '<i class="ri-star-fill text-warning"></i>';
                                        echo '<i class="ri-star-fill text-warning"></i>';
                                        echo '<i class="ri-star-fill text-warning"></i>';
                                        echo '<i class="ri-star-fill text-warning"></i>';
                                    } elseif ($repeater_item_content->subtitle == 4) {
                                        echo '<i class="ri-star-fill text-warning"></i>';
                                        echo '<i class="ri-star-fill text-warning"></i>';
                                        echo '<i class="ri-star-fill text-warning"></i>';
                                        echo '<i class="ri-star-fill text-warning"></i>';
                                        echo '<i class="ri-star-fill text-muted"></i>';
                                    } elseif ($repeater_item_content->subtitle == 3) {
                                        echo '<i class="ri-star-fill text-warning"></i>';
                                        echo '<i class="ri-star-fill text-warning"></i>';
                                        echo '<i class="ri-star-fill text-warning"></i>';
                                        echo '<i class="ri-star-fill text-muted"></i>';
                                        echo '<i class="ri-star-fill text-muted"></i>';
                                    } elseif ($repeater_item_content->subtitle == 2) {
                                        echo '<i class="ri-star-fill text-warning"></i>';
                                        echo '<i class="ri-star-fill text-warning"></i>';
                                        echo '<i class="ri-star-fill text-muted"></i>';
                                        echo '<i class="ri-star-fill text-muted"></i>';
                                        echo '<i class="ri-star-fill text-muted"></i>';
                                    } elseif ($repeater_item_content->subtitle == 1) {
                                        echo '<i class="ri-star-fill text-warning"></i>';
                                        echo '<i class="ri-star-fill text-muted"></i>';
                                        echo '<i class="ri-star-fill text-muted"></i>';
                                        echo '<i class="ri-star-fill text-muted"></i>';
                                        echo '<i class="ri-star-fill text-muted"></i>';
                                    }
                                ?>
                            </div>
                        </div>
                        <?php
                                endforeach;
                            endif;
                        ?>
                    </div>
                </div>
                <div class="d-flex justify-content-between top-50 position-absolute">
                    <button type="button" class="prev btn btn-primary rounded-0 px-2 py-0 fs-3">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button type="button" class="next btn btn-primary rounded-0 px-2 py-0 fs-3">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>