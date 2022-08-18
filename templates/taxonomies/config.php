<?php declare(strict_types=1);

namespace Tribe\Project\Taxonomies\%1$s;

use Tribe\Libs\Taxonomy\Taxonomy_Config;

// phpcs:disable SlevomatCodingStandard.TypeHints.PropertyTypeHint.MissingNativeTypeHint
class Config extends Taxonomy_Config {

	/**
	 * @var string
	 */
	protected $taxonomy = %1$s::NAME;

	/**
	 * @var string[]
	 */
	protected $post_types = [ %5$s ];

	/**
	 * @var int
	 */
	protected $version = 0;

	public function get_args(): array {
		return [
			'hierarchical' => false,
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

	public function default_terms(): array {
		return [];
	}

}
