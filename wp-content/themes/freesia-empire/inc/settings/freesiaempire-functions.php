<?php
/**
 * Custom functions
 *
 * @package Theme Freesia
 * @subpackage Freesia Empire
 * @since Freesia Empire 1.0
 */
/********************* Set Default Value if not set ***********************************/
	if ( !get_theme_mod('freesiaempire_theme_options') ) {
		set_theme_mod( 'freesiaempire_theme_options', freesiaempire_get_option_defaults_values() );
	}
/********************* freesiaempire RESPONSIVE AND CUSTOM CSS OPTIONS ***********************************/
function freesiaempire_resp_and_custom_css() {
	$freesiaempire_settings = freesiaempire_get_theme_options();
	$header_display = $freesiaempire_settings['freesiaempire_header_display'];
	if( $freesiaempire_settings['freesiaempire_responsive'] == 'on' ) { ?>
	<meta name="viewport" content="width=device-width" />
	<?php } else{ ?>
	<meta name="viewport" content="width=1070" />
	<?php  }
	if($header_display=='header_logo'){
		$freesia_empire_internal_css = '<!-- Custom CSS -->'."\n";
		$freesia_empire_internal_css .= '<style type="text/css" media="screen">'."\n";
		$freesia_empire_internal_css .= 
				'#site-branding #site-title, #site-branding #site-description{
				clip: rect(1px, 1px, 1px, 1px);
				position: absolute;
			}';
		$freesia_empire_internal_css .= '</style>'."\n";
	}
	if (isset($freesia_empire_internal_css)) {
		echo $freesia_empire_internal_css;
	}
}
add_filter( 'wp_head', 'freesiaempire_resp_and_custom_css');

/******************************** EXCERPT LENGTH *********************************/
function freesiaempire_freesiaempire_excerpt_length($length) {
	$freesiaempire_settings = freesiaempire_get_theme_options();
	$freesiaempire_excerpt_length = $freesiaempire_settings['freesiaempire_excerpt_length'];
	return absint($freesiaempire_excerpt_length);// this will return 65 words in the excerpt
}
add_filter('excerpt_length', 'freesiaempire_freesiaempire_excerpt_length');

/********************* CONTINUE READING LINKS FOR EXCERPT *********************************/
function freesiaempire_continue_reading() {
	 return '&hellip; '; 
}
add_filter('excerpt_more', 'freesiaempire_continue_reading');

/***************** USED CLASS FOR BODY TAGS ******************************/
function freesiaempire_body_class($classes) {
	global $freesiaempire_site_layout, $freesiaempire_content_layout, $post;
	$freesiaempire_settings = freesiaempire_get_theme_options();
	if ($post) {
		$layout = get_post_meta($post->ID, 'freesiaempire_sidebarlayout', true);
	}
	$freesiaempire_site_layout = $freesiaempire_settings['freesiaempire_design_layout'];
	$freesiaempire_blog_layout_temp = $freesiaempire_settings['freesiaempire_blog_layout_temp'];
	$freesiaempire_content_layout = $freesiaempire_settings['freesiaempire_sidebar_layout_options'];
	if (empty($layout) || is_archive() || is_search() || is_home()) {
		$layout = 'default';
	}
	if(!is_page_template('page-templates/freesiaempire-corporate.php')) {
		if ('default' == $layout) {
			$themeoption_layout = $freesiaempire_content_layout;
			if ('left' == $themeoption_layout) {
				$classes[] = 'left-sidebar-layout';
			} elseif ('right' == $themeoption_layout) {
				$classes[] = '';
			} elseif ('fullwidth' == $themeoption_layout) {
				$classes[] = 'full-width-layout';
			} elseif ('nosidebar' == $themeoption_layout) {
				$classes[] = 'no-sidebar-layout';
			}
		} elseif ('left-sidebar' == $layout) {
			$classes[] = 'left-sidebar-layout';
		} elseif ('right-sidebar' == $layout) {
			$classes[] = '';//css blank
		} elseif ('full-width' == $layout) {
			$classes[] = 'full-width-layout';
		} elseif ('no-sidebar' == $layout) {
			$classes[] = 'no-sidebar-layout';
		}
		if($freesiaempire_blog_layout_temp == 'large_image_display'){
			$classes[] = "blog-large";
		}elseif ($freesiaempire_blog_layout_temp == 'medium_image_display'){
			$classes[] = "small_image_blog";
		}
	}
	if (!is_page_template('page-templates/freesiaempire-corporate.php') && !is_page_template('alter-front-page-template.php') ){
		$classes[] = '';
	}elseif (is_page_template('page-templates/freesiaempire-corporate.php')) {
		$classes[] = 'tf-business-template';
		$classes[] = 'page-template-default';
	}
	if (is_page_template('page-templates/page-template-contact.php')) {
			$classes[] = 'contact';
	}
	if ($freesiaempire_site_layout =='boxed-layout') {
		$classes[] = 'boxed-layout';
	}
	if ($freesiaempire_site_layout =='small-boxed-layout') {
		$classes[] = 'boxed-layout-small';
	}
	return $classes;
}
add_filter('body_class', 'freesiaempire_body_class');

/***************************** wp_enqueue_script ********* *******************/
function freesiaempire_jquery_javascript_file($hook) {
	if( $hook != 'widgets.php' )
	return;
	wp_enqueue_script( 'freesiaempire-script', get_template_directory_uri() . '/inc/js/freesia-empire-image-upload.js');
	wp_enqueue_media();
}
add_action( 'admin_enqueue_scripts', 'freesiaempire_jquery_javascript_file' ); 

/**************************** SOCIAL MENU *********************************************/
function freesiaempire_social_links() {
	if ( has_nav_menu( 'social-link' ) ) : ?>
	<div class="social-links clearfix">
	<?php
		wp_nav_menu( array(
			'container' 	=> '',
			'theme_location' => 'social-link',
			'depth'          => 1,
			'items_wrap'      => '<ul>%3$s</ul>',
			'link_before'    => '<span class="screen-reader-text">',
			'link_after'     => '</span>',
		) );
	?>
	</div><!-- end .social-links -->
	<?php endif;
}
add_action ('social_links', 'freesiaempire_social_links');

/******************* DISPLAY BREADCRUMBS ******************************/
function freesiaempire_breadcrumb() {
	if (function_exists('bcn_display')) { ?>
		<div class="breadcrumb home">
			<?php bcn_display(); ?>
		</div> <!-- .breadcrumb -->
	<?php }
}

/*********************** freesiaempire PAGE SLIDERS ***********************************/
function freesiaempire_page_sliders() {
	$freesiaempire_settings = freesiaempire_get_theme_options();
	global $freesiaempire_excerpt_length;
	global $post;
	$freesiaempire_page_sliders_display = '';
	$freesiaempire_total_page_no 		= 0; 
	$freesiaempire_list_page				= array();
	for( $i = 1; $i <= $freesiaempire_settings['freesiaempire_slider_no']; $i++ ){
		if( isset ( $freesiaempire_settings['freesiaempire_featured_page_slider_' . $i] ) && $freesiaempire_settings['freesiaempire_featured_page_slider_' . $i] > 0 ){
			$freesiaempire_total_page_no++;
			$freesiaempire_list_page	=	array_merge( $freesiaempire_list_page, array( esc_attr($freesiaempire_settings['freesiaempire_featured_page_slider_' . $i] )) );
		}
	}
		if ( !empty( $freesiaempire_list_page ) && $freesiaempire_total_page_no > 0 ) {
			$freesiaempire_page_sliders_display 	.= '<div class="main-slider"> <div class="layer-slider">';
					$get_featured_posts 		= new WP_Query(array( 'posts_per_page'=> $freesiaempire_settings['freesiaempire_slider_no'], 'post_type' => array('page'), 'post__in' => $freesiaempire_list_page, 'orderby' => 'post__in', ));
					$j=1; $i=0;
			while ($get_featured_posts->have_posts()):$get_featured_posts->the_post();
			$attachment_id = get_post_thumbnail_id();
			$image_attributes = wp_get_attachment_image_src($attachment_id,'freesiaempire_slider_image');
						$i++;
						$title_attribute       	 	 = apply_filters('the_title', get_the_title($post->ID));
						$excerpt               	 	 = substr(get_the_excerpt(), 0 , 160);
						if (1 == $i) {$classes   	 = "slides show-display";} else { $classes = "slides hide-display";}
				$freesiaempire_page_sliders_display    	.= '<div class="'.$classes.'">';
				if ($image_attributes) {
					$freesiaempire_page_sliders_display 	.= '<div class="image-slider clearfix" title="'.the_title('', '', false).'"' .' style="background-image:url(' ."'" .esc_url($image_attributes[0])."'" .')">';
				}
				if ($title_attribute != '' || $excerpt != '') {
					$freesiaempire_page_sliders_display 	.= '<div class="container">';
					if($j == 1){
					$freesiaempire_page_sliders_display 	.= '<article class="slider-content clearfix freesia-animation fadeInRight">';
					}else{
						$freesiaempire_page_sliders_display 	.= '<article class="slider-content clearfix">';
					}
				
				$remove_link = $freesiaempire_settings['freesiaempire_slider_link'];
					if($remove_link == 0){
						if ($title_attribute != '') {
							$freesiaempire_page_sliders_display .= '<h2 class="slider-title"><a href="'.esc_url(get_permalink()).'" title="'.the_title('', '', false).'" rel="bookmark">'.get_the_title().'</a></h2><!-- .slider-title -->';
						}
					}else{
						$freesiaempire_page_sliders_display .= '<h2 class="slider-title">'.get_the_title().'</h2><!-- .slider-title -->';
					}
					if ($excerpt != '') {
						$excerpt_text = $freesiaempire_settings['freesiaempire_tag_text'];
						$freesiaempire_page_sliders_display .= '<div class="slider-text">';
						if($freesiaempire_settings['freesiaempire_crop_excerpt_length'] ==1){
							$freesiaempire_page_sliders_display .= '<h3>'.wp_strip_all_tags($excerpt).' </h3></div><!-- end .slider-text -->';
						}else{
							$freesiaempire_page_sliders_display .= '<h3>'.wp_strip_all_tags(get_the_excerpt()).' </h3></div><!-- end .slider-text -->';
						}
						
						$freesiaempire_page_sliders_display .= '<div class="slider-buttons">';
						if($freesiaempire_settings['freesiaempire_slider_button'] == 0){
							if($excerpt_text == '' || $excerpt_text == 'Read More') :
								$freesiaempire_page_sliders_display 	.= '<a title='.'"'.get_the_title(). '"'. ' '.'href="'.esc_url(get_permalink()).'"'.' class="btn-default vivid">'.__('Read More', 'freesia-empire').'<span>&#10093;</span></a>';
							else:
							$freesiaempire_page_sliders_display 	.= '<a title='.'"'.get_the_title(). '"'. ' '.'href="'.esc_url(get_permalink()).'"'.' class="btn-default vivid">'.$freesiaempire_settings[ 'freesiaempire_tag_text' ].'<span>&#10093;</span></a>';
							endif;
								}
						$freesiaempire_page_sliders_display 	.='</div>';
						}
						$freesiaempire_page_sliders_display 	.='</article><!-- end .slider-content --> </div><!-- end .container -->';
				}
				if ($image_attributes) {
					$freesiaempire_page_sliders_display 	.='</div><!-- end .image-slider -->';
				}
				$freesiaempire_page_sliders_display 	.='</div><!-- end .slides -->';
				$j++;
			endwhile;
			wp_reset_postdata();
			$freesiaempire_page_sliders_display .= '</div>	  <!-- end .layer-slider -->
					<a class="slider-prev" id="prev2" href="#">&#10092;</a> <a class="slider-next" id="next2" href="#">&#10093;</a>
  <nav class="slider-button" role="navigation" aria-label="'.esc_attr__('Slider Nav','freesia-empire').'"> </nav>
  <!-- end .slider-button -->
</div>
<!-- end .main-slider -->';
		}
				echo $freesiaempire_page_sliders_display;
}

/*************************** ENQUEING STYLES AND SCRIPTS ****************************************/
function freesiaempire_scripts() {
	$freesiaempire_settings = freesiaempire_get_theme_options();
	wp_enqueue_style( 'freesiaempire-style', get_stylesheet_uri() );
	wp_enqueue_script('jquery_cycle_all', get_template_directory_uri().'/js/jquery.cycle.all.js', array('jquery'), '3.0.3', true);
	
	wp_register_style( 'freesiaempire_google_fonts', '//fonts.googleapis.com/css?family=Roboto:400,300,500,700' ); 

	$enable_slider = $freesiaempire_settings['freesiaempire_enable_slider'];
	$freesiaempire_stick_menu = $freesiaempire_settings['freesiaempire_stick_menu'];
		wp_enqueue_script('freesiaempire_slider', get_template_directory_uri().'/js/freesiaempire-slider-setting.js', array('jquery_cycle_all'), false, true);
	wp_enqueue_script('freesiaempire-main', get_template_directory_uri().'/js/freesiaempire-main.js', array('jquery'));
	if($freesiaempire_stick_menu != 1):
	wp_enqueue_script('sticky-scroll', get_template_directory_uri().'/js/freesiaempire-sticky-scroll.js', array('jquery'));
	endif;
	wp_enqueue_script('freesiaempire-navigation', get_template_directory_uri().'/js/navigation.js', array('jquery'), false, true);
	wp_enqueue_script('freesiaempire-quote-slider', get_template_directory_uri().'/js/freesiaempire-quote-slider.js', array('jquery'),'4.2.2', true);
	wp_enqueue_style( 'freesiaempire_google_fonts' );
	wp_enqueue_style( 'genericons', get_template_directory_uri() . '/genericons/genericons.css', array(), '3.4.1' );
	wp_enqueue_script('freesiaempire-skip-link-focus-fix', get_template_directory_uri().'/js/skip-link-focus-fix.js', array('jquery'), false, true);

	// Load the html5 shiv.
	wp_enqueue_script( 'html5', get_template_directory_uri() . '/js/html5.js', array(), '3.7.3' );
	wp_script_add_data( 'html5', 'conditional', 'lt IE 9' );
	if( $freesiaempire_settings['freesiaempire_responsive'] == 'on' ) {
		wp_enqueue_style('freesiaempire-responsive', get_template_directory_uri().'/css/responsive.css');
	}
	if( $freesiaempire_settings['freesiaempire_animate_css'] == 'on' ) {
		wp_enqueue_style('freesiaempire-animate', get_template_directory_uri().'/assets/wow/css/animate.min.css');
		wp_enqueue_script('wow', get_template_directory_uri().'/assets/wow/js/wow.min.js', array('jquery'));
		wp_enqueue_script('wow-settings', get_template_directory_uri().'/assets/wow/js/wow-settings.js', array('jquery'));
	}
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'freesiaempire_scripts' );
/*************************** Importing Custom CSS to the core option added in WordPress 4.7. ****************************************/
function freesiaempire_custom_css_migrate(){
$ver = get_theme_mod( 'custom_css_version', false );
	if ( version_compare( $ver, '4.7' ) >= 0 ) {
		return;
	}
	if ( function_exists( 'wp_update_custom_css_post' ) ) {
		$freesiaempire_settings = freesiaempire_get_theme_options();
		if ( $freesiaempire_settings['freesiaempire_custom_css'] != '' ) {
			$freesiaempire_core_css = wp_get_custom_css(); // Preserve css which is added from core
			$return   = wp_update_custom_css_post( $freesiaempire_core_css . $freesiaempire_settings['freesiaempire_custom_css'] );
			if ( ! is_wp_error( $return ) ) {
				unset( $freesiaempire_settings['freesiaempire_custom_css'] );
				set_theme_mod( 'freesiaempire_theme_options', $freesiaempire_settings );
				set_theme_mod( 'custom_css_version', '4.7' );
			}
		}
	}
}
add_action( 'after_setup_theme', 'freesiaempire_custom_css_migrate' );