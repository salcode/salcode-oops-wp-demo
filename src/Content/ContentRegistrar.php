<?php
/**
 * Content Registrar.
 *
 * Registers content.
 *
 * @package salcode/oops-wp-demo
 *
 * @since 1.0.0
 */

namespace salcode\OopsWPDemo\Content;

use WebDevStudios\OopsWP\Structure\Content\ContentTypeInterface;
use WebDevStudios\OopsWP\Structure\Service;

/**
 * Class: ContentRegistrar
 *
 * Register custom post types.
 *
 * @see Service
 * @since 1.0.0
 */
class ContentRegistrar extends Service {
	/**
	 * List of PostType classes that should be registered
	 * by this service
	 *
	 * @var string[] $post_types array of PostType classes
	 * @since 1.0.0
	 */
	protected $post_types = [
		PostType\Recipe::class,
	];

	/**
	 * List of Taxonomy classes that should be registered
	 * by this service
	 *
	 * @var string[] $taxonomies array of Taxonomy classes
	 * @since 1.0.0
	 */
	protected $taxonomies = [
		Taxonomy\Ingredient::class,
	];

	/**
	 * Register hooks
	 *
	 * @author sal.ferrarello@webdevstudios.com
	 * @since 1.0.0
	 */
	public function register_hooks() {
		add_action( 'init', [ $this, 'register_post_types' ] );
		add_action( 'init', [ $this, 'register_taxonomies' ] );
	}

	/**
	 * Register post types
	 *
	 * @author sal.ferrarello@webdevstudios.com
	 * @since 1.0.0
	 */
	public function register_post_types() {
		foreach ( $this->post_types as $post_type_class ) {
			$post_type = new $post_type_class();
			$this->register_content( $post_type );
		}
	}

	/**
	 * Register taxonomies
	 *
	 * @author sal.ferrarello@webdevstudios.com
	 * @since 1.0.0
	 */
	public function register_taxonomies() {
		foreach ( $this->taxonomies as $taxonomy_class ) {
			$taxonomy = new $taxonomy_class();
			$this->register_content( $taxonomy );
		}
	}
	/**
	 * Register content
	 *
	 * @author sal.ferrarello@webdevstudios.com
	 * @since 1.0.0
	 *
	 * @param ContentTypeInterface $content_type Content type to be registered.
	 */
	private function register_content( ContentTypeInterface $content_type ) {
		$content_type->register();
	}
}
