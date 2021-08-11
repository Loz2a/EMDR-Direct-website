<!--

Template name: Front page

-->
<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
    
    <?php get_header(); ?>

    <body <?php body_class(); ?>>
        
        <main>       

            <section id="home-intro" class="section home-section home-intro">
                <div class="wrapper">
                    <div class="innerWrapper">
                    <h1 class="reveal"><?php the_title(); ?></h1>
                        <div class="innerText">
                            <?php the_field('intro_text'); ?>
                        </div>
                    </div>
                </div>
            </section>

            <section id="home-statement" class="section home-section home-statement">
                <div class="wrapper">
                    <div class="innerWrapper">
                        <div class="innerText">
                            <svg class="statement-bg" xmlns="http://www.w3.org/2000/svg" width="1275.689" height="491.683" viewBox="0 0 1275.689 491.683"><path d="M516.083,578.279l1052.852-1.535a2,2,0,0,0,2.009-2.009V375.677h.093V88.5a1.848,1.848,0,0,0-3.113-1.41A312.3,312.3,0,0,1,1369.7,162.321l-867.132,1.535c-117.549,0-212.231,97.862-207.012,216.567,4.977,113.133,107.3,197.856,220.529,197.856" transform="translate(1571.037 578.279) rotate(180)" fill="#244f40"/></svg>
                            <div class="textContainer innerWrap reveal"><div><h2><?php the_field('statement'); ?></h2></div></div>
                        </div>
                    </div>
                </div>
            </section>

            <?php
                if( have_rows('feature_pages') ):
                while( have_rows('feature_pages') ) : the_row(); ?>

                <section class="section home-section feature-pages <?php the_sub_field('home_section_alignment'); ?> <?php the_sub_field('home_section_background'); ?>">
                    <div class="wrapper">

                        <div class="home-sections">
                            <h5><?php the_sub_field('home_section_title'); ?></h5>
                            <div class="innerWrapper">
                                <div class="innerText innerWrap reveal r2">
                                    <h2 class=""><?php the_sub_field('home_section_title_inner'); ?></h2>
                                    <p><?php the_sub_field('home_section_copy'); ?></p>
                                    <a href="<?php the_sub_field('home_section_link'); ?>"><?php the_sub_field('home_section_link_text'); ?></a>
                                </div>
                                <div class="home_section_image innerWrap reveal">
                                    <?php 
                                        $image = get_sub_field('home_section_image');
                                        if( !empty( $image ) ): ?>
                                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                    <?php endif; ?>

                                    <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 812 412.71"><defs><style>.cls-1{fill:#f7f2eb;}</style></defs><path class="cls-1" d="M623.85,412.71H812V206.35C812,320.32,727.77,412.71,623.85,412.71Z"/><path class="cls-1" d="M623.85,0C727.76,0,812,92.39,812,206.35V0Z"/></svg>
                                </div>
                                
                            </div>
                        </div>

                    </div>
                </section>

            <?php
                endwhile;
                endif; ?>

            <section class="section home-section feature-our-people">
                    <div class="wrapper">

                        <div class="home-sections">
                            <h5><?php the_field('feature_section_title'); ?></h5>
                            <div class="home_section_image">
                                <?php 
                                    $image = get_field('feature_section_image');
                                    if( !empty( $image ) ): ?>
                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                <?php endif; ?>
                                <div class="innerText innerWrap reveal">
                                    <div><?php the_field('feature_section_content'); ?></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>

            <section class="section home-section feature-testimonials">

                    <h2>Testimonials</h2>
                    <div class="home-testimonials innerWrap">
                        <div class="testimonial-carousel">
                            <?php
                                if( have_rows('testimonials') ):
                                while( have_rows('testimonials') ) : the_row(); ?>

                                    <div class="innerTestimonial">
                                        <div class="innerCopy">
                                            <h3><?php the_sub_field('testimony'); ?></h2>
                                            <p><?php the_sub_field('client_company'); ?></p>
                                        </div>
                                    </div>

                            <?php
                                endwhile;
                                endif; ?>
                        </div>
                    </div>

            </section>

        </main>

        <?php get_footer(); ?>
        
      
    </body>
</html>
