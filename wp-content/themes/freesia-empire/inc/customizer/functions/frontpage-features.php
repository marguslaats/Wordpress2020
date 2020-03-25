<?php
/**
 * Theme Customizer Functions
 *
 * @package Theme Freesia
 * @subpackage Freesia Empire
 * @since Freesia Empire 1.0
 */
/******************** FREESIAEMPIRE FRONTPAGE  *********************************************/
$freesiaempire_settings = freesiaempire_get_theme_options();
$wp_customize->add_section( 'freesiaempire_frontpage_features', array(
	'title' => __('Display FrontPage Features','freesia-empire'),
	'priority' => 400,
	'panel' =>'freesiaempire_options_panel'
));
$wp_customize->add_setting( 'freesiaempire_theme_options[freesiaempire_disable_features]', array(
	'default' => 0,
	'sanitize_callback' => 'freesiaempire_checkbox_integer',
	'type' => 'option',
));
$wp_customize->add_control( 'freesiaempire_theme_options[freesiaempire_disable_features]', array(
	'priority' => 405,
	'label' => __('Disable in Front Page', 'freesia-empire'),
	'section' => 'freesiaempire_frontpage_features',
	'settings' => 'freesiaempire_theme_options[freesiaempire_disable_features]',
	'type' => 'checkbox',
));
$wp_customize->add_setting( 'freesiaempire_theme_options[freesiaempire_features_title]', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_textarea_field',
	'type' => 'option',
	'capability' => 'manage_options'
	)
);
$wp_customize->add_control( 'freesiaempire_theme_options[freesiaempire_features_title]', array(
	'priority' => 412,
	'label' => __( 'Title', 'freesia-empire' ),
	'section' => 'freesiaempire_frontpage_features',
	'settings' => 'freesiaempire_theme_options[freesiaempire_features_title]',
	'type' => 'text',
	)
);
$wp_customize->add_setting( 'freesiaempire_theme_options[freesiaempire_features_description]', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_textarea_field',
	'type' => 'option',
	'capability' => 'manage_options'
	)
);
$wp_customize->add_control( 'freesiaempire_theme_options[freesiaempire_features_description]', array(
	'priority' => 415,
	'label' => __( 'Description', 'freesia-empire' ),
	'section' => 'freesiaempire_frontpage_features',
	'settings' => 'freesiaempire_theme_options[freesiaempire_features_description]',
	'type' => 'textarea',
	)
);
for ( $i=1; $i <= $freesiaempire_settings['freesiaempire_total_features'] ; $i++ ) {
	$wp_customize->add_setting('freesiaempire_theme_options[freesiaempire_frontpage_features_'. $i .']', array(
		'default' =>'',
		'sanitize_callback' =>'freesiaempire_sanitize_page',
		'type' => 'option',
		'capability' => 'manage_options'
	));
	$wp_customize->add_control( 'freesiaempire_theme_options[freesiaempire_frontpage_features_'. $i .']', array(
		'priority' => 420 . $i,
		'label' => __(' Feature #', 'freesia-empire') . ' ' . $i ,
		'section' => 'freesiaempire_frontpage_features',
		'settings' => 'freesiaempire_theme_options[freesiaempire_frontpage_features_'. $i .']',
		'type' => 'dropdown-pages',
	));
}