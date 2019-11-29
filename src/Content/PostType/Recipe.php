<?php
/**
 * Recipe Custom Post Type.
 *
 * @package salcode/oops-wp-demo
 *
 * @since 1.0.0
 */

namespace salcode\OopsWPDemo\Content\PostType;

use WebDevStudios\OopsWP\Structure\Content\PostType;

/**
 * Class: Recipe
 *
 * @see Post
 * @since 1.0.0
 */
class Recipe extends PostType {
	/**
	 * Permalink slug for this post type
	 *
	 * @var string $slug Permalink prefix
	 * @since 1.0.0
	 */
	protected $slug = 'recipes';

	/**
	 * Override the superclass method and provide the labels array
	 * for registering the Recipes post type
	 *
	 * @return Array labels for post type.
	 * @author sal.ferrarello@webdevstudios.com
	 * @since 1.0.0
	 */
	protected function get_labels(): array {
		return [
			'name'                  => _x( 'Recipes', 'Post Type General Name', 'salcode-oops-wp-demo' ),
			'singular_name'         => _x( 'Recipe', 'Post Type Singular Name', 'salcode-oops-wp-demo' ),
			'menu_name'             => __( 'Recipes', 'salcode-oops-wp-demo' ),
			'name_admin_bar'        => __( 'Recipe', 'salcode-oops-wp-demo' ),
			'archives'              => __( 'Recipe Archives', 'salcode-oops-wp-demo' ),
			'attributes'            => __( 'Recipe Attributes', 'salcode-oops-wp-demo' ),
			'parent_item_colon'     => __( 'Parent Recipe:', 'salcode-oops-wp-demo' ),
			'all_items'             => __( 'All Recipes', 'salcode-oops-wp-demo' ),
			'add_new_item'          => __( 'Add New Recipe', 'salcode-oops-wp-demo' ),
			'add_new'               => __( 'Add New', 'salcode-oops-wp-demo' ),
			'new_item'              => __( 'New Recipe', 'salcode-oops-wp-demo' ),
			'edit_item'             => __( 'Edit Recipe', 'salcode-oops-wp-demo' ),
			'update_item'           => __( 'Update Recipe', 'salcode-oops-wp-demo' ),
			'view_item'             => __( 'View Recipe', 'salcode-oops-wp-demo' ),
			'view_items'            => __( 'View Recipes', 'salcode-oops-wp-demo' ),
			'search_items'          => __( 'Search Recipe', 'salcode-oops-wp-demo' ),
			'not_found'             => __( 'Not found', 'salcode-oops-wp-demo' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'salcode-oops-wp-demo' ),
			'featured_image'        => __( 'Featured Image', 'salcode-oops-wp-demo' ),
			'set_featured_image'    => __( 'Set featured image', 'salcode-oops-wp-demo' ),
			'remove_featured_image' => __( 'Remove featured image', 'salcode-oops-wp-demo' ),
			'use_featured_image'    => __( 'Use as featured image', 'salcode-oops-wp-demo' ),
			'insert_into_item'      => __( 'Insert into lesson', 'salcode-oops-wp-demo' ),
			'uploaded_to_this_item' => __( 'Uploaded to this lesson', 'salcode-oops-wp-demo' ),
			'items_list'            => __( 'Recipes list', 'salcode-oops-wp-demo' ),
			'items_list_navigation' => __( 'Recipes list navigation', 'salcode-oops-wp-demo' ),
			'filter_items_list'     => __( 'Filter lessons list', 'salcode-oops-wp-demo' ),
		];
	}

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
			'supports'    => [ 'title', 'editor', 'thumbnail', 'custom-fields' ],
			'has_archive' => true,
		];
	}
}
