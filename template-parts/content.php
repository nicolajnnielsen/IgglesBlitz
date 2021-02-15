<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package IgglesBlitz
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header post__header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
		endif;?>
	</header><!-- .entry-header -->

	<?php // iggles_blitz_post_thumbnail(); ?>

	<div class="post__body">
		<footer class="entry-footer post__footer">
			<div class="post__footer-content">
			<?php
				// the_title( '<h4 class="post-footer__title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' );
				if ( 'post' === get_post_type() ) :
					?>
					<div class="entry-meta">
						<?php
						iggles_blitz_posted_on();
						iggles_blitz_posted_by();
						?>
					</div><!-- .entry-meta -->
				<?php endif; ?>
			<?php iggles_blitz_entry_footer(); ?>
			</div>
		</footer><!-- .entry-footer -->
		<div class="entry-content post__content">
			<?php
			the_content( sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'iggles_blitz' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'iggles_blitz' ),
				'after'  => '</div>',
			) );
			?>

		</div><!-- .entry-content -->		
	</div>

</article><!-- #post-<?php the_ID(); ?> -->
