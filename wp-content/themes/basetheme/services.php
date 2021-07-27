<!--

Template name: Services page

-->

<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
    
    <?php get_header(); ?>

    <body <?php body_class(); ?>>
        
        <main>

            <section class="introBG" style="background-image: url(<?php the_field('header_image'); ?>);">
                <div class="bg"></div>
                <div class="wrapper">
                    
                    <div class="textWrapper">
                        <h1 class="reveal"><?php the_title(); ?></h1>
                    </div>
                    
                    <div class="downWrapper">
                        <a class="smooth goingDown" href="#services">
                            <svg class="downArrow" xmlns="http://www.w3.org/2000/svg" width="14.212" height="13.985" viewBox="0 0 14.212 13.985"><g transform="translate(-784.215 -694.253)"><path d="M0,0,6.753,6.753,0,13.505" transform="translate(798.074 700.778) rotate(90)" fill="none" stroke="#ffffff" stroke-width="1"/><path d="M0,0,6.753,6.753,0,13.505" transform="translate(798.074 694.607) rotate(90)" fill="none" stroke="#ffffff" stroke-width="1"/></g></svg>
                        </a>
                    </div>
                   
                </div>
            </section>

            <section class="services servicesVisible" id="services">
                <div class="wrapper">

                    <?php if( have_rows('services') ): ?>

                    <div class="servicesWrapper">
                        <?php while( have_rows('services') ): the_row(); ?>
                        <div class="serviceWrapper slide">

                            <div class="leftSide">
                                <div class="service_section_image innerWrap reveal">
                                    <?php 
                                        $image = get_sub_field('service_image');
                                        if( !empty( $image ) ): ?>
                                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                    <?php endif; ?>

                                    <?php if( get_sub_field('image_shape') == 'upper-curve' ) { ?>
                                        <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 501 501"><path d="M501,0H0V501C0,224.3,224.3,0,501,0Z" transform="translate(0 0)" style="fill:#f7f2eb"/></svg>
                                    <?php } elseif ( get_sub_field('image_shape') == 'lower-curve' ) {?>
                                        <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 501 501"><defs><style>.cls-1{fill:#f7f2eb;}</style></defs><path class="cls-1" d="M0,501H501V0C501,276.7,276.7,501,0,501Z"/></svg>
                                    <?php } elseif ( get_sub_field('image_shape') == 'left-curve' ) {?>
                                        <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 268 536"><path d="M268,0H0V268C0,120,120,0,268,0Z" style="fill:#f7f2eb"/><path d="M0,268V536H268C120,536,0,416,0,268Z" style="fill:#f7f2eb"/></svg>
                                    <?php } elseif ( get_sub_field('image_shape') == 'square' ) {?>
                                        
                                    <?php } elseif ( get_sub_field('image_shape') == 'p-shape' ) {?>
                                        <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 500"><defs><style>.cls-1{fill:#f7f2eb;}</style></defs><path class="cls-1" d="M295.84,0c104.73,0,199.37,86.43,204,201.83,4.83,121.08-82.74,220.91-191.46,220.91H184.43C117.07,424,52.22,451.11,1.09,499.48A1.61,1.61,0,0,1,0,500v0H500V0Z"/></svg>
                                    <?php } ?>

                                </div>
                            </div>

                            <div class="rightSide">
                                <div class="textWrapper text">
                                    <h3 class="reveal"><?php the_sub_field('service_title'); ?></h3>
                                    <div class="reveal">
                                        <div class="desc">
                                            <?php the_sub_field('service_summary'); ?>
                                        </div>
                                        <a href="<?php the_sub_field('service_link'); ?>">Learn more</a>
                                    </div>                                
                                </div>
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
