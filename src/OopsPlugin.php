<?php
/**
 * Plugin.
 *
 * @package salcode/oops-wp-demo
 *
 * @since 1.0.0
 */

namespace salcode\OopsWPDemo;

use WebDevStudios\OopsWP\Structure\Plugin\Plugin;

/**
 * Class: Demo
 *
 * @since 1.0.0
 */
class OopsPlugin extends Plugin {
	/**
	 * Services
	 *
	 * E.g. [
	 *   'salcode\OopsWPDemo\ContentRegistrar',
	 *   'salcode\OopsWPDemo\FilterRegistrar',
	 * ]
	 *
	 * @var string[] fully-qualified namespaces of services to instantiate,
	 *     each class extends Service.
	 *
	 * @since 1.0.0
	 */
	protected $services = [
		Content\ContentRegistrar::class,
	];
}
