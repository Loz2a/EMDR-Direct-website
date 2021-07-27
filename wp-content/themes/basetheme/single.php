<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
    
    <?php get_header(); ?>

    <body <?php body_class(); ?>>
        
        <main>
            <?php 
            $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
            $permalink = get_the_permalink();
            ?>

            <section class="postIntro" style="background-image: url('<?php echo $backgroundImg[0]; ?>')">
                <div class="bg"></div>
                <div class="wrapper">
                    
                    <div class="textWrapper">
                        <span class="featuredTitle reveal">Featured article!</span>
                        <h1 class="reveal"><?php the_title(); ?></h1>
                    </div>
                  
                    <div class="shareWrapper">
                        <span class="reveal">Share</span>
                        <div class="socials">
                            <span class="reveal">
                                <a target="_blank" class="mail" href="<?php echo 'mailto:info@example.com?&subject=&cc=&bcc=&body='. $permalink .'%0A'; ?>">
                                    <svg style="margin-right:15px;margin-left:15px;" width="25" height="55" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 477.867 477.867"><path d="M460.8 68.267H17.067l221.867 182.75L463.309 68.779c-.821-.24-1.66-.411-2.509-.512z"/><path d="M249.702 286.31a17.065 17.065 0 01-21.623 0L0 98.406v294.127c0 9.426 7.641 17.067 17.067 17.067H460.8c9.426 0 17.067-7.641 17.067-17.067V100.932L249.702 286.31z"/></svg>                                
                                </a>
                            </span>
                            <span class="reveal">
                                <a target="_blank" class="linkedin reveal" href="<?php echo 'https://www.linkedin.com/shareArticle?mini=true&url='. $permalink .'&title=&summary=&source='; ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" viewBox="0 0 55 55"><g transform="translate(-858 -984)"><g transform="translate(858 984)"><g fill="none" stroke="#ebf0f5" stroke-width="1.5"><circle cx="27.5" cy="27.5" r="27.5" stroke="none"/><circle cx="27.5" cy="27.5" r="26.75" fill="none"/></g></g><g transform="translate(876.766 1001.822)"><path d="M3.8,0V11.421H0V0Z" transform="translate(0.225 5.506)" fill="#f9fafc"/><path d="M4.276,1.973A1.983,1.983,0,0,1,2.125,3.947H2.1A1.979,1.979,0,1,1,2.15,0,1.975,1.975,0,0,1,4.276,1.973Z" transform="translate(0 0)" fill="#f9fafc"/><path d="M11.6,5.141v6.548H7.8V5.579C7.8,4.044,7.253,3,5.877,3a2.08,2.08,0,0,0-1.95,1.388,2.6,2.6,0,0,0-.125.926v6.378H0S.05,1.34,0,.268H3.8V1.886A3.774,3.774,0,0,1,7.228,0C9.729,0,11.6,1.633,11.6,5.141Z" transform="translate(6.13 5.238)" fill="#f9fafc"/></g></g></svg>
                                </a>
                            </span>
                            <span class="reveal">
                                <a target="_blank" class="facebook" href="<?php echo 'https://www.facebook.com/sharer/sharer.php?u='. $permalink .''; ?>">					
                                    <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" viewBox="0 0 56.53 56.53"><g fill="none" transform="translate(726.43 533.5)"><circle cx="-698.16" cy="-505.23" r="27.5"/><circle cx="-698.16" cy="-505.23" r="26.5" stroke="#ebf0f5" stroke-width="2"/></g><path d="M32.83 19.15h-2.37c-2.66 0-4.38 1.76-4.38 4.49v2.07H23.7a.37.37 0 00-.37.37v3c0 .21.17.37.37.37h2.38v7.57c0 .21.17.37.37.37h3.1c.21 0 .37-.17.37-.37v-7.57h2.78c.21 0 .37-.17.37-.37v-3c0-.1-.04-.19-.11-.26a.363.363 0 00-.26-.11h-2.78v-1.75c0-.84.2-1.27 1.3-1.27h1.59c.21 0 .37-.17.37-.37v-2.78a.353.353 0 00-.35-.39z" fill="#ebf0f5"/></svg>
                                </a>
                            </span>
                            <span class="reveal">
                                <a target="_blank" class="twitter" href="<?php echo 'https://twitter.com/intent/tweet?url=https%3A%2F%2F'. $permalink .'&text='; ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" viewBox="0 0 55 55"><g fill="none" stroke="#ebf0f5" stroke-width="2"><circle cx="27.5" cy="27.5" r="27.5" stroke="none"/><circle cx="27.5" cy="27.5" r="26.5" fill="none"/></g><path d="M20.765,2.1a8.138,8.138,0,0,1-2.442.726A4.487,4.487,0,0,0,20.19.326a8.294,8.294,0,0,1-2.7,1.1A4.087,4.087,0,0,0,14.353,0a4.387,4.387,0,0,0-4.238,4.512,4.958,4.958,0,0,0,.109,1.031A11.893,11.893,0,0,1,1.449.831,4.67,4.67,0,0,0,.873,3.092a4.513,4.513,0,0,0,1.9,3.745A4.026,4.026,0,0,1,.834,6.311v.032a4.459,4.459,0,0,0,3.415,4.428,3.947,3.947,0,0,1-1.916.074A4.288,4.288,0,0,0,6.3,13.979a8.163,8.163,0,0,1-5.291,1.935A8.177,8.177,0,0,1,0,15.851a11.568,11.568,0,0,0,6.531,2.03c7.822,0,12.12-6.879,12.12-12.843,0-.2,0-.389-.01-.589A8.811,8.811,0,0,0,20.765,2.1Z" transform="translate(17.103 18.693)" fill="#ebf0f5"/></svg>
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
            </section>

            <section class="latestNewsSingle">
                <div class="topDetails reveal">
                    <div class="wrapper">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>about" class="author">
                            By <?php echo get_the_author_meta( 'first_name' ); ?> <?php echo get_the_author_meta( 'last_name' ); ?>
                            <!-- Get author image - custom field -->
                            <?php
                            $author_id = get_the_author_meta('ID');
                            $author_badge = get_field('profile_image', 'user_'. $author_id );
                            ?>
                            <img height="42" width="42" src="<?php echo $author_badge['url']; ?>" alt="<?php echo $author_badge['alt']; ?>" />
                        </a>
                        <div class="titleWrapper">
                            <h1 class=""><?php the_title(); ?></h1>
                        </div>
                        <?php if( get_field('read_time') ): ?>
                            <div class="readTime">
                                <span><?php the_field('read_time'); ?> mins read</span>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="bottomDetails">
                    <div class="wrapper">
                        <?php if ( have_posts() ) : ?>
                            <?php while ( have_posts() ) : the_post(); ?>
                                <div class="mainContent reveal">
                                    <?php the_content(); ?>
                                </div>
                            <?php endwhile; wp_reset_query(); ?>
                        <?php endif; ?>
                    </div>
                    <div class="shareWrapper">
                        <span class="reveal">Share</span>
                        <div class="socials">
                            <span class="reveal">
                                <a target="_blank" class="mail" href="<?php echo 'mailto:info@example.com?&subject=&cc=&bcc=&body='. $permalink .'%0A'; ?>">
                                    <svg style="margin-right:15px;margin-left:15px;" width="25" height="55" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 477.867 477.867"><path d="M460.8 68.267H17.067l221.867 182.75L463.309 68.779c-.821-.24-1.66-.411-2.509-.512z"/><path d="M249.702 286.31a17.065 17.065 0 01-21.623 0L0 98.406v294.127c0 9.426 7.641 17.067 17.067 17.067H460.8c9.426 0 17.067-7.641 17.067-17.067V100.932L249.702 286.31z"/></svg>                                
                                </a>
                            </span>
                            <span class="reveal">

                                <a target="_blank" class="linkedin" href="<?php echo 'https://www.linkedin.com/shareArticle?mini=true&url='. $permalink .'&title='; ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" viewBox="0 0 55 55"><g transform="translate(-858 -984)"><g transform="translate(858 984)"><g fill="none" stroke="#0F05E3" stroke-width="1.5"><circle cx="27.5" cy="27.5" r="27.5" stroke="none"/><circle cx="27.5" cy="27.5" r="26.75" fill="none"/></g></g><g transform="translate(876.766 1001.822)"><path d="M3.8,0V11.421H0V0Z" transform="translate(0.225 5.506)" fill="#0F05E3"/><path d="M4.276,1.973A1.983,1.983,0,0,1,2.125,3.947H2.1A1.979,1.979,0,1,1,2.15,0,1.975,1.975,0,0,1,4.276,1.973Z" transform="translate(0 0)" fill="#0F05E3"/><path d="M11.6,5.141v6.548H7.8V5.579C7.8,4.044,7.253,3,5.877,3a2.08,2.08,0,0,0-1.95,1.388,2.6,2.6,0,0,0-.125.926v6.378H0S.05,1.34,0,.268H3.8V1.886A3.774,3.774,0,0,1,7.228,0C9.729,0,11.6,1.633,11.6,5.141Z" transform="translate(6.13 5.238)" fill="#0F05E3"/></g></g></svg>
                                </a>
                            </span>
                            <span class="reveal">
                                <a target="_blank" class="facebook" href="<?php echo 'https://www.facebook.com/sharer/sharer.php?u='. $permalink .''; ?>">					
                                    <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" viewBox="0 0 56.53 56.53"><g fill="none" transform="translate(726.43 533.5)"><circle cx="-698.16" cy="-505.23" r="27.5"/><circle cx="-698.16" cy="-505.23" r="26.5" stroke="#0F05E3" stroke-width="2"/></g><path d="M32.83 19.15h-2.37c-2.66 0-4.38 1.76-4.38 4.49v2.07H23.7a.37.37 0 00-.37.37v3c0 .21.17.37.37.37h2.38v7.57c0 .21.17.37.37.37h3.1c.21 0 .37-.17.37-.37v-7.57h2.78c.21 0 .37-.17.37-.37v-3c0-.1-.04-.19-.11-.26a.363.363 0 00-.26-.11h-2.78v-1.75c0-.84.2-1.27 1.3-1.27h1.59c.21 0 .37-.17.37-.37v-2.78a.353.353 0 00-.35-.39z" fill="#0F05E3"/></svg>
                                </a>
                            </span>
                            <span class="reveal">
                                <a target="_blank" class="twitter" href="<?php echo 'https://twitter.com/intent/tweet?url=https%3A%2F%2F'. $permalink .'&text='; ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" viewBox="0 0 55 55"><g fill="none" stroke="#0F05E3" stroke-width="2"><circle cx="27.5" cy="27.5" r="27.5" stroke="none"/><circle cx="27.5" cy="27.5" r="26.5" fill="none"/></g><path d="M20.765,2.1a8.138,8.138,0,0,1-2.442.726A4.487,4.487,0,0,0,20.19.326a8.294,8.294,0,0,1-2.7,1.1A4.087,4.087,0,0,0,14.353,0a4.387,4.387,0,0,0-4.238,4.512,4.958,4.958,0,0,0,.109,1.031A11.893,11.893,0,0,1,1.449.831,4.67,4.67,0,0,0,.873,3.092a4.513,4.513,0,0,0,1.9,3.745A4.026,4.026,0,0,1,.834,6.311v.032a4.459,4.459,0,0,0,3.415,4.428,3.947,3.947,0,0,1-1.916.074A4.288,4.288,0,0,0,6.3,13.979a8.163,8.163,0,0,1-5.291,1.935A8.177,8.177,0,0,1,0,15.851a11.568,11.568,0,0,0,6.531,2.03c7.822,0,12.12-6.879,12.12-12.843,0-.2,0-.389-.01-.589A8.811,8.811,0,0,0,20.765,2.1Z" transform="translate(17.103 18.693)" fill="#0F05E3"/></svg>
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
            </section>

            <section class="relatedNews">
                <div class="wrapper">
                    <div class="titleWrapper">
                        <h3>Related Articles</h3>
                    </div>
                    <div class="newspageWrapper">
                            <?php 
                            // The Query
                            $next_args = array(
                                'post_type' => 'post',
                                'post_status' => 'publish',
                                'posts_per_page'=>2,
                                'order'=>'DESC',
                                'orderby'=>'ID',
                                'post__not_in' => array( $post->ID )
                                );
                            $next_the_query = new WP_Query( $next_args );

                            // The Loop
                            if ( $next_the_query->have_posts() ) {
                            while ( $next_the_query->have_posts() ) {
                            $next_the_query->the_post(); ?>


                                <a href="<?php the_permalink() ?>" class="newsItem reveal">
                            
                                    <div class="imageWrapper">
                                        <?php the_post_thumbnail('news-home'); ?>
                                    </div>
                                    <div class="textWrapper">
                                        <div class="topWrap">
                                            <h3><span class="underline"><?php the_title(); ?></span></h3>

                                            <!-- by default, the 'n' in date only get a single number
                                            for 0-9 months of the year, eg. January is 1, not 01.
                                            This statement below checks if the number is between 1 and 9,
                                            and adds a 0 in front if it is. Otherwise, it just gets the number
                                            for October onwards as this will be 10 or above. -->

                                            <?php $date = get_the_date('n'); 
                                                if($date <= 9) {
                                                    $fullMonth = '0'.$date;
                                                } else {
                                                    $fullMonth = $date;
                                                }
                                                $fullDate = get_the_date('M Y');
                                                ?>


                                            <span class="date"><?php echo $fullDate; ?></span>
                                        </div>                                        

                                        <div class="readWrapper">
                                            <span class="button blueOutline arrow">Read</span>  
                                            <div class="author">
                                                By <?php echo get_the_author_meta( 'first_name' ); ?> <?php echo get_the_author_meta( 'last_name' ); ?>
                                                <!-- Get author image - custom field -->
                                                <?php
                                                $author_id = get_the_author_meta('ID');
                                                $author_badge = get_field('profile_image', 'user_'. $author_id );
                                                ?>
                                                <img height="42" width="42" src="<?php echo $author_badge['url']; ?>" alt="<?php echo $author_badge['alt']; ?>" />
                                            </div>
                                        </div>
                                    </div>
                                        
                                </a>


                            <?php }

                            } else {
                            // no posts found
                            }
                            /* Restore original Post Data */
                            wp_reset_postdata();

                            ?>
                    </div>

                </div>
            </section>
            <section class="thinkers simpleActiveTwo">
                <div class="wrapper">
                    <div class="titleWrapper">
                        <h2>External Articles</h2>
                    </div>
                    <?php include 'thinkers-loop.php'; ?>
            </section>
        </main>
        <?php get_footer(); ?>
    </body>
</html>
