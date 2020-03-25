<?php
/***************************** Portfolio Widget ***********************************/
class freesiaempire_portfolio_widget extends WP_Widget {
	function __construct() {
		$widget_ops  = array('classname' => 'widget_portfolio clearfix', 'description' => __('Portfolio Widget (Front Page)', 'freesia-empire'));
		$control_ops = array('width'     => 200, 'height'     => 250);
		parent::__construct(false, $name = __('TF: FP Portfolio Widget', 'freesia-empire'), $widget_ops, $control_ops);
	}
	function form($instance) {
		$instance           = wp_parse_args((array) $instance, array('number' => '6', 'title' => '', 'text' => '', 'button_text' =>'', 'button_url'=>'', 'page_id0'=>'','page_id1'=>'','page_id2'=>'','page_id3'=>'','page_id4'=>'','page_id5'=>'','page_id6'=>'','page_id7'=>''));
		$number = absint( $instance[ 'number' ] );
		$title = esc_attr($instance['title']);
		$text = esc_attr($instance['text']);
		$button_text = esc_attr($instance['button_text']);
		$button_url = esc_url($instance['button_url']);
		for ($i = 0; $i < $number; $i++) {
			$var            = 'page_id'.$i;
			$defaults[$var] = '';
		}
		$instance = wp_parse_args((array)$instance, $defaults);
		for ($i = 0; $i < $number; $i++) {
			$var = 'page_id'.$i;
			$var = absint($instance[$var]);
		} ?>
<p>
  <label for="<?php echo $this->get_field_id('number'); ?>">
  <?php _e( 'Number of Works:', 'freesia-empire' ); ?>
  </label>
  <input id="<?php echo $this->get_field_id('number'); ?>" name="<?php echo $this->get_field_name('number'); ?>" type="text" value="<?php echo $number; ?>" size="3" />
</p>
<p>
  <label for="<?php echo $this->get_field_id('title');?>">
  <?php _e('Title:', 'freesia-empire');?>
  </label>
  <input id="<?php echo $this->get_field_id('title');?>" name="<?php echo $this->get_field_name('title');?>" type="text" value="<?php echo esc_attr($title);?>" />
</p>
<?php _e('Description', 'freesia-empire');?>
<textarea class="widefat" rows="10" cols="20" id="<?php echo $this->get_field_id('text');?>" name="<?php echo $this->get_field_name('text');?>"><?php echo esc_attr($text); ?></textarea>
<p>
  <label for="<?php echo $this->get_field_id('button_text');?>">
  <?php _e('Button Text:', 'freesia-empire');?>
  </label>
  <input id="<?php echo $this->get_field_id('button_text');?>" name="<?php echo $this->get_field_name('button_text');?>" type="text" value="<?php echo esc_attr($button_text);?>" />
</p>
<p>
  <label for="<?php echo $this->get_field_id('button_url');?>">
  <?php _e('Button Url:', 'freesia-empire');?>
  </label>
  <input id="<?php echo $this->get_field_id('button_url');?>" name="<?php echo $this->get_field_name('button_url');?>" type="text" value="<?php echo esc_url($button_url);?>" />
</p>
<?php
		for ($i = 0; $i < $number; $i++) {
			?>
<p>
  <label for="<?php echo $this->get_field_id(key($defaults));?>">
  <?php _e('Page', 'freesia-empire');?>
  :</label>
  <?php wp_dropdown_pages(array('show_option_none' => ' ', 'name' => $this->get_field_name(key($defaults)), 'selected' => $instance[key($defaults)]));?>
</p>
<?php
			next($defaults);// forwards the key of $defaults array
		}
	}
	function update($new_instance, $old_instance) {
		$instance                        = $old_instance;
		$instance['number'] = absint( $new_instance['number'] );
		$instance['title'] = sanitize_text_field( $new_instance['title'] );
		$instance['text'] = sanitize_text_field( $new_instance['text'] );
		$instance['button_text'] = sanitize_text_field( $new_instance['button_text'] );
		$instance['button_url'] = esc_url_raw( $new_instance['button_url'] );
		for ($i = 0; $i < $instance['number']; $i++) {
			$var            = 'page_id'.$i;
			$instance[$var] = absint($new_instance[$var]);
		}
		return $instance;
	}

	function widget($args, $instance) {
		global $post;
		$freesiaempire_settings = freesiaempire_get_theme_options();
		extract($args);
		extract($instance);
		$number = empty( $instance['number'] ) ? 7 : $instance['number'];
		$page_array = array();
		$title               = isset($instance['title'])?$instance['title']:'';
		$text                = apply_filters('widget_text', empty($instance['text'])?'':$instance['text'], $instance);
		$button_text               = isset($instance['button_text'])?$instance['button_text']:'';
		$button_url               = isset($instance['button_url'])?$instance['button_url']:'';
		$page_array         = array();
		for ($i = 0; $i < $number; $i++) {
			$var     = 'page_id'.$i;
			$page_id = isset($instance[$var])?$instance[$var]:'';
			if (!empty($page_id)) {
				array_push($page_array, $page_id);
			}
			// Push the page id in the array
		}
		$get_featured_pages = new WP_Query(array(
				'posts_per_page' => -1,
				'post_type'      => array('page'),
				'post__in'       => $page_array,
				'orderby'        => 'post__in'
			));
		echo '<!-- Portfolio Widget ============================================= -->' .$before_widget;
		echo '<div class="portfolio-container clearfix">'; ?>
<div class="four-column-full-width freesia-animation zoomIn" data-wow-delay="0.3s">
	<?php if (!empty($title)) { echo $before_title . esc_attr($title) . $after_title; }
			if(!empty($text)){ ?>
	<p class="widget-highlighted-sub-title wow fadeInUp"><?php echo esc_attr($text); ?></p>
	<?php }
	if(!empty($button_text)){ ?>
	<a title="<?php echo esc_attr($button_text);?>" href="<?php echo esc_url($button_url);?>" class="btn-default light-color"><?php echo esc_attr($button_text);?></a>
	<?php } ?>
</div>
	<?php
	while ($get_featured_pages->have_posts()):$get_featured_pages->the_post(); ?>
		<div class="four-column-full-width freesia-animation zoomIn">
		<?php $page_title = get_the_title();
				if (has_post_thumbnail()) { ?>
 <?php echo get_the_post_thumbnail($post->ID, 'post-thumbnails');
				} ?>
  <div class="portfolio-content">
    <h3><a href="<?php the_permalink();?>" title="<?php echo esc_attr($page_title); ?>"><?php echo esc_attr($page_title); ?></a></h3>
    <?php if(get_the_excerpt() != ''): ?>
    <p>
    <?php if($freesiaempire_settings['freesiaempire_crop_excerpt_length'] ==1){ 
    	if(strlen(get_the_excerpt()) >70){
			$excerpt_length = substr(get_the_excerpt(), 0 , 70);
			echo wp_strip_all_tags($excerpt_length) .'&hellip;';
		}else{
			echo wp_strip_all_tags(get_the_excerpt());
		}
	}else{?>
      <?php the_excerpt();
     } ?>
    </p>
    <?php endif; ?>
    <?php $freesiaempire_tag_text = $freesiaempire_settings['freesiaempire_tag_text'];
					$excerpt = get_the_excerpt();
					$content = get_the_content();
					if(strlen($excerpt) < strlen($content) || strlen($excerpt) > 130){ ?>
    <p><a class="more-link" title="<?php the_title_attribute();?>" href="<?php the_permalink();?>">
      <?php
							if($freesiaempire_tag_text == 'Read More' || $freesiaempire_tag_text == ''):
								_e('Read More', 'freesia-empire');
							else:
								echo esc_attr($freesiaempire_tag_text);
							endif;?>
      </a></p>
    <?php } ?>
  </div>
  <!-- end .portfolio-content -->
</div>
<!-- end .four-column-full-width -->
<?php
endwhile;
		// Reset Post Data
		wp_reset_query();
		echo '</div> <!-- end .container -->';
		echo $after_widget .'<!-- end .widget_portfolio -->';
	}
}