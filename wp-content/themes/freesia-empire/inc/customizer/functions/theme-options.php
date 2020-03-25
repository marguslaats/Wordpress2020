<?php
/**
 * Theme Customizer Functions
 *
 * @package Theme Freesia
 * @subpackage Freesia Empire
 * @since Freesia Empire 1.0
 */
/********************  FREESIAEMPIRE THEME OPTIONS ******************************************/
	$wp_customize->add_section('title_tagline', array(
	'title' => __('Site Title & Logo Options', 'freesia-empire'),
	'priority' => 10,
	'panel' => 'freesiaempire_wordpress_default_panel'
	));
	$wp_customize->add_setting( 'freesiaempire_theme_options[freesiaempire-img-upload-header-logo]',array(
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'esc_url_raw',
		'type' => 'option',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'freesiaempire_theme_options[freesiaempire-img-upload-header-logo]', array(
		'label' => __('Site Logo','freesia-empire'),
		'priority'	=> 101,
		'section' => 'title_tagline',
		'settings' => 'freesiaempire_theme_options[freesiaempire-img-upload-header-logo]'
		)
	));
	$wp_customize->add_setting('freesiaempire_theme_options[freesiaempire_header_display]', array(
		'capability' => 'edit_theme_options',
		'default' => 'header_text',
		'sanitize_callback' => 'freesiaempire_sanitize_select',
		'type' => 'option',
	));
	$wp_customize->add_control('freesiaempire_theme_options[freesiaempire_header_display]', array(
		'label' => __('Site Logo/ Text Options', 'freesia-empire'),
		'priority' => 102,
		'section' => 'title_tagline',
		'settings' => 'freesiaempire_theme_options[freesiaempire_header_display]',
		'type' => 'select',
		'checked' => 'checked',
			'choices' => array(
			'header_text' => __('Display Site Title Only','freesia-empire'),
			'header_logo' => __('Display Site Logo Only','freesia-empire'),
			'show_both' => __('Show Both','freesia-empire'),
			'disable_both' => __('Disable Both','freesia-empire'),
		),
	));
	$wp_customize->add_section('header_image', array(
	'title' => __('Header Image', 'freesia-empire'),
	'priority' => 20,
	'panel' => 'freesiaempire_wordpress_default_panel'
	));
	$wp_customize->add_setting('freesiaempire_theme_options[freesiaempire_display_header_image]', array(
		'capability' => 'edit_theme_options',
		'default' => 'top',
		'sanitize_callback' => 'freesiaempire_sanitize_select',
		'type' => 'option',
	));
	$wp_customize->add_control('freesiaempire_theme_options[freesiaempire_display_header_image]', array(
		'label' => __('Display Header Image', 'freesia-empire'),
		'priority' => 5,
		'section' => 'header_image',
		'settings' => 'freesiaempire_theme_options[freesiaempire_display_header_image]',
		'type' => 'select',
		'checked' => 'checked',
			'choices' => array(
			'below' => __('Display below Site Title','freesia-empire'),
			'top' => __('Display above Site Title','freesia-empire'),
		),
	));
	$wp_customize->add_setting('freesiaempire_theme_options[freesiaempire_custom_header_options]', array(
		'default' => 'homepage',
		'sanitize_callback' => 'freesiaempire_sanitize_select',
		'type' => 'option',
		'capability' => 'manage_options'
	));
	$wp_customize->add_control('freesiaempire_theme_options[freesiaempire_custom_header_options]', array(
		'label' => __('Enable Custom Header Image', 'freesia-empire'),
		'section' => 'header_image',
		'type' => 'select',
		'settings' => 'freesiaempire_theme_options[freesiaempire_custom_header_options]',
		'checked' => 'checked',
		'choices' => array(
		'homepage' => __('Front Page','freesia-empire'),
		'enitre_site' => __('Entire Site','freesia-empire'),
		'header_disable' => __('Disable','freesia-empire'),
	),
	));
	$wp_customize->add_section('freesiaempire_custom_header', array(
		'title' => __('Freesia Options', 'freesia-empire'),
		'priority' => 503,
		'panel' => 'freesiaempire_options_panel'
	));
	$wp_customize->add_setting( 'freesiaempire_theme_options[freesiaempire_search_custom_header]', array(
		'default' => 0,
		'sanitize_callback' => 'freesiaempire_checkbox_integer',
		'type' => 'option',
	));
	$wp_customize->add_control( 'freesiaempire_theme_options[freesiaempire_search_custom_header]', array(
		'priority'=>20,
		'label' => __('Disable Search Form', 'freesia-empire'),
		'section' => 'freesiaempire_custom_header',
		'settings' => 'freesiaempire_theme_options[freesiaempire_search_custom_header]',
		'type' => 'checkbox',
	));
	$wp_customize->add_setting( 'freesiaempire_theme_options[freesiaempire_stick_menu]', array(
		'default' => 0,
		'sanitize_callback' => 'freesiaempire_checkbox_integer',
		'type' => 'option',
	));
	$wp_customize->add_control( 'freesiaempire_theme_options[freesiaempire_stick_menu]', array(
		'priority'=>30,
		'label' => __('Disable Stick Menu', 'freesia-empire'),
		'section' => 'freesiaempire_custom_header',
		'settings' => 'freesiaempire_theme_options[freesiaempire_stick_menu]',
		'type' => 'checkbox',
	));
	$wp_customize->add_setting( 'freesiaempire_theme_options[freesiaempire_scroll]', array(
		'default' => 0,
		'sanitize_callback' => 'freesiaempire_checkbox_integer',
		'type' => 'option',
	));
	$wp_customize->add_control( 'freesiaempire_theme_options[freesiaempire_scroll]', array(
		'priority'=>40,
		'label' => __('Disable Goto Top', 'freesia-empire'),
		'section' => 'freesiaempire_custom_header',
		'settings' => 'freesiaempire_theme_options[freesiaempire_scroll]',
		'type' => 'checkbox',
	));
	$wp_customize->add_setting( 'freesiaempire_theme_options[freesiaempire_top_social_icons]', array(
		'default' => 0,
		'sanitize_callback' => 'freesiaempire_checkbox_integer',
		'type' => 'option',
	));
	$wp_customize->add_control( 'freesiaempire_theme_options[freesiaempire_top_social_icons]', array(
		'priority'=>43,
		'label' => __('Disable Top Social Icons', 'freesia-empire'),
		'section' => 'freesiaempire_custom_header',
		'settings' => 'freesiaempire_theme_options[freesiaempire_top_social_icons]',
		'type' => 'checkbox',
	));
	$wp_customize->add_setting( 'freesiaempire_theme_options[freesiaempire_buttom_social_icons]', array(
		'default' => 0,
		'sanitize_callback' => 'freesiaempire_checkbox_integer',
		'type' => 'option',
	));
	$wp_customize->add_control( 'freesiaempire_theme_options[freesiaempire_buttom_social_icons]', array(
		'priority'=>46,
		'label' => __('Disable Buttom Social Icons', 'freesia-empire'),
		'section' => 'freesiaempire_custom_header',
		'settings' => 'freesiaempire_theme_options[freesiaempire_buttom_social_icons]',
		'type' => 'checkbox',
	));
	$wp_customize->add_setting( 'freesiaempire_theme_options[freesiaempire_display_page_featured_image]', array(
		'default' => 0,
		'sanitize_callback' => 'freesiaempire_checkbox_integer',
		'type' => 'option',
	));
	$wp_customize->add_control( 'freesiaempire_theme_options[freesiaempire_display_page_featured_image]', array(
		'priority'=>48,
		'label' => __('Display Page Featured Image', 'freesia-empire'),
		'section' => 'freesiaempire_custom_header',
		'settings' => 'freesiaempire_theme_options[freesiaempire_display_page_featured_image]',
		'type' => 'checkbox',
	));
	$wp_customize->add_setting( 'freesiaempire_theme_options[freesiaempire_crop_excerpt_length]', array(
		'default' => 1,
		'sanitize_callback' => 'freesiaempire_checkbox_integer',
		'type' => 'option',
	));
	$wp_customize->add_control( 'freesiaempire_theme_options[freesiaempire_crop_excerpt_length]', array(
		'priority'=>49,
		'label' => __('Crop Excerpt length by text', 'freesia-empire'),
		'section' => 'freesiaempire_custom_header',
		'settings' => 'freesiaempire_theme_options[freesiaempire_crop_excerpt_length]',
		'type' => 'checkbox',
	));
	$wp_customize->add_setting( 'freesiaempire_theme_options[freesiaempire_reset_all]', array(
		'default' => 0,
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'freesiaempire_reset_alls',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control( 'freesiaempire_theme_options[freesiaempire_reset_all]', array(
		'priority'=>50,
		'label' => __('Reset all default settings. (Refresh it to view the effect)', 'freesia-empire'),
		'section' => 'freesiaempire_custom_header',
		'settings' => 'freesiaempire_theme_options[freesiaempire_reset_all]',
		'type' => 'checkbox',
	));
	$wp_customize->add_section( 'freesiaempire_custom_css', array(
		'title' => __('Enter your custom CSS', 'freesia-empire'),
		'priority' => 507,
		'panel' => 'freesiaempire_options_panel'
	));
	$wp_customize->add_setting( 'freesiaempire_theme_options[freesiaempire_custom_css]', array(
		'default' => '',
		'sanitize_callback' => 'freesiaempire_sanitize_custom_css',
		'type' => 'option',
		)
	);
	$wp_customize->add_control( 'freesiaempire_theme_options[freesiaempire_custom_css]', array(
		'label' => __('Custom CSS','freesia-empire'),
		'section' => 'freesiaempire_custom_css',
		'settings' => 'freesiaempire_theme_options[freesiaempire_custom_css]',
		'type' => 'textarea'
		)
	);
/********************** FREESIAEMPIRE WORDPRESS DEFAULT PANEL ***********************************/
	$wp_customize->add_section('colors', array(
	'title' => __('Colors', 'freesia-empire'),
	'priority' => 30,
	'panel' => 'freesiaempire_wordpress_default_panel'
	));
	$wp_customize->add_section('background_image', array(
	'title' => __('Background Image', 'freesia-empire'),
	'priority' => 40,
	'panel' => 'freesiaempire_wordpress_default_panel'
	));
	$wp_customize->add_section('nav', array(
	'title' => __('Navigation', 'freesia-empire'),
	'priority' => 50,
	'panel' => 'freesiaempire_wordpress_default_panel'
	));
	$wp_customize->add_section('static_front_page', array(
	'title' => __('Static Front Page', 'freesia-empire'),
	'priority' => 60,
	'panel' => 'freesiaempire_wordpress_default_panel'
	));