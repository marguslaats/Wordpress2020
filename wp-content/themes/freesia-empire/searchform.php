<?php
/**
 * Displays the searchform
 *
 * @package Theme Freesia
 * @subpackage Freesia Empire
 * @since Freesia Empire 1.0
 */
?>
<form class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
	<?php
		$freesiaempire_settings = freesiaempire_get_theme_options();
		$freesiaempire_search_form = $freesiaempire_settings['freesiaempire_search_text'];
		if($freesiaempire_search_form !='Search &hellip;'): ?>
	<label class="screen-reader-text"><?php echo esc_html ($freesiaempire_search_form); ?> </label>
	<input type="search" name="s" class="search-field" placeholder="<?php echo esc_attr($freesiaempire_search_form); ?>" autocomplete="off">
	<button type="submit" class="search-submit"><i class="search-icon"></i></button>
	<?php else: ?>
	<input type="search" name="s" class="search-field" placeholder="<?php esc_attr_e( 'Search ...', 'freesia-empire' ); ?>" autocomplete="off">
	<button type="submit" class="search-submit"><i class="search-icon"></i></button>
	<?php endif; ?>
</form> <!-- end .search-form -->