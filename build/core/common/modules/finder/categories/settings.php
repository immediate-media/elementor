<?php

namespace Elementor\Core\Common\Modules\Finder\Categories;

use Elementor\Core\Common\Modules\Finder\Base_Category;
use Elementor\Settings as ElementorSettings;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/**
 * Settings Category
 *
 * Provides items related to Elementor's settings.
 */
class Settings extends Base_Category {

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
		return esc_html__( 'Settings', 'elementor' );
	}

	public function get_id() {
		return 'settings';
=======
		return __( 'Settings', 'elementor' );
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
		$settings_url = ElementorSettings::get_url();

		return [
			'general-settings' => [
<<<<<<< HEAD
				'title' => esc_html__( 'General Settings', 'elementor' ),
=======
				'title' => __( 'General Settings', 'elementor' ),
>>>>>>> dist
				'url' => $settings_url,
				'keywords' => [ 'general', 'settings', 'elementor' ],
			],
			'advanced' => [
<<<<<<< HEAD
				'title' => esc_html__( 'Advanced', 'elementor' ),
=======
				'title' => __( 'Advanced', 'elementor' ),
>>>>>>> dist
				'url' => $settings_url . '#tab-advanced',
				'keywords' => [ 'advanced', 'settings', 'elementor' ],
			],
			'experiments' => [
<<<<<<< HEAD
				'title' => esc_html__( 'Experiments', 'elementor' ),
=======
				'title' => __( 'Experiments', 'elementor' ),
>>>>>>> dist
				'url' => $settings_url . '#tab-experiments',
				'keywords' => [ 'settings', 'elementor', 'experiments' ],
			],
		];
	}
}
