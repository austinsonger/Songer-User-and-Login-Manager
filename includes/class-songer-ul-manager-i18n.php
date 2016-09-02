<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://austinvernsonger.github.io
 * @since      1.0.0
 *
 * @package    Songer_Ul_Manager
 * @subpackage Songer_Ul_Manager/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Songer_Ul_Manager
 * @subpackage Songer_Ul_Manager/includes
 * @author     Austin Vern Songer <austinvernsonger@outlook.com>
 */
class Songer_Ul_Manager_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'songer-ul-manager',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
