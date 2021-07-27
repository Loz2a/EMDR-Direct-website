<!--

Template name: Projects page

-->

<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
    
    <?php get_header(); ?>

    <body <?php body_class(); ?>>
        
        <main>
            <section class="projectsIntro projects">
                <div class="wrapper">
                    <div class="projectsIntroContainer">
                        <div class="projectsIntroImage">
                            <?php 
                                $image = get_field('projects_banner_image', 12);
                                if( !empty( $image ) ): ?>
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                    <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 630 434"><path d="M256.32,434h0C124.84,434,6,359,.24,258.81-5.82,153.71,104.11,67.06,240.62,67.06H396.2C480.77,66,562.19,42.44,626.38.45A2.54,2.54,0,0,1,627.93,0c1.18,0,2.11.78,2.07,1.68h0V256h-.12V432.22h0c0,1-1,1.75-2.21,1.78H630V0H0V434Z" transform="translate(0 0)" style="fill:#f7f2eb"/></svg>
                                <?php endif; ?>
                        </div>
                        <div class="projectsIntroCopy">
                            <h1>Projects</h1>
                            <div><?php the_field('projects_intro_copy', 12); ?></div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="projectsArchive">
                <div class="wrapper">
                    <div class="tag-filters">
                        <h5>Filter by Sector:</h5>
                            <?php 
                                if( $terms = get_terms( array(
                                    'post_type' => 'projects',
                                    'taxonomy' => 'post_tag', // to make it simple I use default categories
                                    'orderby' => 'name'
                                ) ) ) : 
                                    echo '<span class="space"><span class="project-tag" data-filter="*">All</span></span>';
                                    foreach ( $terms as $term ) :
                                        echo '<span class="space"><span class="project-tag" data-filter=".' . $term->slug . '">' . $term->name . '</span></span>';
                                    endforeach;
                                endif;
                            ?>
                    </div>
                   
                    <div class="projectsGrid grid">
                        <?php
                            $loop = new WP_Query(
                                array(
                                    'post_type' => 'projects',
                                    'orderby'=>'title',
                                    'order'=>'ASC',
                                    'posts_per_page' => -1,
                                )
                            );
                            while ( $loop->have_posts() ) : $loop->the_post();
                            // The content you want to loop goes in here:
                            ?>
                            <a href="<?php the_permalink(); ?>" class="grid-item projectWrapper <?php 
                                    $post_tags = get_the_tags();
 
                                    if ( $post_tags ) {
                                        foreach( $post_tags as $tag ) {
                                        echo '' . $tag->slug . ' '; 
                                        }
                                    }
                                    ?>" data-category="<?php 
                                    $post_tags = get_the_tags();
 
                                    if ( $post_tags ) {
                                        foreach( $post_tags as $tag ) {
                                        echo '' . $tag->slug . ' '; 
                                        }
                                    }
                                    ?>">
                                <div class="innerProjectWrapper">
                                    <div class="overlay"></div>
                                    <?php the_post_thumbnail( 'projectThumb' ); ?>
                                </div>
                                <div class="innerProjectIntro">
                                    <p class="matchHeight"><span class="underline"><?php the_title(); ?><span></p>
                                    <div class="innerProjectTags">
                                    <?php 
                                    $post_tags = get_the_tags();
 
                                    if ( $post_tags ) {
                                        foreach( $post_tags as $tag ) {
                                        echo '<span>' . $tag->name . '</span>'; 
                                        }
                                    }
                                    ?>
                                    </div>
                                    <p class="innerProjectLink">Learn More</p>
                                </div>
                                <!-- <span class="button whiteOutline arrow">Watch</span>   -->
                            </a>
                            <?php endwhile;
                        wp_reset_postdata();
                        ?>
                    </div>

                    <script>
                        jQuery(function($){

                            var $grid = $('.grid').isotope({
                                itemSelector: '.grid-item',
                                layoutMode: 'fitRows',
                            });
                            // bind filter button click
                            $('.tag-filters').on( 'click', '.project-tag', function() {
                                var filterValue = $( this ).attr('data-filter');

                                $grid.isotope({ filter: filterValue });
                            });
                        });
                    </script>

                </div>
            </section>

        </main>
        <?php get_footer(); ?>
    </body>
</html>
