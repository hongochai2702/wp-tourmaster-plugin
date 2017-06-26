<?php
/*
Plugin Name: Piklist Tour
Plugin URI: http://piklist.com
Description: Creates a Demo post type, Taxonomy, Settings Page, User fields, Dashbaord widget, Help tabs and Widget, with Field Examples.
Version: 0.3
Author: Piklist
Plugin Type: Piklist
Author URI: http://piklist.com/
Text Domain: piklist-tour
Domain Path: /languages
*/

if (!defined('ABSPATH')) exit;

// define necessary variable for the site.
define('TOURMASTER_URL', plugins_url('', __FILE__));
define('TOURMASTER_LOCAL', dirname(__FILE__));

define('TOURMASTER_ASSETS_URL', TOURMASTER_URL . '/assets');
define('TOURMASTER_AJAX_URL', admin_url('admin-ajax.php'));
define('TOURMASTER_INCLUDE_LOCAL', TOURMASTER_LOCAL . '/includes');
define('TOURMASTER_EXT_LOCAL', TOURMASTER_LOCAL . '/extensions');
define('TOURMASTER_ASSEST_LOCAL', TOURMASTER_LOCAL . '/assests');

// add activation hook
register_activation_hook(__FILE__, 'tourmaster_plugin_activation');
register_deactivation_hook(__FILE__, 'tourmaster_plugin_deactivation');

// load text domain for localization
add_action('plugins_loaded', 'tourmaster_load_textdomain');
if( !function_exists('tourmaster_load_textdomain') ){
	function tourmaster_load_textdomain() {
	  load_plugin_textdomain('tourmaster', false, dirname( plugin_basename( __FILE__ ) ) . '/languages'); 
	}
}
global $tourSettings;
$tourSettings = get_option( 'tour_settings', '' );

// Load Class.
require_once( TOURMASTER_INCLUDE_LOCAL . '/init.php' );

// Require Extensions Plugins.
require_once ( TOURMASTER_EXT_LOCAL . '/menu-icons/menu-icons.php' );

add_action( 'wp_enqueue_scripts', 'tourmaster_enqueue_script' );
if( !function_exists('tourmaster_enqueue_script') ){
	function tourmaster_enqueue_script(){
		wp_enqueue_style('tourmaster-style', TOURMASTER_ASSETS_URL . '/css/front.css');
		/*tourmaster_enqueue_icon();

		wp_enqueue_script('jquery-ui-core');
		wp_enqueue_script('jquery-ui-datepicker');

		wp_enqueue_style('tourmaster-style', TOURMASTER_URL . '/tourmaster.css');
		wp_enqueue_style('tourmaster-custom-style', tourmaster_get_style_custom());
		
		wp_enqueue_script('tourmaster-script', TOURMASTER_URL . '/tourmaster.js', array('jquery'), false, true);*/

		// for localization of the datepicker
		// ref : https://gist.github.com/clubduece/4053820
		global $wp_locale;
		$aryArgs = array(
			'closeText'         => esc_html__('Done', 'tourmaster'),
			'currentText'       => esc_html__('Today', 'tourmaster'),
			'monthNames'        => tourmaster_strip_array_indices($wp_locale->month),
			'monthNamesShort'   => tourmaster_strip_array_indices($wp_locale->month_abbrev),
			'dayNames'          => tourmaster_strip_array_indices($wp_locale->weekday),
			'dayNamesShort'     => tourmaster_strip_array_indices($wp_locale->weekday_abbrev),
			'dayNamesMin'       => tourmaster_strip_array_indices($wp_locale->weekday_initial),
			'firstDay'          => get_option('start_of_week')
		);
		wp_localize_script( 'tourmaster-script', 'TMi18n', $aryArgs );
	}
}
if( !function_exists('tourmaster_strip_array_indices') ){
	function tourmaster_strip_array_indices( $arrayToStrip ){
		$newArray = array();
		foreach( $arrayToStrip as $objArrayItem){
			$newArray[] =  $objArrayItem;
		}

		return $newArray;
	}
}	

// add tourmaster to body class
add_filter('body_class', 'tourmaster_body_class');
if( !function_exists('tourmaster_body_class') ){
	function tourmaster_body_class( $classes ){
		$classes[] = 'tourmaster-body';

		return $classes;
	}
}

// Set Large Image Sizes
add_image_size( 'tour-archive-medium', 216, 185, true );