<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package IgglesBlitz
 */

get_header();
?>

<main id="main" class="site-main">

	<section class="error-404 not-found">
		<header class="page-header">
			<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'iggles_blitz' ); ?></h1>
		</header><!-- .page-header -->

		<div class="page-content">
			<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'iggles_blitz' ); ?></p>

			<?php get_search_form(); ?>

			<?php
			/* translators: %1$s: smiley */
			$iggles_blitz_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'iggles_blitz' ), convert_smilies( ':)' ) ) . '</p>';
			the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$iggles_blitz_archive_content" );

			the_widget( 'WP_Widget_Tag_Cloud' );
			?>

		</div><!-- .page-content -->
	</section><!-- .error-404 -->
</main><!-- #main -->

<?php
get_sidebar();
get_footer();
