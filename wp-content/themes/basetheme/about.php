<!--

Template name: About page

-->

<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
    
    <?php get_header(); ?>

    <body <?php body_class(); ?>>
        
        <main>

            <section class="introBG" style="background-image: url(<?php the_field('header_image'); ?>);">
                <div class="bg"></div>
                <div class="wrapper">
                    
                    <div class="introWrapper">
                        <?php the_field('about_intro'); ?>
                    </div>
                    
                    <div class="downWrapper">
                        <a class="smooth goingDown" href="#about">
                            <svg class="downArrow" xmlns="http://www.w3.org/2000/svg" width="14.212" height="13.985" viewBox="0 0 14.212 13.985"><g transform="translate(-784.215 -694.253)"><path d="M0,0,6.753,6.753,0,13.505" transform="translate(798.074 700.778) rotate(90)" fill="none" stroke="#ffffff" stroke-width="1"/><path d="M0,0,6.753,6.753,0,13.505" transform="translate(798.074 694.607) rotate(90)" fill="none" stroke="#ffffff" stroke-width="1"/></g></svg>
                        </a>
                    </div>
                   
                </div>
            </section>  
            
            <section id="about" class="section about about-part-1">
                <div class="introWrapper">
                    <?php the_field('about_intro'); ?>
                </div>
                <div class="wrapper">
                    <h1 class="reveal">We are Poole Dick</h1>
                    <div class="innerWrapper aboutContent">
                        <div class="aboutContent1">
                            <?php the_field('about_part_1'); ?>
                        </div>
                        <div class="aboutContent2">
                            <?php the_field('about_part_2'); ?>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section about about-part-2">
                <div class="wrapper">
                    <div class="innerWrapper">
                        <div class="innerImage">
                        <?php 
                              $attachment_id = get_field('about_mid_banner');
                              $size = "CareersBanner"; // (thumbnail, medium, large, full or custom size)
                              $image = wp_get_attachment_image_src( $attachment_id, $size );
                              // url = $image[0];
                              // width = $image[1];
                              // height = $image[2];
                          ?>
                          <img alt="About banner" src="<?php echo $image[0]; ?>" />
                        </div>
                    </div>
                </div>
            </section>

            <section class="section about about-part-3">
                <div class="wrapper">
                    <div class="titleWrapper">
                        <h2>The Poole Dick Way</h2>
                    </div>
                    <div class="innerWrapper">
                        <div class="aboutVision">
                            <?php the_field('pd_way'); ?>
                        </div>
                        <div class="aboutMission">
                            <?php the_field('five_points'); ?>
                        </div>
                    </div>
                </div>
            </section>

            <section class="coreValues">
                <div class="wrapper">
                    <h2>Our Five Core Values</h2>
                    <?php if( have_rows('core_values') ): ?>
                        <div class="valuesWrapper">
                            <?php while( have_rows('core_values') ): the_row(); ?>
                                <div class="value">
                                    <div class="valueTitle">
                                        <h3><?php the_sub_field('value_title'); ?></h3>
                                        <?php the_sub_field('value_description'); ?>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </section>

        </main>

        <?php get_footer(); ?>
        
      
    </body>
</html>

