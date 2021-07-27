<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
    
    <?php get_header(); ?>

    <body <?php body_class(); ?>>
        
        <main>

        <section class="introTextWrapper">
                <div class="wrapper">
                    
                    <div class="textWrapper">
                        <h1 class="reveal"><?php the_title(); ?></h1>

                        <?php if ( have_posts() ) : ?>
                            <?php while ( have_posts() ) : the_post(); ?>
                                <div class="mainContent reveal">
                                    <?php the_content(); ?>
                                </div>
                            <?php endwhile; wp_reset_query(); ?>
                        <?php endif; ?>
                    
                    </div>
                    <svg class="topRightCircles justOpacity" xmlns="http://www.w3.org/2000/svg" width="80" height="90" viewBox="0 0 80 90"><g transform="translate(-27 -1208)"><g transform="translate(87 1248) rotate(180)" fill="none" stroke="#02dd8d" stroke-width="1"><circle cx="20" cy="20" r="20" stroke="none"/><circle cx="20" cy="20" r="19.5" fill="none"/></g><g transform="translate(87 1273) rotate(180)" fill="none" stroke="#02dd8d" stroke-width="1"><circle cx="20" cy="20" r="20" stroke="none"/><circle cx="20" cy="20" r="19.5" fill="none"/></g><g transform="translate(87 1298) rotate(180)" fill="none" stroke="#02dd8d" stroke-width="1"><circle cx="20" cy="20" r="20" stroke="none"/><circle cx="20" cy="20" r="19.5" fill="none"/></g><g transform="translate(107 1273) rotate(180)" fill="none" stroke="#02dd8d" stroke-width="1"><circle cx="20" cy="20" r="20" stroke="none"/><circle cx="20" cy="20" r="19.5" fill="none"/></g><g transform="translate(67 1273) rotate(180)" fill="none" stroke="#02dd8d" stroke-width="1"><circle cx="20" cy="20" r="20" stroke="none"/><circle cx="20" cy="20" r="19.5" fill="none"/></g></g></svg>
                    <svg class="visionCircles leftCircles justOpacity" xmlns="http://www.w3.org/2000/svg" width="1426" height="372" viewBox="0 0 1426 372"><g transform="translate(553.416 -167)"><g transform="translate(-181.416 167)" fill="none" stroke="#02dd8d" stroke-width="4"><ellipse cx="185.5" cy="186" rx="185.5" ry="186" stroke="none"></ellipse><ellipse cx="185.5" cy="186" rx="184.5" ry="185" fill="none"></ellipse></g><g transform="translate(-553.416 167)" fill="none" stroke="#02dd8d" stroke-width="4"><circle cx="186" cy="186" r="186" stroke="none"></circle><circle cx="186" cy="186" r="185" fill="none"></circle></g><g transform="translate(3.584 167)" fill="none" stroke="#02dd8d" stroke-width="4"><circle cx="186" cy="186" r="186" stroke="none"></circle><circle cx="186" cy="186" r="185" fill="none"></circle></g><g transform="translate(500.584 167)" fill="none" stroke="#02dd8d" stroke-width="4"><circle cx="186" cy="186" r="186" stroke="none"></circle><circle cx="186" cy="186" r="185" fill="none"></circle></g></g></svg>

                </div>
            </section>

            <?php include 'news.php' ?>
        </main>

        <?php get_footer(); ?>
        
    </body>
</html>
