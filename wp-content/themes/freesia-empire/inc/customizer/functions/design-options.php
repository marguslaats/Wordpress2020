<?php
/**
 * Theme Customizer Functions
 *
 * @package Theme Freesia
 * @subpackage Freesia Empire
 * @since Freesia Empire 1.0
 */
/******************** FREESIAEMPIRE LAYOUT OPTIONS ******************************************/
	$wp_customize->add_section('freesiaempire_layout_options', array(
		'title' => __('Layout Options', 'freesia-empire'),
		'priority' => 102,
		'panel' => 'freesiaempire_options_panel'
	));
	$wp_customize->add_setting('freesiaempire_theme_options[freesiaempire_responsive]', array(
		'default' => 'on',
		'sanitize_callback' => 'freesiaempire_sanitize_select',
		'type' => 'option',
	));
	$wp_customize->add_control('freesiaempire_theme_options[freesiaempire_responsive]', array(
		'priority' =>10,
		'label' => __('Responsive Layout', 'freesia-empire'),
		'section' => 'freesiaempire_layout_options',
		'settings' => 'freesiaempire_theme_options[freesiaempire_responsive]',
		'type' => 'select',
		'checked' => 'checked',
		'choices' => array(
			'on' => __('ON ','freesia-empire'),
			'off' => __('OFF','freesia-empire'),
		),
	));
	$wp_customize->add_setting('freesiaempire_theme_options[freesiaempire_animate_css]', array(
		'default' => 'on',
		'sanitize_callback' => 'freesiaempire_sanitize_select',
		'type' => 'option',
	));
	$wp_customize->add_control('freesiaempire_theme_options[freesiaempire_animate_css]', array(
		'priority' =>15,
		'label' => __('Animation Options', 'freesia-empire'),
		'section' => 'freesiaempire_layout_options',
		'settings' => 'freesiaempire_theme_options[freesiaempire_animate_css]',
		'type' => 'select',
		'checked' => 'checked',
		'choices' => array(
			'on' => __('ON ','freesia-empire'),
			'off' => __('OFF','freesia-empire'),
		),
	));
	$wp_customize->add_setting('freesiaempire_theme_options[freesiaempire_sidebar_layout_options]', array(
		'default' => 'right',
		'sanitize_callback' => 'freesiaempire_sanitize_select',
		'type' => 'option',
	));
	$wp_customize->add_control('freesiaempire_theme_options[freesiaempire_sidebar_layout_options]', array(
		'priority' =>20,
		'label' => __('Sidebar Layout Options', 'freesia-empire'),
		'section' => 'freesiaempire_layout_options',
		'settings' => 'freesiaempire_theme_options[freesiaempire_sidebar_layout_options]',
		'type' => 'select',
		'checked' => 'checked',
		'choices' => array(
			'right' => __('Right Sidebar','freesia-empire'),
			'left' => __('Left Sidebar','freesia-empire'),
			'nosidebar' => __('No Sidebar','freesia-empire'),
			'fullwidth' => __('Full Width','freesia-empire'),
		),
	));
	$wp_customize->add_setting('freesiaempire_theme_options[freesiaempire_blog_layout_temp]', array(
		'default' => 'large_image_display',
		'sanitize_callback' => 'freesiaempire_sanitize_select',
		'type' => 'option',
	));
	$wp_customize->add_control('freesiaempire_theme_options[freesiaempire_blog_layout_temp]', array(
		'priority' =>30,
		'label' => __('Blog Image Display Layout', 'freesia-empire'),
		'section'    => 'freesiaempire_layout_options',
		'settings'	=> 'freesiaempire_theme_options[freesiaempire_blog_layout_temp]',
		'type' => 'select',
		'checked' => 'checked',
		'choices' => array(
			'large_image_display' => __('Blog large image display','freesia-empire'),
			'medium_image_display' => __('Blog medium image display','freesia-empire'),
		),
	));
	$wp_customize->add_setting( 'freesiaempire_theme_options[freesiaempire_entry_format_blog]', array(
		'default' => 'show',
		'sanitize_callback' => 'freesiaempire_sanitize_select',
		'type' => 'option',
	));
	$wp_customize->add_control( 'freesiaempire_theme_options[freesiaempire_entry_format_blog]', array(
		'priority'=>40,
		'label' => __('Disable Entry Format from Blog Page', 'freesia-empire'),
		'section' => 'freesiaempire_layout_options',
		'settings' => 'freesiaempire_theme_options[freesiaempire_entry_format_blog]',
		'type' => 'select',
		'choices' => array(
		'show' => __('Display Entry Format','freesia-empire'),
		'hide' => __('Hide Entry Format','freesia-empire'),
		'show-button' => __('Show Button Only','freesia-empire'),
		'hide-button' => __('Hide Button Only','freesia-empire'),
	),
	));
	$wp_customize->add_setting( 'freesiaempire_theme_options[freesiaempire_entry_meta_blog]', array(
		'default' => 'show-meta',
		'sanitize_callback' => 'freesiaempire_sanitize_select',
		'type' => 'option',
	));
	$wp_customize->add_control( 'freesiaempire_theme_options[freesiaempire_entry_meta_blog]', array(
		'priority'=>45,
		'label' => __('Disable Entry Meta from Blog Page', 'freesia-empire'),
		'section' => 'freesiaempire_layout_options',
		'settings' => 'freesiaempire_theme_options[freesiaempire_entry_meta_blog]',
		'type' => 'select',
		'choices' => array(
		'show-meta' => __('Display Entry Meta','freesia-empire'),
		'hide-meta' => __('Hide Entry Meta','freesia-empire'),
	),
	));
	$wp_customize->add_setting('freesiaempire_theme_options[freesiaempire_design_layout]', array(
		'default'        => 'wide-layout',
		'sanitize_callback' => 'freesiaempire_sanitize_select',
		'type'                  => 'option',
	));
	$wp_customize->add_control('freesiaempire_theme_options[freesiaempire_design_layout]', array(
	'priority'  =>50,
	'label'      => __('Design Layout', 'freesia-empire'),
	'section'    => 'freesiaempire_layout_options',
	'settings'  => 'freesiaempire_theme_options[freesiaempire_design_layout]',
	'type'       => 'select',
	'checked'   => 'checked',
	'choices'    => array(
		'wide-layout' => __('Full Width Layout','freesia-empire'),
		'boxed-layout' => __('Boxed Layout','freesia-empire'),
		'small-boxed-layout' => __('Small Boxed Layout','freesia-empire'),
	),
	));
	$wp_customize->add_setting('freesiaempire_theme_options[freesiaempire_blog_header_display]', array(
		'default'        => 'show',
		'sanitize_callback' => 'freesiaempire_sanitize_select',
		'type'                  => 'option',
	));
	$wp_customize->add_control('freesiaempire_theme_options[freesiaempire_blog_header_display]', array(
	'priority'  =>50,
	'label'      => __('Design Layout', 'freesia-empire'),
	'section'    => 'freesiaempire_layout_options',
	'settings'  => 'freesiaempire_theme_options[freesiaempire_blog_header_display]',
	'type'       => 'select',
	'checked'   => 'checked',
	'choices'    => array(
		'show' => __('Show Blog Header','freesia-empire'),
		'hide' => __('Hide Blog Header','freesia-empire'),
	),
	));