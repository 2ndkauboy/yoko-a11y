<?php
/**
 * Remove Yoko A11y
 *
 * @package     YokoA11y
 * @author      Bernhard Kau
 * @license     GPLv3
 *
 * @wordpress-plugin
 * Plugin Name: Yoko A11y
 * Plugin URI: https://kau-boys.de
 * Description: Helper plugin to improve the accessibility of the Yoko theme.
 * Version: 1.0.0
 * Author: Bernhard Kau
 * Author URI: https://kau-boys.de
 * License: GPLv3
 * License URI: http://www.gnu.org/licenses/gpl-3.0.txt
 */

/**
 * Enqueue the plugins styles.
 */
function yoko_a11y_enqueue_styles() {
	wp_enqueue_style( 'yoko-a11y', plugins_url( 'css/a11y.css', __FILE__ ), array(), '1.0' );
}
add_action( 'wp_enqueue_scripts', 'yoko_a11y_enqueue_styles', 99 );

/**
 * Enqueue the plugins scripts
 */
function yoko_a11y_enqueue_footer_scripts() {
	wp_enqueue_script( 'yoko-a11y', plugins_url( 'js/navigation.js', __FILE__ ), array(), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'yoko_a11y_enqueue_footer_scripts', 9 );
