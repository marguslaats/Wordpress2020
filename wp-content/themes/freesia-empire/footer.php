<?php
/**
 * The template for displaying the footer.
 *
 * @package Theme Freesia
 * @subpackage Freesia Empire
 * @since Freesia Empire 1.0
 */
$freesiaempire_settings = freesiaempire_get_theme_options();
if (!is_page_template('page-templates/freesiaempire-corporate.php') ){ 
  if(is_page_template('three-column-blog-template.php') || is_page_template('our-team-template.php') || is_page_template('about-us-template.php') || is_page_template('portfolio-template.php') ){

	}else{?>
</div>
<!-- end .container -->
<?php }
} ?>
</div>
<!-- end #content -->
<!-- Footer Start ============================================= -->
<footer id="colophon" class="site-footer clearfix" role="contentinfo">
	<?php
				$footer_column = $freesiaempire_settings['freesiaempire_footer_column_section'];
					if( is_active_sidebar( 'freesiaempire_footer_1' ) || is_active_sidebar( 'freesiaempire_footer_2' ) || is_active_sidebar( 'freesiaempire_footer_3' ) || is_active_sidebar( 'freesiaempire_footer_4' )) { ?>
	<div class="widget-wrap">
		<div class="container">
			<div class="widget-area clearfix">
			<?php
				if($footer_column == '1' || $footer_column == '2' ||  $footer_column == '3' || $footer_column == '4'){
				echo '<div class="column-'.absint($footer_column).'">';
					if ( is_active_sidebar( 'freesiaempire_footer_1' ) ) :
						dynamic_sidebar( 'freesiaempire_footer_1' );
					endif;
				echo '</div><!-- end .column'.absint($footer_column). '  -->';
				}
				if($footer_column == '2' ||  $footer_column == '3' || $footer_column == '4'){
				echo '<div class="column-'.absint($footer_column).'">';
					if ( is_active_sidebar( 'freesiaempire_footer_2' ) ) :
						dynamic_sidebar( 'freesiaempire_footer_2' );
					endif;
				echo '</div><!--end .column'.absint($footer_column).'  -->';
				}
				if($footer_column == '3' || $footer_column == '4'){
				echo '<div class="column-'.absint($footer_column).'">';
					if ( is_active_sidebar( 'freesiaempire_footer_3' ) ) :
						dynamic_sidebar( 'freesiaempire_footer_3' );
					endif;
				echo '</div><!--end .column'.absint($footer_column).'  -->';
				}
				if($footer_column == '4'){
				echo '<div class="column-'.absint($footer_column).'">';
					if ( is_active_sidebar( 'freesiaempire_footer_4' ) ) :
						dynamic_sidebar( 'freesiaempire_footer_4' );
					endif;
				echo '</div><!--end .column'.absint($footer_column).  '-->';
				}
				?>
			</div> <!-- end .widget-area -->
		</div> <!-- end .container -->
	</div> <!-- end .widget-wrap -->
	<?php } ?>
	<div class="site-info">
		<div class="container">
			<?php if(has_nav_menu('footermenu')):
				$args = array(
					'theme_location' => 'footermenu',
					'container'      => '',
					'items_wrap'     => '<ul>%3$s</ul>',
				);
				echo '<nav id="footer-navigation" role="navigation" aria-label="'.esc_attr__('Footer Menu','freesia-empire').'">';
				wp_nav_menu($args);
				echo '</nav><!-- end #footer-navigation -->';
			endif; ?>
			<?php
			if(has_nav_menu('social-link') && $freesiaempire_settings['freesiaempire_buttom_social_icons'] == 0):
				do_action('social_links');
			endif;
				
			if ( is_active_sidebar( 'freesiaempire_footer_options' ) ) :
				dynamic_sidebar( 'freesiaempire_footer_options' );
			else:
				echo '<div class="copyright">' .'&copy; ' . date('Y') .' '; ?>
				<a title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" target="_blank" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo get_bloginfo( 'name', 'display' ); ?></a> | 
								<?php _e('Designed by:','freesia-empire'); ?> <a title="<?php echo esc_attr__( 'Themefreesia', 'freesia-empire' ); ?>" target="_blank" href="<?php echo esc_url( 'https://themefreesia.com' ); ?>"><?php _e('Theme Freesia','freesia-empire');?></a> | 
								<?php _e('Powered by:','freesia-empire'); ?> <a title="<?php echo esc_attr__( 'WordPress', 'freesia-empire' );?>" target="_blank" href="<?php echo esc_url( 'http://wordpress.org' );?>"><?php _e('WordPress','freesia-empire'); ?></a>
							</div>
			<?php endif;?>
			<div style="clear:both;"></div>
		</div> <!-- end .container -->
	</div> <!-- end .site-info -->
	<?php
		$disable_scroll = $freesiaempire_settings['freesiaempire_scroll'];
		if($disable_scroll == 0):?>
	<div class="go-to-top"><a title="<?php _e('Go to Top','freesia-empire');?>" href="#masthead"></a></div> <!-- end .go-to-top -->
	<?php endif; ?>
</footer> <!-- end #colophon -->
</div> <!-- end #page -->
<?php wp_footer(); ?>
</body>
</html>