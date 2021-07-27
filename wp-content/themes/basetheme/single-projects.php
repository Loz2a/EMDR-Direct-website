<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
    
    <?php get_header(); 
        $permalink = get_the_permalink();
    ?>

    <body <?php body_class(); ?>>
        
        <main>
           
            <section class="postIntro">
                <div class="bg"></div>

                <div class="videoWrapper">
                    <div class="overlay"></div>
                    <?php if( have_rows('project_banner') ): ?>

                        <div class="projectBannerWrapper">
                            <?php while( have_rows('project_banner') ): the_row(); ?>
                            <div class="bannerWrapper slide">

                                <?php 
                                    $attachment_id = get_sub_field('project_banner_images');
                                    $size = "projectBannerSlide"; // (thumbnail, medium, large, full or custom size)
                                    $image = wp_get_attachment_image_src( $attachment_id, $size );
                                    // url = $image[0];
                                    // width = $image[1];
                                    // height = $image[2];
                                ?>
                                <img class="image-class" alt="" src="<?php echo $image[0]; ?>" />


                            </div>
                            <?php endwhile; ?>
                        </div>
                        <?php endif; ?>
                </div>
                
            </section>
            <section class="project">
                <div class="wrapper">
                    <div class="projectTitle">
                        <h1 class="reveal"><?php the_title(); ?></h1>
                        <?php
                            $posttags = get_the_tags();
                            if ($posttags) {
                            foreach($posttags as $tag) {
                                echo '<span>' . $tag->name . '</span> '; 
                            }
                            }
                        ?>
                    </div>
                    <div class="projectContent">
                        <div class="first">
                            <?php the_field('content_left'); ?>
                        </div>
                        <div class="second">
                            <?php the_field('content_right'); ?>
                        </div>                    
                    </div>
                    <a class="backLink reverse" href="/projects/">Back to Projects</a>
                </div>
            </section>


        <?php get_footer(); ?>
    </body>
</html>
