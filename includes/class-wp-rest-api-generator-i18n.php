<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://tutsocean.com/about-me
 * @since      1.0.0
 *
 * @package    Wp_Rest_Api_Generator
 * @subpackage Wp_Rest_Api_Generator/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Wp_Rest_Api_Generator
 * @subpackage Wp_Rest_Api_Generator/includes
 * @author     Deepak anand <anand.deepak9988@gmail.com>
 */
class Wp_Rest_Api_Generator_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'wp-rest-api-generator',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
