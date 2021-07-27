<!--

Template name: Service page

-->

<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
    
    <?php get_header(); ?>

    <body <?php body_class(); ?>>
        
        <main>



            <section class="service-banner-section">
              <div class="wrapper">

                <div class="link-container">
                  <a class="reverse" href="/services/">Back to Services</a>
                </div>

                <div class="service-banner">
                  <div class="service-banner-continer">
                  <?php 
                        $attachment_id = get_field('service_banner_image');
                        $size = "serviceBanner"; // (thumbnail, medium, large, full or custom size)
                        $image = wp_get_attachment_image_src( $attachment_id, $size );
                        // url = $image[0];
                        // width = $image[1];
                        // height = $image[2];
                    ?>
                    <img class="service-banner-img" alt="service banner" src="<?php echo $image[0]; ?>" />

                    <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1640 632.1"><defs><style>.cls-1{fill:#f7f2eb;}</style></defs><path class="cls-1" d="M1356.23,0c145.56,0,277.11,108.92,283.51,254.36,6.71,152.6-115,278.41-266.13,278.41l-1114.77,2C161.89,536.59,72.61,572.4,4,631.46a2.38,2.38,0,0,1-4-1.81V260.46H.12V4.54A2.58,2.58,0,0,1,2.7,2L1356.23,0H0V632.1H1640V0Z"/></svg>
                  </div>                
                </div>

                <div class="service-title">
                  <div class="textWrapper">
                      <h1 class="reveal"><?php the_title(); ?></h1>
                  </div>                
                </div>

              </div>
            </section>

            <section class="service servicesVisible" id="service">
                <div class="wrapper">

                  <div class="service-content">
                    <?php the_field('service_details'); ?>
                  </div>

                </div>
            </section>

        </main>

        <?php get_footer(); ?>
        
    </body>
</html>
