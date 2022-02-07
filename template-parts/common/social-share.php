<div class="row my-5">
    <div class="d-flex flex-wrap">
        <h4 class="mt-2 mt-md-0 font-inter">
            <?php
                _e('Social Share -', 'craftnce');
            ?>
        </h4>

        <a href="https://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>" class="btn btn-outline-primary fb mx-1 mt-2 mt-md-0">
            <i class="fab fa-facebook-f me-3" aria-hidden="true"></i>
            <?php _e('Facebook', 'craftnce'); ?>
        </a>
        <a href="https://twitter.com/share?text=<?php the_title(); ?>" class="btn btn-outline-info mx-1 mt-2 mt-md-0">
            <i class="fab fa-twitter me-3" aria-hidden="true"></i>
            <?php _e('Twitter', 'craftnce'); ?>
        </a>
        <a href="https://linkedin.com/shareArticle?mini=true&url=<?php ?>&title=<?php the_title(); ?>" class="btn btn-outline-primary fb mx-1 mt-2 mt-md-0">
            <i class="fab fa-linkedin-in me-3" aria-hidden="true"></i>
            <?php _e('Linked In', 'craftnce'); ?>
        </a>
    </div>
</div>