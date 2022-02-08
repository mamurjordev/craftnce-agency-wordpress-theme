<!-- Team Section -->
<section class="team-sction py-5">
    <div class="container py-5">
        <div class="row">
            <div class="col-sm-5 mx-auto">
                <h2 class="fw-900 font-inter text-center">
                    <?php
                        echo esc_html( get_theme_mod('craftnce_team_section_heading_setting', 'Meet Our Experienced & Skilled Team') );
                    ?>
                </h2>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-6 col-lg-4 col-xxl-3 mt-4">
                <div class="team-member-card card border-0 overflow-hidden d-flex flex-column justify-content-between">
                    <div class="team-avatar text-center">
                        <img 
                            src="<?php
                                    echo esc_url(get_theme_mod('craftnce_team_member_1_avatar_settings') ?
                                    get_theme_mod('craftnce_team_member_1_avatar_settings') : get_template_directory_uri().'/assets/img/icons/images.png');
                                ?>" 
                            class="img-fluid team-avatar-img rounded-circle mx-auto" alt="">
                    </div>

                    <div class="text-center">
                        <h3 class="fw-bold">
                            <?php
                                echo esc_html(get_theme_mod('craftnce_team_member_1_name_settings', 'Hasan Ali'));
                            ?>
                        </h3>
                        <h6>
                            <?php
                                echo esc_html(get_theme_mod('craftnce_team_member_1_designation_settings', 'Web Developer'));
                            ?>
                        </h6>
                    </div>

                    <?php
                        $craftnce_team_member_social_media_repeater = get_theme_mod('craftnce_team_social_media_repeater_item_settings');
                        $craftnce_team_member_social_media_repeater_decoded = json_decode($craftnce_team_member_social_media_repeater);
                        if(!empty($craftnce_team_member_social_media_repeater_decoded)) :
                    ?>
                    <div class="team-social-container bg-primary py-2">
                        <div class="team-social w-max mx-auto">
                            <?php foreach($csm as $m) : ?>
                            <a href="<?php echo esc_url( $m->title ); ?>">
                                <i class="<?php echo esc_attr( $m->text ); ?>"></i>
                            </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <?php
                        else:
                    ?>
                        <div class="team-social-container bg-primary py-2">
                            <div class="team-social w-max mx-auto">
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </div>
                        </div>
                    <?php
                        endif;
                    ?>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xxl-3 mt-4">
                <div class="team-member-card card border-0 overflow-hidden d-flex flex-column justify-content-between">
                    <div class="team-avatar text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/images.png"
                            class="img-fluid team-avatar-img rounded-circle mx-auto" alt="">
                    </div>

                    <div class="text-center">
                        <h3>Hasan Ali</h3>
                        <h6>Founder & Chairman</h6>
                    </div>

                    <div class="team-social-container bg-primary py-2">
                        <div class="team-social w-max mx-auto">
                            <a href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a href="#!"><i class="fab fa-instagram"></i></a>
                            <a href="#!"><i class="fab fa-twitter"></i></a>
                            <a href="#!"><i class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xxl-3 mt-4">
                <div class="team-member-card card border-0 overflow-hidden d-flex flex-column justify-content-between">
                    <div class="team-avatar text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/images.png"
                            class="img-fluid team-avatar-img rounded-circle mx-auto" alt="">
                    </div>

                    <div class="text-center">
                        <h3>Hasan Ali</h3>
                        <h6>Founder & Chairman</h6>
                    </div>

                    <div class="team-social-container bg-primary py-2">
                        <div class="team-social w-max mx-auto">
                            <a href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a href="#!"><i class="fab fa-instagram"></i></a>
                            <a href="#!"><i class="fab fa-twitter"></i></a>
                            <a href="#!"><i class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xxl-3 mt-4">
                <div class="team-member-card card border-0 overflow-hidden d-flex flex-column justify-content-between">
                    <div class="team-avatar text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/images.png"
                            class="img-fluid team-avatar-img rounded-circle mx-auto" alt="">
                    </div>

                    <div class="text-center">
                        <h3>Hasan Ali</h3>
                        <h6>Founder & Chairman</h6>
                    </div>

                    <div class="team-social-container bg-primary py-2">
                        <div class="team-social w-max mx-auto">
                            <a href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a href="#!"><i class="fab fa-instagram"></i></a>
                            <a href="#!"><i class="fab fa-twitter"></i></a>
                            <a href="#!"><i class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>