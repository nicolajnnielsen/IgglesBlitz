<?php
/**
 * The template for displaying the footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package IgglesBlitz
 */

?>

<?php echo (is_single() ) ? '<a title="Go to comments" aria-label="Go to comments" class="btn-comment" href="#comments"><i class="dashicons dashicons-admin-comments"></i></a>' : '' ; ?>
<a title="Go to top of page" aria-label="Go to top of page" class="btn-top <?php echo (is_single()) ? 'btn-top__single' : '' ?>" href="#top"><span class="dashicons dashicons-arrow-up-alt"></span></a>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<p> &copy; Copyright <?php echo date("Y"); echo ' <span class="sep"> | </span> '; echo bloginfo('name'); echo ' <span class="sep"> | </span> '; ?> All Rights Reserved </p>
			<p>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme by %1$s', 'iggles_blitz' ), '<a href="https://nicolajnielsen.dev/">Nicolaj N. Nielsen</a>' );
				?>
			</p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer();?>

</body>
</html>
