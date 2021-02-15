<?php
/**
 * Template part for displaying excerpts of posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package IgglesBlitz
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('post-excerpt'); ?>>
	<header class="entry-header post__header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta post-excerpt__meta">
				<?php
				iggles_blitz_posted_on();
				iggles_blitz_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php // iggles_blitz_post_thumbnail(); ?>

	<div class="entry-content post-excerpt__content">
		<?php
		the_excerpt();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'iggles_blitz' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer post-excerpt__footer">
		<?php iggles_blitz_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
