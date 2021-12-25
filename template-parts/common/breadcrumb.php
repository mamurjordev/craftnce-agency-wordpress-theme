<div class="breadcrumb bg-secondary py-4">
    <div class="container">
        <div class="d-flex justify-content-between">
            <?php
                if(!is_single() && is_home()) {
            ?>
            <h3 class="mb-0 align-self-center fw-900"><?php echo get_the_title(get_option('page_for_posts', true)); ?></h3>
            <?php
                } elseif(is_page()) {
            ?>
            <h3 class="mb-0 align-self-center fw-900"><?php the_title(); ?></h3>
            <?php
                }
            ?>
            <?php echo get_the_breadcrumb(); ?>
        </div>
    </div>
</div>