<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://dev.desiratech.com
 * @since             1.0.0
 * @package           Desiratech_Bootstrap_Photocarousel
 *
 * @wordpress-plugin
 * Plugin Name:       desiratech-bootstrap-photocarousel
 * Plugin URI:        https://github.com/djm204/wp-desiratech-bootstrap-carousel.git
 * Description:       It is a simple bootstrap carousel plugin
 * Version:           1.0.0
 * Author:            David Mendez
 * Author URI:        http://dev.desiratech.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       desiratech-bootstrap-photocarousel
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-desiratech-bootstrap-photocarousel-activator.php
 */
function activate_desiratech_bootstrap_photocarousel() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-desiratech-bootstrap-photocarousel-activator.php';
	Desiratech_Bootstrap_Photocarousel_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-desiratech-bootstrap-photocarousel-deactivator.php
 */
function deactivate_desiratech_bootstrap_photocarousel() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-desiratech-bootstrap-photocarousel-deactivator.php';
	Desiratech_Bootstrap_Photocarousel_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_desiratech_bootstrap_photocarousel' );
register_deactivation_hook( __FILE__, 'deactivate_desiratech_bootstrap_photocarousel' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-desiratech-bootstrap-photocarousel.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_desiratech_bootstrap_photocarousel() {

	$plugin = new Desiratech_Bootstrap_Photocarousel();
	$plugin->run();

}
run_desiratech_bootstrap_photocarousel();
