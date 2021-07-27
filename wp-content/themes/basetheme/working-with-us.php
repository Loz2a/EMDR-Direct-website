<!--

Template name: Working with us

-->

<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
    
    <?php get_header(); ?>

    <body <?php body_class(); ?>>
        
        <main>

            <section class="introBG">
                <div class="bg"></div>
                <div class="wrapper">
                    
                    <div class="introWrapper">
                        <h2 class="reveal">Introduction</h2>
                        <div class="introCopy">
                          <?php the_field('careers_introduction'); ?>
                        </div>
                    </div>
                    
                    <div class="downWrapper">
                        <a class="smooth goingDown" href="#working-with-us">
                            <svg class="downArrow" xmlns="http://www.w3.org/2000/svg" width="14.212" height="13.985" viewBox="0 0 14.212 13.985"><g transform="translate(-784.215 -694.253)"><path d="M0,0,6.753,6.753,0,13.505" transform="translate(798.074 700.778) rotate(90)" fill="none" stroke="#ffffff" stroke-width="1"/><path d="M0,0,6.753,6.753,0,13.505" transform="translate(798.074 694.607) rotate(90)" fill="none" stroke="#ffffff" stroke-width="1"/></g></svg>
                        </a>
                    </div>
                   
                </div>
            </section>        

            <section id="working-with-us" class="section what-we-do careers-part-1">
                <div class="wrapper">
                    <h1 class="reveal">Careers</h1>
                    <div class="innerWrapper careersContent">
                        <div class="careersContent1">
                            <?php the_field('careers_part_1'); ?>
                        </div>
                        <div class="careersContent2">
                            <?php the_field('careers_part_2'); ?>
                        </div>

                    </div>
                    <div class="careersDevelopment">
                        <?php the_field('careers_development'); ?>
                    </div>                    
                </div>
            </section>

            <section class="section what-we-do careers-part-2">
                <div class="wrapper">
                    <div class="innerWrapper">
                        <div class="innerImage">
                        <?php 
                              $attachment_id = get_field('careers_mid_banner');
                              $size = "CareersBanner"; // (thumbnail, medium, large, full or custom size)
                              $image = wp_get_attachment_image_src( $attachment_id, $size );
                              // url = $image[0];
                              // width = $image[1];
                              // height = $image[2];
                          ?>
                          <img alt="careers banner" src="<?php echo $image[0]; ?>" />
                        </div>
                    </div>
                </div>
            </section>

            <section class="section what-we-do careers-part-3">
                <div class="wrapper">
                    <div class="innerWrapper careersContent">
                        <div class="careersContent3">
                            <?php the_field('careers_part_3'); ?>
                            <!-- <div class="lower">
                                <a href="/contact/">Get in Touch</a>
                                <p>Learn more about how Poole Dick can help you.</p>
                            </div> -->
                        </div>
                        <div class="careersImage">
                          <?php 
                                $attachment_id = get_field('careers_section_image');
                                $size = "CareersImage"; // (thumbnail, medium, large, full or custom size)
                                $image = wp_get_attachment_image_src( $attachment_id, $size );
                                // url = $image[0];
                                // width = $image[1];
                                // height = $image[2];
                            ?>
                            <img class="image-class" alt="What we do" src="<?php echo $image[0]; ?>" />
                            <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 500"><defs><style>.cls-1{fill:#f7f2eb;}</style></defs><path class="cls-1" d="M295.84,0c104.73,0,199.37,86.43,204,201.83,4.83,121.08-82.74,220.91-191.46,220.91H184.43C117.07,424,52.22,451.11,1.09,499.48A1.61,1.61,0,0,1,0,500v0H500V0Z"></path></svg>
                        </div>
                    </div>
                </div>
            </section>

            <!-- <section class="section what-we-do careers-part-4">
                <div class="wrapper">
                    <div class="innerWrapper careersContent">
                        <div class="careerStatement">
                            <?php // the_field('careers_statement'); ?>
                        </div>
                    </div>
                </div>
            </section> -->

        </main>

        <?php get_footer(); ?>
        
      
    </body>
</html>
