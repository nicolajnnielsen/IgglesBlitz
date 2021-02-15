<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package IgglesBlitz
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<?php
	// Checking color theme in cookies, setting body class depending on it
	$isMidnightMode = false;
	if (!empty($_COOKIE['colorMode']) && $_COOKIE['colorMode'] == 'midnight') {
		$isMidnightMode = true;
	}
?>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<meta name="theme-color" content="<?php echo $isMidnightMode ? "#004C54" : "#046A38" ?>">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400;1,700&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class( $isMidnightMode ? "midnight-green" : "" ); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'iggles_blitz' ); ?></a>

	<header id="masthead" class="site-header">
		<a id="top" class="header-img" href="<?php echo home_url() ?>">
			<div id="wp-custom-header" class="wp-custom-header">
				<img class="header-image header-image--kelly-green" src="<?php echo get_template_directory_uri(); ?>/images/IgglesBlitz-Header.png"
					srcset="<?php echo get_template_directory_uri(); ?>/images/IgglesBlitz-Header_KG_400w.png 400w,
							<?php echo get_template_directory_uri(); ?>/images/IgglesBlitz-Header_KG_550w.png 550w,
							<?php echo get_template_directory_uri(); ?>/images/IgglesBlitz-Header_KG_800w.png 800w,
							<?php echo get_template_directory_uri(); ?>/images/IgglesBlitz-Header_KG_991w.png 991w,
							<?php echo get_template_directory_uri(); ?>/images/IgglesBlitz-Header_KG_1350w.png 1350w,
							<?php echo get_template_directory_uri(); ?>/images/IgglesBlitz-Header_test.png 1920w"
					sizes="(max-width: 400px) 400px,
							(max-width: 550px) 550px,
							(max-width: 800px) 800px,
							(max-width: 991px) 991px,
							(max-width: 1350px) 1350px,
							1920px"
							
					alt="IgglesBlitz Header Image">
				<img class="header-image header-image--midnight-green" src="<?php echo get_template_directory_uri(); ?>/images/IgglesBlitz-Header.png"
					srcset="<?php echo get_template_directory_uri(); ?>/images/IgglesBlitz-Header_MG_400w.png 400w,
							<?php echo get_template_directory_uri(); ?>/images/IgglesBlitz-Header_MG_550w.png 550w,
							<?php echo get_template_directory_uri(); ?>/images/IgglesBlitz-Header_MG_800w.png 800w,
							<?php echo get_template_directory_uri(); ?>/images/IgglesBlitz-Header_MG_991w.png 991w,
							<?php echo get_template_directory_uri(); ?>/images/IgglesBlitz-Header_MG_1350w.png 1350w,
							<?php echo get_template_directory_uri(); ?>/images/IgglesBlitz-Header_MG.png 1920w"
					sizes="(max-width: 400px) 400px,
							(max-width: 550px) 550px,
							(max-width: 800px) 800px,
							(max-width: 991px) 991px,
							(max-width: 1350px) 1350px,
							1920px"
							
					alt="IgglesBlitz Header Image">
					<?php
				$iggles_blitz_description = get_bloginfo( 'description', 'display' );
				if ( $iggles_blitz_description || is_customize_preview() ) : ?>
					<p class="screen-reader-text"><?php echo $iggles_blitz_description; /* WPCS: xss ok. */ ?></p>
				<?php endif; ?>
			</div>
		</a>

		<?php get_sidebar('header-left'); ?>

		<button id="menu-toggle" class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><span></span></button>
		<nav id="site-navigation" class="main-navigation">
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
			<button title="Change Theme" id="btnColorToggle" ></button>
		</nav><!-- #site-navigation -->

		<?php get_sidebar('header-right'); ?>
		
	</header><!-- #masthead -->
