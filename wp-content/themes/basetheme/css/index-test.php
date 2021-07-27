<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div class="main-container">
	<div class="main-grid">
		<main class="main-content">

		<?php if ( have_posts() ) : ?>

				<div class="newsWrapper">
					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<div class="outerNewsWrap">
							<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
							<a href="<?php the_permalink(); ?>" class="newsItem" style="background-image: url('<?php echo $backgroundImg[0]; ?>'); ">
								<div class="imageWrapper">
									<?php the_post_thumbnail('news-small'); ?>
								</div>
								<div class="titleWrapper">
									<h1 class="mainTitle"><?php the_title(); ?></h1>
									<h2 class="secondaryTitle"><?php the_title(); ?></h2>
								</div>
							</a>
							<div class="downWrapper">
								<a class="downArrow" href="#scrollBelow">
									<svg class="bottomBG" xmlns="http://www.w3.org/2000/svg" width="32.213" height="43.609" viewBox="0 0 32.213 43.609"><g transform="translate(1.951 0.353) rotate(90)"><path d="M.311,0-7,7.311V23.4L.311,30.713H27.8L35.109,23.4V7.311L27.8,0Z" transform="translate(7.397 -29.511)" fill="none" stroke="#0e45a9" stroke-width="1.5"></path></g></svg>
									<svg class="topBG" xmlns="http://www.w3.org/2000/svg" width="32.213" height="43.609" viewBox="0 0 32.213 43.609"><g transform="translate(1.951 0.353) rotate(90)"><path d="M.311,0-7,7.311V23.4L.311,30.713H27.8L35.109,23.4V7.311L27.8,0Z" transform="translate(7.397 -29.511)" fill="#0e45a9" stroke="#0e45a9" stroke-width="1.5"></path></g></svg>
									<svg class="arrow" xmlns="http://www.w3.org/2000/svg" width="19.93" height="7.541" viewBox="0 0 19.93 7.541"><g transform="translate(0 0.53)"><path d="M.144,0-3.25,3.394" transform="translate(18.94 3.086)" fill="none" stroke="#0e45a9" stroke-width="1.5"></path><path d="M.8,0H-18.07" transform="translate(18.07 3.24)" fill="none" stroke="#0e45a9" stroke-width="1.5"></path><path d="M.491.491l-3.71-3.71" transform="translate(18.908 3.219)" fill="none" stroke="#0e45a9" stroke-width="1.5"></path></g></svg>
								</a>
							</div>
							
							<div id="scrollBelow"></div>
						</div>
					<?php endwhile; ?>	
			</div>						

			<?php else : ?>

			<?php endif; // End have_posts() check. ?>

			<?php /* Display navigation to next/previous pages when applicable */ ?>
			<?php
			if ( function_exists( 'foundationpress_pagination' ) ) :
				foundationpress_pagination();
			elseif ( is_paged() ) :
			?>
				<nav id="post-nav">
					<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'foundationpress' ) ); ?></div>
					<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'foundationpress' ) ); ?></div>
				</nav>
			<?php endif; ?>

		</main>
		<?php get_sidebar(); ?>

	</div>
</div>
<?php get_footer();
