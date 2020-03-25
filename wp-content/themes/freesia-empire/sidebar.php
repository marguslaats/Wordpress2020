<?php
/**
 * The sidebar containing the main Sidebar area.
 *
 * @package Theme Freesia
 * @subpackage Freesia Empire
 * @since Freesia Empire 1.0
 */
	$freesiaempire_settings = freesiaempire_get_theme_options(); 
	global $freesiaempire_content_layout;
	if( $post ) {
		$layout = get_post_meta( $post->ID, 'freesiaempire_sidebarlayout', true );
	}
	if( empty( $layout ) || is_archive() || is_search() || is_home() ) {
		$layout = 'default';
	}

if( 'default' == $layout ) { //Settings from customizer
	if(($freesiaempire_settings['freesiaempire_sidebar_layout_options'] != 'nosidebar') && ($freesiaempire_settings['freesiaempire_sidebar_layout_options'] != 'fullwidth')){ ?>

<aside id="secondary">
<?php }
}else{ // for page/ post
		if(($layout != 'no-sidebar') && ($layout != 'full-width')){ ?>
<aside id="secondary">
  <?php }
	}?>
  <?php 
	if( 'default' == $layout ) { //Settings from customizer
		if(($freesiaempire_settings['freesiaempire_sidebar_layout_options'] != 'nosidebar') && ($freesiaempire_settings['freesiaempire_sidebar_layout_options'] != 'fullwidth')): ?>
  <?php dynamic_sidebar( 'freesiaempire_main_sidebar' ); ?>
</aside> <!-- #secondary -->
<?php endif;
	}else{ // for page/post
		if(($layout != 'no-sidebar') && ($layout != 'full-width')){
			dynamic_sidebar( 'freesiaempire_main_sidebar' );
			echo '</aside><!-- #secondary -->';
		}
	}