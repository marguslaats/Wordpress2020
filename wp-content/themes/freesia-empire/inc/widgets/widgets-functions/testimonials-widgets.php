<?php
/**
 *
 * @package Theme Freesia
 * @subpackage Freesia Empire
 * @since Freesia Empire 1.0
 */
/*********************** FREESIAEMPIRE TESTIMONIALS WIDGETS ****************************/
class freesiaempire_widget_testimonial extends WP_Widget {
	function __construct() {
		$widget_ops = array( 'classname' => 'widget_testimonial', 'description' => __( 'Display Testimonial on FrontPage', 'freesia-empire' ) );
		$control_ops = array( 'width' => 200, 'height' =>250 ); 
		parent::__construct( false, $name = __( 'TF: FP Testimonial', 'freesia-empire' ), $widget_ops, $control_ops);
	}
	function form($instance) {
		$instance = wp_parse_args(( array ) $instance, array('number' => '3','post_type'=> 'latest','category' => '', 'image' =>''));
		$number = absint( $instance[ 'number' ] );
		$post_type = esc_attr($instance[ 'post_type' ]);
		$category = esc_attr($instance[ 'category' ]);
		$image = esc_url( $instance[ 'image' ] );
		?>
		<p>
		<label for="<?php echo $this->get_field_id('image'); ?>">
			<?php _e( 'Upload Testimonial Background Image', 'freesia-empire' ); ?>
		</label>
			<input type="text" class="upload1" id="<?php echo $this->get_field_id( 'image' ); ?>" name="<?php echo $this->get_field_name('image'); ?>" value="<?php echo esc_url($image); ?>"/>
  <input type="button" class="button  custom_media_button"name="<?php echo $this->get_field_name('image'); ?>" id="custom_testimonial" value="<?php _e('Upload Image','freesia-empire');?>" onclick="mediaupload.uploader( '<?php echo $this->get_field_id( 'image' ); ?>' ); return false;"/>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'category' ); ?>"><?php _e( 'Select category', 'freesia-empire' ); ?>:</label>
			<?php wp_dropdown_categories( array( 'show_option_none' =>' ','name' => $this->get_field_name( 'category' ), 'selected' => $category ) ); ?>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('number'); ?>">
			<?php _e( 'Number of Testimonial:', 'freesia-empire' ); ?>
			</label>
			<input id="<?php echo $this->get_field_id('number'); ?>" name="<?php echo $this->get_field_name('number'); ?>" type="text" value="<?php echo $number; ?>" size="3" />
		</p>
	<?php }
	function update($new_instance, $old_instance) {
		$instance  = $old_instance;
		$instance[ 'number' ] = absint( $new_instance[ 'number' ] );
		$instance[ 'post_type' ] = sanitize_text_field($new_instance[ 'post_type' ]);
		$instance[ 'category' ] = sanitize_text_field($new_instance[ 'category' ]);
		$instance[ 'image' ] = sanitize_text_field($new_instance[ 'image' ]);
		return $instance;
	}

	function widget( $args, $instance ) {
		global $freesiaempire_settings;
		extract($args);
		extract($instance);
		$number = empty( $instance[ 'number' ] ) ? 3 : $instance[ 'number' ];
		$post_type = isset( $instance[ 'post_type' ] ) ? $instance[ 'post_type' ] : 'latest' ;
		$category = isset( $instance[ 'category' ] ) ? $instance[ 'category' ] : '';
		$image = isset( $instance[ 'image' ] ) ? $instance[ 'image' ] : '';
			$get_featured_posts = new WP_Query( array(
				'posts_per_page' 			=> absint($number),
				'post_type'					=> 'post',
				'category__in'				=> esc_attr($category),
				'ignore_sticky_posts' 	=> true
			) );
		echo '<!-- Testimonial Widget ============================================= -->' .$before_widget; ?>
		<div class="testimonial_bg" <?php if(!empty($image)){ ?>style="background-image:url('<?php echo esc_url($image); ?>');" <?php } ?> >
			<div class="container clearfix">
				<div class="testimonials">
					<div class="quote-wrapper freesia-animation fadeInRight">
					<?php
			 			$i=1;
			 			while( $get_featured_posts->have_posts() ):$get_featured_posts->the_post(); ?>
						<div class="quotes">
							<div class="quote">
								<?php if( has_post_thumbnail() ) {
									the_post_thumbnail();
								}
								echo $before_title . get_cat_name( $category ) . $after_title;
								the_content(); ?>
								<cite><?php the_title(); ?></cite>
							</div>
						</div><!-- end .quotes -->
					<?php endwhile; ?>
					</div> <!-- end .quote-wrapper -->
				</div> <!-- end .testimonials -->
			</div> <!-- end .container -->
		</div> <!-- end .testimonial_bg -->
		<?php 
		echo $after_widget .'<!-- end .widget_testimonial -->';
	}
}