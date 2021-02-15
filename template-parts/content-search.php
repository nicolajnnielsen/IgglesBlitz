<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package IgglesBlitz
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('post-excerpt'); ?>>
	<header class="entry-header post__header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta post-excerpt__meta">
			<?php
			iggles_blitz_posted_on();
			iggles_blitz_posted_by();
			?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php // iggles_blitz_post_thumbnail(); ?>

	<div class="entry-summary post-excerpt__content">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

	<footer class="entry-footer post-excerpt__footer">
		<?php iggles_blitz_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
