<?php
/**
 * Plugin Name: Salcode OOPS-WP Demo
 * Plugin URI: https://salferrarello.com/
 * Description: Plugin demonstrating some uses of <a href="https://github.com/WebDevStudios/oops-wp">OOPS-WP</a>.
 * Version: 1.0.0
 * Author: Sal Ferrarello
 * Author URI: http://salferrarello.com/
 * Text Domain: salcode-oops-wp-demo
 * Domain Path: /languages
 *
 * @package salcode/oops-wp-demo
 *
 * @since 1.0.0
 */

namespace salcode\OopsWPDemo;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

require_once __DIR__ . '/vendor/autoload.php';

$oops_plugin = new OopsPlugin();
$oops_plugin->run();
