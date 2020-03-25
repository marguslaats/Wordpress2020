<?php
/**
 * The template for displaying 404 pages
 *
 * @package Theme Freesia
 * @subpackage Freesia Empire
 * @since Freesia Empire 1.0
 */
get_header();
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

<div id="primary">
	<?php }
}?>
<div class="site-content" role="main">
	<article id="post-0" class="post error404 not-found">
		<?php if ( is_active_sidebar( 'freesiaempire_404_page' ) ) :
			dynamic_sidebar( 'freesiaempire_404_page' );
		else:?>
		<section class="error-404 not-found">
			<header class="page-header">
				<h2 class="page-title"> <?php _e( 'Oops! That page can&rsquo;t be found.', 'freesia-empire' ); ?> </h2>
			</header> <!-- .page-header -->
			<div class="page-content">
				<p> <?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'freesia-empire' ); ?> </p>
					<?php get_search_form(); ?>
			</div> <!-- .page-content -->
		</section> <!-- .error-404 -->
	<?php endif; ?>
	</article> <!-- #post-0 .post .error404 .not-found -->
</div> <!-- #content .site-content -->
<?php 
if( 'default' == $layout ) { //Settings from customizer
	if(($freesiaempire_settings['freesiaempire_sidebar_layout_options'] != 'nosidebar') && ($freesiaempire_settings['freesiaempire_sidebar_layout_options'] != 'fullwidth')): ?>
</div> <!-- #primary -->
<?php endif;
}
get_sidebar();
get_footer();