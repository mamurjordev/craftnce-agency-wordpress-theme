<?php
    $craftnce_team_member_settings_repeater = get_theme_mod('craftnce_team_section_item_settings');
    $craftnce_team_member_settings_repeater_decoded = json_decode($craftnce_team_member_settings_repeater);
    if(!empty($craftnce_team_member_settings_repeater_decoded)) :
?>
<!-- Team Section -->
<section class="team-section py-5">
    <div class="container py-5">
        <div class="row text-center">
            <div class="col-sm-7 col-xl-4 mx-auto">
                <h2 class="fw-900">
                    <?php
                        echo get_craftnce_data('team_section_title');
                    ?>
                </h2>
            </div>
        </div>
        <div class="row mt-4">
            <?php
                foreach($craftnce_team_member_settings_repeater_decoded as $craftnce_team_member) :
            ?>
            <div class="col-md-6 col-lg-4 col-xxl-3 mt-4">
                <div class="team-member-card card border-0 overflow-hidden d-flex flex-column justify-content-between">
                    <div class="team-avatar text-center">
                        <img src="<?php echo esc_url($craftnce_team_member->image_url); ?>" class="img-fluid team-avatar-img rounded-circle mx-auto" alt="">
                    </div>

                    <div class="text-center">
                        <h3>
                            <?php
                                echo $craftnce_team_member->title;
                            ?>
                        </h3>
                        <span class="text-sm fw-light">
                            <?php
                                echo $craftnce_team_member->text;
                            ?>
                        </span>
                    </div>

                    <div class="team-social-container bg-primary py-2">
                        <div class="team-social w-max mx-auto">
                            <a href="">
                                <i class=""></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                endforeach;
            ?>
        </div>
    </div>
</section>

<?php endif; ?>
