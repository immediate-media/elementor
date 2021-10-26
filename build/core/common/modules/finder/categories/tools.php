<?php

namespace Elementor\Core\Common\Modules\Finder\Categories;

use Elementor\Core\Common\Modules\Finder\Base_Category;
use Elementor\Tools as ElementorTools;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/**
 * Tools Category
 *
 * Provides items related to Elementor's tools.
 */
class Tools extends Base_Category {

	/**
	 * Get title.
	 *
	 * @since 2.3.0
	 * @access public
	 *
	 * @return string
	 */
	public function get_title() {
<<<<<<< HEAD
		return esc_html__( 'Tools', 'elementor' );
	}

	public function get_id() {
		return 'tools';
=======
		return __( 'Tools', 'elementor' );
>>>>>>> dist
	}

	/**
	 * Get category items.
	 *
	 * @since 2.3.0
	 * @access public
	 *
	 * @param array $options
	 *
	 * @return array
	 */
	public function get_category_items( array $options = [] ) {
		$tools_url = ElementorTools::get_url();

		return [
			'tools' => [
<<<<<<< HEAD
				'title' => esc_html__( 'Tools', 'elementor' ),
=======
				'title' => __( 'Tools', 'elementor' ),
>>>>>>> dist
				'icon' => 'tools',
				'url' => $tools_url,
				'keywords' => [ 'tools', 'regenerate css', 'safe mode', 'debug bar', 'sync library', 'elementor' ],
			],
			'replace-url' => [
<<<<<<< HEAD
				'title' => esc_html__( 'Replace URL', 'elementor' ),
=======
				'title' => __( 'Replace URL', 'elementor' ),
>>>>>>> dist
				'icon' => 'tools',
				'url' => $tools_url . '#tab-replace_url',
				'keywords' => [ 'tools', 'replace url', 'domain', 'elementor' ],
			],
			'version-control' => [
<<<<<<< HEAD
				'title' => esc_html__( 'Version Control', 'elementor' ),
=======
				'title' => __( 'Version Control', 'elementor' ),
>>>>>>> dist
				'icon' => 'time-line',
				'url' => $tools_url . '#tab-versions',
				'keywords' => [ 'tools', 'version', 'control', 'rollback', 'beta', 'elementor' ],
			],
			'maintenance-mode' => [
<<<<<<< HEAD
				'title' => esc_html__( 'Maintenance Mode', 'elementor' ),
=======
				'title' => __( 'Maintenance Mode', 'elementor' ),
>>>>>>> dist
				'icon' => 'tools',
				'url' => $tools_url . '#tab-maintenance_mode',
				'keywords' => [ 'tools', 'maintenance', 'coming soon', 'elementor' ],
			],
		];
	}
}
