<?php
/**
 * The sidebar containing the widget area for the right side of the header
 * 
 * For best result, use only one widget in this area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package IgglesBlitz
 */

if ( ! is_active_sidebar( 'header_right' ) ) {
	return;
}
?>

<div class="header__sidebar header__sidebar-right ">
	<?php dynamic_sidebar( 'header_right' ); ?>
</div><!-- #secondary -->
