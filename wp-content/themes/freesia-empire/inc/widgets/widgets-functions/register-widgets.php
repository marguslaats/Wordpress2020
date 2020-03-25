<?php
/**
 *
 * @package Theme Freesia
 * @subpackage Freesia Empire
 * @since Freesia Empire 1.0
 */
/**************** FREESIAEMPIRE REGISTER WIDGETS ***************************************/
add_action('widgets_init', 'freesiaempire_widgets_init');
function freesiaempire_widgets_init() {
	register_widget( "freesiaempire_contact_widgets" );
	register_widget("freesiaempire_post_widget");
	register_widget("freesiaempire_widget_testimonial" );
	register_widget("freesiaempire_portfolio_widget");

	register_sidebar(array(
			'name' => __('Main Sidebar', 'freesia-empire'),
			'id' => 'freesiaempire_main_sidebar',
			'description' => __('Shows widgets at Main Sidebar.', 'freesia-empire'),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>',
		));
	register_sidebar(array(
			'name' => __('Display Contact Info at Header ', 'freesia-empire'),
			'id' => 'freesiaempire_header_info',
			'description' => __('Shows widgets on all page.', 'freesia-empire'),
			'before_widget' => '<div id="%1$s" class="info clearfix">',
			'after_widget' => '</div>',
		));

	register_sidebar(array(
			'name' => __('Front Page Section', 'freesia-empire'),
			'id' => 'freesiaempire_corporate_page_sidebar',
			'description' => __('Shows widgets on Front Page. You may use some of this widgets: TF: Featured Recent Work, TF: Testimonial, TF: Slogan', 'freesia-empire'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget' => '</section>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>',
		));
	register_sidebar(array(
			'name' => __('Contact Page Sidebar', 'freesia-empire'),
			'id' => 'freesiaempire_contact_page_sidebar',
			'description' => __('Shows widgets on Contact Page Template.', 'freesia-empire'),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		));
	register_sidebar(array(
			'name' => __('Shortcode For Contact Page', 'freesia-empire'),
			'id' => 'freesiaempire_form_for_contact_page',
			'description' => __('Add Contact Form 7 Shortcode using text widgets Ex: [contact-form-7 id="137" title="Contact form 1"]', 'freesia-empire'),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>',
		));
	global $freesiaempire_settings;
	$freesiaempire_settings = wp_parse_args( get_option( 'freesiaempire_theme_options', array() ), freesiaempire_get_option_defaults_values() );
	for($i =1; $i<= $freesiaempire_settings['freesiaempire_footer_column_section']; $i++){
	register_sidebar(array(
			'name' => __('Footer Column ', 'freesia-empire') . $i,
			'id' => 'freesiaempire_footer_'.$i,
			'description' => __('Shows widgets at Footer Column ', 'freesia-empire').$i,
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		));
	}
	register_sidebar(array(
			'name' => __('WooCommerce Sidebar', 'freesia-empire'),
			'id' => 'freesiaempire_woocommerce_sidebar',
			'description' => __('Add WooCommerce Widgets Only', 'freesia-empire'),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>',
		));
}