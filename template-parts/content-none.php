<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package IgglesBlitz
 */

?>

	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'iggles_blitz' ); ?></h1>
	</header><!-- .page-header -->

	<section class="no-results not-found">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) :

			printf(
				'<p>' . wp_kses(
					/* translators: 1: link to WP admin new post page. */
					__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'iggles_blitz' ),
					array(
						'a' => array(
							'href' => array(),
						),
					)
				) . '</p>',
				esc_url( admin_url( 'post-new.php' ) )
			);

		elseif ( is_search() ) :
			?>

			<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'iggles_blitz' ); ?></p>
			<?php
			get_search_form();

		else :
			?>

			<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'iggles_blitz' ); ?></p>
			<?php
			get_search_form();

		endif;
		?>
		<!-- .page-content -->
</section>
<!-- .no-results -->
