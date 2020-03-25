<?php
/**
 * Theme Customizer Functions
 *
 * @package Theme Freesia
 * @subpackage Freesia Empire
 * @since Freesia Empire 1.0
 */
/******************** FREESIAEMPIRE SLIDER SETTINGS ******************************************/
$freesiaempire_settings = freesiaempire_get_theme_options();
$wp_customize->add_section( 'featured_content', array(
	'title' => __( 'Slider Settings', 'freesia-empire' ),
	'priority' => 140,
	'panel' => 'freesiaempire_featuredcontent_panel'
));
$wp_customize->add_setting( 'freesiaempire_theme_options[freesiaempire_enable_slider]', array(
	'default' => 'frontpage',
	'sanitize_callback' => 'freesiaempire_sanitize_select',
	'type' => 'option',
));
$wp_customize->add_control( 'freesiaempire_theme_options[freesiaempire_enable_slider]', array(
	'priority'=>12,
	'label' => __('Enable Slider', 'freesia-empire'),
	'section' => 'featured_content',
	'settings' => 'freesiaempire_theme_options[freesiaempire_enable_slider]',
	'type' => 'select',
	'checked' => 'checked',
	'choices' => array(
	'frontpage' => __('Front Page','freesia-empire'),
	'enitresite' => __('Entire Site','freesia-empire'),
	'disable' => __('Disable Slider','freesia-empire'),
),
));
$wp_customize->add_section( 'freesiaempire_page_post_options', array(
	'title' => __('Display Page Slider','freesia-empire'),
	'priority' => 200,
	'panel' =>'freesiaempire_featuredcontent_panel'
));
for ( $i=1; $i <= $freesiaempire_settings['freesiaempire_slider_no'] ; $i++ ) {
	$wp_customize->add_setting('freesiaempire_theme_options[freesiaempire_featured_page_slider_'. $i .']', array(
		'default' =>'',
		'sanitize_callback' =>'freesiaempire_sanitize_page',
		'type' => 'option',
		'capability' => 'manage_options'
	));
	$wp_customize->add_control( 'freesiaempire_theme_options[freesiaempire_featured_page_slider_'. $i .']', array(
		'priority' => 220 . $i,
		'label' => __(' Page Slider #', 'freesia-empire') . ' ' . $i ,
		'section' => 'freesiaempire_page_post_options',
		'settings' => 'freesiaempire_theme_options[freesiaempire_featured_page_slider_'. $i .']',
		'type' => 'dropdown-pages',
	));
}