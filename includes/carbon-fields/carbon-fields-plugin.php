<?php
/**
 * Plugin Name: Carbon Fields
 * Description: WordPress developer-friendly custom fields for post types, taxonomy terms, users, comments, widgets, options, navigation menus and more.
 * Version: 2.1.0
 * Author: htmlburger
 * Author URI: https://htmlburger.com/
 * Plugin URI: http://carbonfields.net/
 * License: GPL2
 * Requires at least: 4.0
 * Tested up to: 4.8
 * Text Domain: carbon-fields
 * Domain Path: /languages
 */

use Carbon_Fields\Carbon_Fields;
use Carbon_Fields_Plugin\Libraries\Plugin_Update_Warning\Plugin_Update_Warning;
use const Carbon_Fields_Plugin\PLUGIN_FILE;

define( 'Carbon_Fields_Plugin\PLUGIN_FILE', __FILE__ );

define( 'Carbon_Fields_Plugin\RELATIVE_PLUGIN_FILE', basename( dirname( PLUGIN_FILE ) ) . '/' . basename( PLUGIN_FILE ) );

add_action( 'after_setup_theme', 'carbon_fields_boot_plugin' );
function carbon_fields_boot_plugin() {
	if ( file_exists( __DIR__ . '/vendor/autoload.php' ) ) {
		require( __DIR__ . '/vendor/autoload.php' );
	}
	Carbon_Fields::boot();

	if ( is_admin() ) {
		Plugin_Update_Warning::boot();
	}
}
