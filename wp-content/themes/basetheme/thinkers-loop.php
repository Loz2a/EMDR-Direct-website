<div class="videos">
    <?php
        $loop = new WP_Query(
            array(
                'post_type' => 'thinkers',
                'posts_per_page' => 2
            )
        );
        while ( $loop->have_posts() ) : $loop->the_post();
        // The content you want to loop goes in here:
        ?>
        <div class="thinkWrapper">
            <div class="videoWrapper">
                <div class="overlay"></div>
                <?php the_field('video_embed'); ?>
            </div>
            <div class="videoIntro">
                <p><span class="underline"><?php the_field('video_intro'); ?><span></p>
            </div>
            <!-- <span class="button whiteOutline arrow">Watch</span>   -->
        </div>
        <?php endwhile;
    wp_reset_postdata();
    ?>
</div>

<div class="moreVids">
    <div class="inner">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>thinkers" class="button plus">View More</a>
    </div>
</div>