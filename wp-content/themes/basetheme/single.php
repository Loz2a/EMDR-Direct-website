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
                        <!-- <span class="featuredTitle reveal">Featured article!</span> -->
                        <h1 class="reveal"><?php the_title(); ?></h1>
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
                </div>
            </section>

        </main>
        <?php get_footer(); ?>
    </body>
</html>
