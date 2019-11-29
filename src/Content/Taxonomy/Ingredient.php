<?php
/**
 * Ingredient Taxonomy.
 *
 * @package salcode/oops-wp-demo
 *
 * @since 1.0.0
 */

namespace salcode\OopsWPDemo\Content\Taxonomy;

use WebDevStudios\OopsWP\Structure\Content\Taxonomy;

/**
 * Class: Ingredient
 *
 * @see Post
 * @since 1.0.0
 */
class Ingredient extends Taxonomy {

	/**
	 * Permalink slug for this taxonomy
	 *
	 * @var string $slug Permalink prefix
	 * @since 1.0.0
	 */
	protected $slug = 'ingredients';

	/**
	 * The object types this taxonomy supports.
	 *
	 * @var string[]
	 * @since 1.0.0
	 */
	protected $object_types = [ 'recipes' ];

	/**
	 * Override the superclass method and provide the args array
	 * for registering the Recipes post type
	 *
	 * @author sal.ferrarello@webdevstudios.com
	 * @since 1.0.0
	 *
	 * @return Array information for post type.
	 */
	protected function get_args() : array {
		return [
			'show_admin_column' => true,
			'rewrite'           => array(
				// Slug should be singular and L10n ready..
				'slug' => _x( 'ingredient', 'Custom Taxonomy slug', 'salcode-oops-wp-demo' ),
			),
		];
	}

	/**
	 * Get labels
	 *
	 * @since 1.0.0
	 * @author sal.ferrarello@webdevstudios.com
	 *
	 * @return array The labels for this taxonomy.
	 */
	protected function get_labels() : array {
		return [
			'name'          => __( 'Ingredients', 'salcode-oops-wp-demo' ),
			'singular_name' => __( 'Ingredient', 'salcode-oops-wp-demo' ),
		];
	}
}
