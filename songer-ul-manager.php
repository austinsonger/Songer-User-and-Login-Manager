<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://austinvernsonger.github.io
 * @since             1.0.0
 * @package           Songer_Ul_Manager
 *
 * @wordpress-plugin
 * Plugin Name:       Songer User and Login Manager
 * Plugin URI:        http://github.com/austinvernsonger/Songer-User-and-Login-Manager
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Austin Vern Songer
 * Author URI:        http://austinvernsonger.github.io
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       songer-ul-manager
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-songer-ul-manager-activator.php
 */
function activate_songer_ul_manager() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-songer-ul-manager-activator.php';
	Songer_Ul_Manager_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-songer-ul-manager-deactivator.php
 */
function deactivate_songer_ul_manager() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-songer-ul-manager-deactivator.php';
	Songer_Ul_Manager_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_songer_ul_manager' );
register_deactivation_hook( __FILE__, 'deactivate_songer_ul_manager' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-songer-ul-manager.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_songer_ul_manager() {

	$plugin = new Songer_Ul_Manager();
	$plugin->run();

}
run_songer_ul_manager();
