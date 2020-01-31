<?php

namespace salcode\OopsWPDemo\Content\Shortcode;

use WebDevStudios\OopsWP\Structure\Content\Shortcode;

class Reverser extends Shortcode {

	protected $tag = 'reverser';

	public function render() {
		$prefix = $this->attributes['prefix'] ?? '';
		return $prefix . strrev( $this->content );
	}
}
