<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
    
    <?php get_header(); ?>

    <body <?php body_class(); ?>>
        
        <main>

            <section class="newsIntro">
                <div class="wrapper">
                    <div class="textWrapper">
                        <h1 class="reveal"><?php _e( 'Search ', 'foundationpress' ); ?><span class="second"><?php _e( 'results for:', 'foundationpress' ); ?></span><br><span class="resultsWording" style="font-weight:400;">'<?php echo get_search_query(); ?>'</span></h1>
                    </div>
                </div>
            </section>

            <section class="topNews searchNews" id="down">
                <div class="wrapper">

                <?php if ( have_posts() ) : ?>
                    <div class="newspageWrapper">
                    <?php while ( have_posts() ) : the_post(); ?>

                                <a href="<?php the_permalink() ?>" class="newsItem reveal">
                            
                                    <div class="imageWrapper">
                                        <h2><?php the_title(); ?></h2>
                                    </div>
                                    <div class="textWrapper">
                                        
                                        <div class="excerpt"><?php the_excerpt(); ?></div>
                                        
                                        <div class="readWrapper">
                                            <span class="button">Read More</span>  
                                        </div>
                                    </div>
                                        
                                </a>

                                <?php endwhile; ?>
                        </div>

                        <?php else : ?>
                            
                            <?php get_template_part( 'template-parts/content', 'none' ); ?>

                        <?php endif; ?>

                    </div>
                </div>
            </section>
            
        </main>
        <?php get_footer(); ?>
    </body>
</html>