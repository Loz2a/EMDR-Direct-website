<!--

Template name: Front page

-->
<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
    
    <?php get_header(); ?>

    <body <?php body_class(); ?>>
        
        <main>       

            <section id="section1" class="section home-section home-statement">
                <div class="wrapper">
                    <div class="innerWrapper">
                        <h1 class="reveal"><?php the_title(); ?></h1>
                        <div class="innerText">
                            <div class="textContainer innerWrap reveal"><div><h2><?php the_field('statement'); ?></h2></div></div>
                        </div>
                    </div>
                    <div class="divider reveal"></div>
                </div>
            </section>

            <section id="section2" class="section home-section section2">
                <div class="wrapper">
                    <div class="innerWrapper">
                        <h2 class="reveal">How EMDR Works</h2>
                        <div class="innerText">
                            <div class="textContainer innerWrap reveal"><div><p><?php the_field('statement'); ?></p></div></div>
                        </div>
                        <div class="sub-section">
                            <a href="#">Learn More</a>
                        </div>
                    </div>
                </div>
            </section>

            <section id="section3" class="section home-section">
                <div class="wrapper">
                    <div class="innerWrapper">
                        <h2 class="reveal">How EMDR Works</h2>
                        <div class="innerText">
                            <div class="textContainer innerWrap reveal"><div><p><?php the_field('statement'); ?></p></div></div>
                        </div>
                        <div class="sub-section">
                            <a href="#">Learn More</a>
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
