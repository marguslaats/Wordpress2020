<?php
/**
 * Theme Customizer Functions
 *
 * @package Theme Freesia
 * @subpackage Freesia Empire
 * @since Freesia Empire 1.0
 */
if(!function_exists('freesia_business_customize_register_wordpress_default') && !function_exists('freesia_corporate_customize_register_wordpress_default') ){
	/******************** FREESIAEMPIRE CUSTOMIZE REGISTER *********************************************/
	add_action( 'customize_register', 'freesiaempire_customize_register_wordpress_default' );
	function freesiaempire_customize_register_wordpress_default( $wp_customize ) {
		$wp_customize->add_panel( 'freesiaempire_wordpress_default_panel', array(
			'priority' => 5,
			'capability' => 'edit_theme_options',
			'theme_supports' => '',
			'title' => __( 'Freesia Empire WordPress Settings', 'freesia-empire' ),
			'description' => '',
		) );
	}
	add_action( 'customize_register', 'freesiaempire_customize_register_options', 20 );
	function freesiaempire_customize_register_options( $wp_customize ) {
		$wp_customize->add_panel( 'freesiaempire_options_panel', array(
			'priority' => 6,
			'capability' => 'edit_theme_options',
			'theme_supports' => '',
			'title' => __( 'Freesia Empire Theme Options', 'freesia-empire' ),
			'description' => '',
		) );
	}
	add_action( 'customize_register', 'freesiaempire_customize_register_featuredcontent' );
	function freesiaempire_customize_register_featuredcontent( $wp_customize ) {
		$wp_customize->add_panel( 'freesiaempire_featuredcontent_panel', array(
			'priority' => 7,
			'capability' => 'edit_theme_options',
			'theme_supports' => '',
			'title' => __( 'Freesia Empire Slider Options', 'freesia-empire' ),
			'description' => '',
		) );
	}
	add_action( 'customize_register', 'freesiaempire_customize_register_widgets' );
	function freesiaempire_customize_register_widgets( $wp_customize ) {
		$wp_customize->add_panel( 'widgets', array(
			'priority' => 8,
			'capability' => 'edit_theme_options',
			'theme_supports' => '',
			'title' => __( 'Freesia Empire Widgets', 'freesia-empire' ),
			'description' => '',
		) );
	}
}