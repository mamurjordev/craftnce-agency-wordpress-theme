<?php
    if(get_craftnce_data('is_show_team_section')) :
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
                $team_member_items = get_craftnce_data('team_member_items');
                $team_member_count = count((array)$team_member_items);
                
                for($i = 0; $i < $team_member_count; $i++) :
            ?>
            <div class="col-md-6 col-lg-4 col-xxl-3 mt-4">
                <div class="team-member-card card border-0 overflow-hidden d-flex flex-column justify-content-between">
                    <div class="team-avatar text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/images.png" class="img-fluid team-avatar-img rounded-circle mx-auto" alt="">
                    </div>
                    
                    <div class="text-center">
                        <h3>
                            <?php
                                echo $team_member_items[$i]['team_member_name'];
                            ?>
                        </h3>
                        <span class="text-sm fw-light">
                            <?php
                                echo $team_member_items[$i]['team_member_designation'];
                            ?>
                        </span>
                    </div>

                    <div class="team-social-container bg-primary py-2">
                        <div class="team-social w-max mx-auto">
                            <?php
                                $team_member_items_social = get_craftnce_data('team_member_social_media');
                                $team_member_items_social_count = count((array)$team_member_items_social);
                                
                                for($j = 0; $j < $team_member_items_social_count; $j++) :
                            ?>
                            <a href="<?php echo esc_url($team_member_items_social[$j]['social_media_link']['url']); ?>">
                                <i class="<?php echo esc_url($team_member_items_social[$j]['social_media_icon']); ?>"></i>
                            </a>
                            <?php endfor; ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                endfor;
            ?>
        </div>
    </div>
</section>

<?php endif; ?>