<section class="latestNews">
                <div class="wrapper">
                    <div class="titleWrapper">
                        <h2 class="reveal">Open Mind Articles</h2>
                    </div>

                    <div class="newsWrapper">

                        <?php $the_query = new WP_Query( 'posts_per_page=2' ); ?>
                            
                            <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                              
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

                                        <div class="excerpt"><?php the_field('short_intro_for_home_page'); ?></div>
                                        

                                        <div class="readWrapper">
                                            <span class="button greenOutline arrow">Read</span>  
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
                                <?php 
                            // Repeat the process and reset once it hits the limit
                            endwhile;
                            wp_reset_postdata();
                        ?>  
                    </div>
                    <div class="buttonWrapper">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>open-minds" class="button greenOutline arrow reveal">Go to Open Minds</a>
                    </div>                    
                </div>
            </section>