<?php declare(strict_types=1);

namespace Tribe\Project\Post_Types\%1$s;

use Tribe\Libs\Post_Type\Post_Type_Config;

class Config extends Post_Type_Config {

	// phpcs:ignore SlevomatCodingStandard.TypeHints.PropertyTypeHint.MissingAnyTypeHint
	protected $post_type = %1$s::NAME;

	public function get_args(): array {
		return [
			'hierarchical'     => false,
			'enter_title_here' => esc_html__( '%2$s title', 'tribe' ),
			'menu_icon'        => 'dashicons-warning',
			'map_meta_cap'     => true,
			'supports'         => [ 'title', 'editor', 'author', 'thumbnail', 'page-attributes', 'excerpt', 'revisions', ],
			'capability_type'  => 'post', // to use default WP caps
			'show_in_rest'     => true,
		];
	}

	/**
	 * @return array<string, string>
	 */
	public function get_labels(): array {
		return [
			'singular' => esc_html__( '%2$s', 'tribe' ),
			'plural'   => esc_html__( '%3$s', 'tribe' ),
			'slug'     => '%4$s',
		];
	}

}
