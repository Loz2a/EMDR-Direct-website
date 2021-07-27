<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
    
    <?php get_header(); 
        $permalink = get_the_permalink();
    ?>

    <body <?php body_class(); ?>>
        
        <main>
           
            <section class="postIntro">
                <div class="bg"></div>

                <div class="videoWrapper">
                    <div class="overlay"></div>
                    <?php if( have_rows('insight_banner') ): ?>

                        <div class="insightBannerWrapper">
                            <?php while( have_rows('insight_banner') ): the_row(); ?>
                            <div class="bannerWrapper slide">

                                <?php 
                                    $attachment_id = get_sub_field('insight_banner_images');
                                    $size = "projectBannerSlide"; // (thumbnail, medium, large, full or custom size)
                                    $image = wp_get_attachment_image_src( $attachment_id, $size );
                                    // url = $image[0];
                                    // width = $image[1];
                                    // height = $image[2];
                                ?>
                                <img class="image-class" alt="" src="<?php echo $image[0]; ?>" />


                            </div>
                            <?php endwhile; ?>
                        </div>
                        <?php endif; ?>
                </div>
                
            </section>
            <section class="insight">
                <div class="wrapper">
                    <div class="insightTitle">
                        <h1 class="reveal"><?php the_title(); ?></h1>
                    </div>
                    <div class="insightContent">
                        <div class="first">
                            <?php the_field('insight_content_left'); ?>
                        </div>
                        <div class="second">
                            <?php the_field('insight_content_right'); ?>
                        </div>                    
                    </div>
                    <a class="backLink reverse" href="/insights/">Back to Insights</a>
                </div>
            </section>

            <?php if( get_field('insight_feature_section') ): ?>

                <section class="insightFeatureSection">
                    <div class="wrapper">
                        <div class="insightContent">
                            <div class="full">
                                <?php the_field('insight_feature_section'); ?>
                            </div>                  
                        </div>
                    </div>
                </section>

            <?php endif; ?>

            <section class="shareSocial">
                <div class="wrapper">
                    <h4 class="reveal">Share This Insight</h4>
                    <div class="socials">
                        <span class="reveal">
                            <a target="_blank" class="linkedin" href="<?php echo 'https://www.linkedin.com/shareArticle?mini=true&url='. $permalink .'&title='; ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="33.029" height="34.865" viewBox="0 0 33.029 34.865"><rect width="7.34" height="25.69" transform="translate(0 9.175)" fill="#080808"/><path d="M199.2,1949.447c-5.122,0-6,1.868-6.421,3.67v-3.67h-7.34v25.69h7.34v-14.68a3.67,3.67,0,0,1,7.34,0v14.68h7.34v-12.845C207.458,1954.952,206.5,1949.447,199.2,1949.447Z" transform="translate(-174.429 -1940.272)" fill="#080808"/><circle cx="3.67" cy="3.67" r="3.67" fill="#080808"/></svg>
                            </a>
                        </span>
                        <span class="reveal">
                            <a target="_blank" class="twitter" href="<?php echo 'https://twitter.com/intent/tweet?url=https%3A%2F%2F'. $permalink .'&text='; ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40.014" height="32.52" viewBox="0 0 40.014 32.52"><path d="M288.042,1941.346a16.3,16.3,0,0,1-4.715,1.292,8.245,8.245,0,0,0,3.611-4.54,16.449,16.449,0,0,1-5.213,1.991,8.219,8.219,0,0,0-13.991,7.488A23.309,23.309,0,0,1,250.812,1939a8.222,8.222,0,0,0,2.54,10.962,8.179,8.179,0,0,1-3.717-1.027c0,.034,0,.07,0,.1a8.214,8.214,0,0,0,6.585,8.051,8.235,8.235,0,0,1-3.706.141,8.217,8.217,0,0,0,7.667,5.7,16.559,16.559,0,0,1-12.152,3.4,23.251,23.251,0,0,0,12.584,3.686c15.1,0,23.358-12.509,23.358-23.358,0-.355-.01-.71-.025-1.062A16.645,16.645,0,0,0,288.042,1941.346Z" transform="translate(-248.028 -1937.497)" fill="#080808"/></svg>
                            </a>
                        </span>
                        <span class="reveal">
                            <a target="_blank" class="facebook" href="<?php echo 'https://www.facebook.com/sharer/sharer.php?u='. $permalink .''; ?>">					
                            <svg xmlns="http://www.w3.org/2000/svg" width="16.543" height="33.083" viewBox="0 0 16.543 33.083"><path d="M145.512,5.493h3.02V.233a39.007,39.007,0,0,0-4.4-.233c-4.355,0-7.338,2.739-7.338,7.773v4.633h-4.805v5.881h4.805v14.8h5.892v-14.8H147.3l.732-5.88h-5.344V8.356c0-1.7.459-2.863,2.827-2.863Z" transform="translate(-131.989)" fill="#080808"/></svg>
                            </a>
                        </span>
                    </div>
                    <div class="readMore">
                        <h3>Read more insights</h3>
                    </div>
                </div>
            </section>

            <section id="relatedInsights" class="relatedInsights">
                <div class="wrapper">
                   
                    <div class="insightsGrid">
                        <?php
                            $loop = new WP_Query(
                                array(
                                    'post_type' => 'insights',
                                    'posts_per_page' => 3,
                                    'orderby' => 'rand',
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

        <?php get_footer(); ?>
    </body>
</html>
