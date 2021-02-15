<?php
/**
 * The homepage template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package IgglesBlitz
 */

get_header();
?>

<?php
// First post - full text shown in main tag if homepage, otherwise main is container of all posts
if ( have_posts() ) :
	if (!is_paged() && is_front_page()) : ?>
		<main id="main" class="site-main">
			<?php
				the_post();
				get_template_part( 'template-parts/content', get_post_type() );
			?>
		</main><!-- #main -->
	<?php endif; ?>

	<?php if (is_paged()) : ?>
		<main id="main" class="site-main">
	<?php else : // Container for posts after first, only showing excerpts ?>
		<section class="front-posts">
	<?php endif; ?>
	
	<?php
	/* Start the Loop */
	while ( have_posts() ) :
		the_post();
		get_template_part('template-parts/content-excerpts', get_post_type());
		/*
		 * Include the Post-Type-specific template for the content.
		 * If you want to override this in a child theme, then include a file
		 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
		 */
	endwhile;

	// Closing tags depending on paged or not
	if (is_paged()) :
		echo '</main>';
	else :
		echo '</section>';
	endif;

	the_posts_navigation();
else:
	get_template_part( 'template-parts/content', 'none' );
endif;

get_sidebar();
get_footer();
