<?php 
/**
 * Markup for custom search field
 *
 * @package IgglesBlitz
 */
?>

<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
    <label class="search-label">
        <span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span>
        <input type="search" class="search-field"
            aria-label="search field"
            placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>"
            value="<?php echo get_search_query() ?>" name="s"
            title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
	</label>
	<button class="search-submit" aria-label="submit search"><span class="dashicons dashicons-search"></span></button>
</form>