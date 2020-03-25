<?php
/**
 * Custom functions
 *
 * @package Theme Freesia
 * @subpackage Freesia Empire
 * @since Freesia Empire 1.0
 */

/****************** freesiaempire DISPLAY COMMENT NAVIGATION *******************************/
function freesiaempire_comment_nav() {
	if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
	?>
	<nav class="navigation comment-navigation" role="navigation">
		<h2 class="screen-reader-text"><?php _e( 'Comment navigation', 'freesia-empire' ); ?></h2>
		<div class="nav-links">
			<?php
				if ( $prev_link = get_previous_comments_link( __( 'Older Comments', 'freesia-empire' ) ) ) :
					printf( '<div class="nav-previous">%s</div>', $prev_link );
				endif;
				if ( $next_link = get_next_comments_link( __( 'Newer Comments', 'freesia-empire' ) ) ) :
					printf( '<div class="nav-next">%s</div>', $next_link );
				endif;
			?>
		</div><!-- .nav-links -->
	</nav><!-- .comment-navigation -->
	<?php
	endif;
}
/******************** Remove div and replace with ul**************************************/
add_filter('wp_page_menu', 'freesiaempire_wp_page_menu');
function freesiaempire_wp_page_menu($page_markup) {
	preg_match('/^<div class=\"([a-z0-9-_]+)\">/i', $page_markup, $matches);
	$divclass   = $matches[1];
	$replace    = array('<div class="'.$divclass.'">', '</div>');
	$new_markup = str_replace($replace, '', $page_markup);
	$new_markup = preg_replace('/^<ul>/i', '<ul class="'.$divclass.'">', $new_markup);
	return $new_markup;
}
/*******************************freesiaempire MetaBox *********************************************************/
global $freesiaempire_layout_options;
$freesiaempire_layout_options = array(
'default-sidebar'=> array(
						'id'			=> 'freesiaempire_sidebarlayout',
						'value' 		=> 'default',
						'label' 		=> __( 'Default Layout Set in', 'freesia-empire' ).' '.'<a href="'.wp_customize_url() .'?autofocus[section]=freesiaempire_layout_options" target="_blank">'.__( 'Customizer', 'freesia-empire' ).'</a>',
						'thumbnail' => ' '
					),
	'no-sidebar' 	=> array(
							'id'			=> 'freesiaempire_sidebarlayout',
							'value' 		=> 'no-sidebar',
							'label' 		=> __( 'No sidebar Layout', 'freesia-empire' )
						), 
	'full-width' => array(
									'id'			=> 'freesiaempire_sidebarlayout',
									'value' 		=> 'full-width',
									'label' 		=> __( 'Full Width Layout', 'freesia-empire' )
								),
	'left-sidebar' => array(
							'id'			=> 'freesiaempire_sidebarlayout',
							'value' 		=> 'left-sidebar',
							'label' 		=> __( 'Left sidebar Layout', 'freesia-empire' )
						),
	'right-sidebar' => array(
							'id' 			=> 'freesiaempire_sidebarlayout',
							'value' 		=> 'right-sidebar',
							'label' 		=> __( 'Right sidebar Layout', 'freesia-empire' )
						)
			);
/*************************** Add Custom Box **********************************/
function freesiaempire_add_custom_box() {
	add_meta_box(
		'siderbar-layout',
		__( 'Select layout for this specific Page only', 'freesia-empire' ),
		'freesiaempire_layout_options',
		'page', 'side', 'default'
	); 
	add_meta_box(
		'siderbar-layout',
		__( 'Select layout for this specific Post only', 'freesia-empire' ),
		'freesiaempire_layout_options',
		'post','side', 'default'
	);
}
add_action( 'add_meta_boxes', 'freesiaempire_add_custom_box' );
function freesiaempire_layout_options() {
	global $freesiaempire_layout_options;
	// Use nonce for verification  
	wp_nonce_field( basename( __FILE__ ), 'freesiaempire_custom_meta_box_nonce' ); // for security purpose ?>
	<?php
				foreach ($freesiaempire_layout_options as $field) {  
					$freesiaempire_layout_meta = get_post_meta( get_the_ID(), $field['id'], true );
					if(empty( $freesiaempire_layout_meta ) ){
						$freesiaempire_layout_meta='default';
					} ?>
				<input type="radio" class ="post-format" name="<?php echo $field['id']; ?>" value="<?php echo $field['value']; ?>" <?php checked( $field['value'], $freesiaempire_layout_meta ); ?>/>
				&nbsp;&nbsp;<?php echo $field['label']; ?> <br/>
				<?php
				} // end foreach  ?>
<?php }
/******************* Save metabox data **************************************/
add_action('save_post', 'freesiaempire_save_custom_meta');
function freesiaempire_save_custom_meta( $post_id ) { 
	global $freesiaempire_layout_options, $post; 
	// Verify the nonce before proceeding.
	if ( !isset( $_POST[ 'freesiaempire_custom_meta_box_nonce' ] ) || !wp_verify_nonce( $_POST[ 'freesiaempire_custom_meta_box_nonce' ], basename( __FILE__ ) ) )
		return;
	// Stop WP from clearing custom fields on autosave
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE)  
		return;
	if ('page' == $_POST['post_type']) {  
		if (!current_user_can( 'edit_page', $post_id ) )  
			return $post_id;  
	} 
	elseif (!current_user_can( 'edit_post', $post_id ) ) {  
		return $post_id;  
	}
	foreach ($freesiaempire_layout_options as $field) {  
		//Execute this saving function
		$old = get_post_meta( $post_id, $field['id'], true); 
		$new = $_POST[$field['id']];
		if ($new && $new != $old) {  
			update_post_meta($post_id, $field['id'], $new);  
		} elseif ('' == $new && $old) {  
			delete_post_meta($post_id, $field['id'], $old);  
		}
	} // end foreach   
}
/***************Pass slider effect  parameters from php files to jquery file ********************/
function freesiaempire_slider_value() {
	$freesiaempire_settings = freesiaempire_get_theme_options();
	$freesiaempire_transition_effect   = esc_attr($freesiaempire_settings['freesiaempire_transition_effect']);
	$freesiaempire_transition_delay    = absint($freesiaempire_settings['freesiaempire_transition_delay'])*1000;
	$freesiaempire_transition_duration = absint($freesiaempire_settings['freesiaempire_transition_duration'])*1000;
	wp_localize_script(
		'freesiaempire_slider',
		'freesiaempire_slider_value',
		array(
			'transition_effect'   => $freesiaempire_transition_effect,
			'transition_delay'    => $freesiaempire_transition_delay,
			'transition_duration' => $freesiaempire_transition_duration,
		)
	);
}
/**************************** Display Header Title ***********************************/
function freesiaempire_header_title() {
	$format = get_post_format();
	if( is_archive() ) {
		if ( is_category() ) :
			$freesiaempire_header_title = single_cat_title( '', FALSE );
		elseif ( is_tag() ) :
			$freesiaempire_header_title = single_tag_title( '', FALSE );
		elseif ( is_author() ) :
			the_post();
			$freesiaempire_header_title =  sprintf( __( 'Author: %s', 'freesia-empire' ), '<span class="vcard">' . get_the_author() . '</span>' );
			rewind_posts();
		elseif ( is_day() ) :
			$freesiaempire_header_title = sprintf( __( 'Day: %s', 'freesia-empire' ), '<span>' . get_the_date() . '</span>' );
		elseif ( is_month() ) :
			$freesiaempire_header_title = sprintf( __( 'Month: %s', 'freesia-empire' ), '<span>' . get_the_date( 'F Y' ) . '</span>' );
		elseif ( is_year() ) :
			$freesiaempire_header_title = sprintf( __( 'Year: %s', 'freesia-empire' ), '<span>' . get_the_date( 'Y' ) . '</span>' );
		elseif ( $format == 'audio' ) :
			$freesiaempire_header_title = __( 'Audios', 'freesia-empire' );
		elseif ( $format =='aside' ) :
			$freesiaempire_header_title = __( 'Asides', 'freesia-empire');
		elseif ( $format =='image' ) :
			$freesiaempire_header_title = __( 'Images', 'freesia-empire' );
		elseif ( $format =='gallery' ) :
			$freesiaempire_header_title = __( 'Galleries', 'freesia-empire' );
		elseif ( $format =='video' ) :
			$freesiaempire_header_title = __( 'Videos', 'freesia-empire' );
		elseif ( $format =='status' ) :
			$freesiaempire_header_title = __( 'Status', 'freesia-empire' );
		elseif ( $format =='quote' ) :
			$freesiaempire_header_title = __( 'Quotes', 'freesia-empire' );
		elseif ( $format =='link' ) :
			$freesiaempire_header_title = __( 'links', 'freesia-empire' );
		elseif ( $format =='chat' ) :
			$freesiaempire_header_title = __( 'Chats', 'freesia-empire' );
		elseif ( class_exists('WooCommerce') && (is_shop() || is_product_category()) ):
  			$freesiaempire_header_title = woocommerce_page_title( false );
  		elseif ( class_exists('bbPress') && is_bbpress()) :
  			$freesiaempire_header_title = get_the_title();
		else :
			$freesiaempire_header_title = get_the_archive_title();
		endif;
	} elseif (is_home()){
		$freesiaempire_header_title = get_the_title( get_option( 'page_for_posts' ) );
	} elseif (is_404()) {
		$freesiaempire_header_title = __('Page NOT Found', 'freesia-empire');
	} elseif (is_search()) {
		$freesiaempire_header_title = __('Search Results', 'freesia-empire');
	} elseif (is_page_template()) {
		$freesiaempire_header_title = get_the_title();
	} else {
		$freesiaempire_header_title = get_the_title();
	}
	return $freesiaempire_header_title;
}

/********************* Header Image ************************************/
function freesiaempire_header_image_display(){
	$freesiaempire_settings = freesiaempire_get_theme_options();
	$freesiaempire_header_image = get_header_image();
	$freesiaempire_header_image_options = $freesiaempire_settings['freesiaempire_custom_header_options'];
	if($freesiaempire_header_image_options == 'homepage'){
		if(is_front_page() || (is_home() && is_front_page())) :
			if (!empty($freesiaempire_header_image)): ?>
			<a href="<?php echo esc_url(home_url('/'));?>"><img src="<?php echo esc_url($freesiaempire_header_image);?>" class="header-image" width="<?php echo get_custom_header()->width;?>" height="<?php echo get_custom_header()->height;?>" alt="<?php echo esc_attr(get_bloginfo('name', 'display'));?>"> </a>
			<?php
			endif;
		endif;
	}elseif($freesiaempire_header_image_options == 'enitre_site'){
		if (!empty($freesiaempire_header_image)):?>
			<a href="<?php echo esc_url(home_url('/'));?>"><img src="<?php echo esc_url($freesiaempire_header_image);?>" class="header-image" width="<?php echo get_custom_header()->width;?>" height="<?php echo get_custom_header()->height;?>" alt="<?php echo esc_attr(get_bloginfo('name', 'display'));?>"> </a>
			<?php
			 endif;
	}
}
add_action ('freesiaempire_header_image','freesiaempire_header_image_display');
/********************* Custom Header setup ************************************/
function freesiaempire_custom_header_setup() {
	$args = array(
		'default-text-color'     => '',
		'default-image'          => '',
		'height'                 => apply_filters( 'freesiaempire_header_image_height', 400 ),
		'width'                  => apply_filters( 'freesiaempire_header_image_width', 2500 ),
		'random-default'         => false,
		'max-width'              => 2500,
		'flex-height'            => true,
		'flex-width'             => true,
		'random-default'         => false,
		'header-text'				 => false,
		'uploads'				 => true,
		'wp-head-callback'       => '',
		'admin-preview-callback' => 'freesiaempire_admin_header_image',
	);
	add_theme_support( 'custom-header', $args );
}
add_action( 'after_setup_theme', 'freesiaempire_custom_header_setup' );