<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package Theme Freesia
 * @subpackage Freesia Empire
 * @since Freesia Empire 1.0
 */
/*********** FREESIAEMPIRE ADD THEME SUPPORT FOR INFINITE SCROLL **************************/
function freesiaempire_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'freesiaempire_jetpack_setup' );