<!--

Template name: Member page

-->

<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
    
    <?php get_header(); ?>

    <body <?php body_class(); ?>>
        
        <main>
            <section class="memberIntro">
                <div class="wrapper">
                    <div class="introCopy">
                        <?php
                            $teamMemberImg = get_field('member_image');
                            ?>
                        <div class="imageWrapper" style="background-image: url('<?php echo $teamMemberImg; ?>')"></div>                            

                        <div class="rightText">
                            <h1><?php the_title(); ?></h1>
                            <div class="jobTitle"><h3><?php the_field('job_title'); ?><h3></div>
                            <div class="jobQuals">
                                <h4>Qualifications</h4>    
                                <?php the_field('qualifications'); ?>
                            </div>
                            <div class="descriptionIntro"><?php the_field('member_intro'); ?></div>
                        </div>
                    </div>
                    <div class="copyContinued">
                        <?php the_field('member_content_continued'); ?>
                    </div>
                    <a class="backLink reverse" href="/team/">Back to Team</a>

                </div>
            </section>

            

        </main>

        <?php get_footer(); ?>
        
    </body>
</html>
