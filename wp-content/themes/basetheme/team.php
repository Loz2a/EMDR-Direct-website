<!--

Template name: Team page

-->

<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
    
    <?php get_header(); ?>

    <body <?php body_class(); ?>>
        
        <main>
            <section class="teamIntro team">
                <div class="wrapper">
                    <div class="teamIntroContainer">
                        <div class="teamIntroImage">
                        <?php
                            $image = get_field('team_banner_image');
                            if( $image ):

                                // Image variables.
                                $url = $image['url'];
                                $title = $image['title'];
                                $alt = $image['alt'];
                                $caption = $image['caption'];

                                // Thumbnail size attributes.
                                $size = 'teamsBanner';
                                $thumb = $image['sizes'][ $size ];
                                $width = $image['sizes'][ $size . '-width' ];
                                $height = $image['sizes'][ $size . '-height' ];
                                ?>

                                <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($alt); ?>" />

                            <?php endif; ?>

                        </div>
                        <div class="teamIntroCopy">
                            <h1>Our Team</h1>
                            <div><?php the_field('team_intro_copy'); ?></div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="team teamGrid" id="team">
                <div class="wrapper">
                    <div class="team-content">
                        <?php
                            if( have_rows('team_member') ):
                                while( have_rows('team_member') ) : the_row(); ?>

                                <?php
                                    $teamMemberImg = get_sub_field('team_member_image');
                                    $teamMemberName = get_sub_field('team_member_name');
                                    $teamMemberRole = get_sub_field('team_member_role');
                                    $teamMemberLink = get_sub_field('team_member_link');
                                    ?>

                                    <a href="<?php echo $teamMemberLink; ?>" class="teamMemberContainer">
                                        <div class="team-image" style="background: url('<?php echo $teamMemberImg; ?>')"></div>
                                        <div class="team-description">
                                            <div class="team-description-container">
                                                <h2><?php echo $teamMemberName; ?></h2>
                                                <h3><?php echo $teamMemberRole; ?></h3>
                                            </div>
                                        </div>
                                        <div class="arrow"></div>
                                    </a>

                                <?php endwhile;

                            // No value.
                            else :
                                // Do something...
                            endif;
                        ?>
                    </div>
                </div>
            </section>

        </main>

        <?php get_footer(); ?>
        
    </body>
</html>
