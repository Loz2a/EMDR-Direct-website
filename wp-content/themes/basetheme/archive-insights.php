<!--

Template name: Insights page

-->

<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
    
    <?php get_header(); ?>

    <body <?php body_class(); ?>>
        
        <main>

            <section class="introBG" style="background-image: url(<?php the_field('header_image', 18); ?>);">
                <div class="bg"></div>
                <div class="wrapper">
                    
                    
                    <div class="downWrapper">
                        <a class="smooth goingDown" href="#insights">
                            <svg class="downArrow" xmlns="http://www.w3.org/2000/svg" width="14.212" height="13.985" viewBox="0 0 14.212 13.985"><g transform="translate(-784.215 -694.253)"><path d="M0,0,6.753,6.753,0,13.505" transform="translate(798.074 700.778) rotate(90)" fill="none" stroke="#ffffff" stroke-width="1"/><path d="M0,0,6.753,6.753,0,13.505" transform="translate(798.074 694.607) rotate(90)" fill="none" stroke="#ffffff" stroke-width="1"/></g></svg>
                        </a>
                    </div>
                   
                </div>
            </section>  
            
            <section id="insights" class="insightArchive">
                <div class="wrapper">
                   
                    <div class="insightsGrid">
                        <?php
                            $loop = new WP_Query(
                                array(
                                    'post_type' => 'insights',
                                    'posts_per_page' => 8
                                )
                            );
                            while ( $loop->have_posts() ) : $loop->the_post();
                            // The content you want to loop goes in here:
                            ?>
                            <a href="<?php the_permalink(); ?>" class="insightWrapper">
                                <div class="innerInsightsWrapper">
                                    <div class="overlay"></div>
                                    <?php the_post_thumbnail( 'projectThumb' ); ?>
                                </div>
                                <div class="innerInsightsIntro">
                                    <div class="matchHeight">
                                        
                                        <p><span class="underline"><?php the_title(); ?><span></p>

                                        <div class="innerInsightsDate">
                                            <?php 
                                                $post_date = get_the_date( 'M j Y' ); 
                                                echo '<span>' . $post_date . '</span>';
                                            ?>
                                        </div>

                                        <div class="excerpt">
                                            <?php 
                                                // limit to 10 words
                                                $value = wp_trim_words(get_field('insight_content_left'), 25);
                                                echo '<p>' . $value . '</p>';
                                            ?>
                                        </div>

                                    </div>
                                    <p class="innerInsightLink">Learn More</p>
                                </div>
                                <!-- <span class="button whiteOutline arrow">Watch</span>   -->
                            </a>
                            <?php endwhile;
                        wp_reset_postdata();
                        ?>
                    </div>

                </div>
            </section>

        </main>

        <?php get_footer(); ?>
        
      
    </body>
</html>

