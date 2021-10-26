<?php
namespace Elementor\Core\Common\Modules\Finder\Categories;

use Elementor\Core\Common\Modules\Finder\Base_Category;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/**
 * Site Category
 *
 * Provides general site items.
 */
class Site extends Base_Category {

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
		return esc_html__( 'Site', 'elementor' );
	}

	public function get_id() {
		return 'site';
=======
		return __( 'Site', 'elementor' );
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
		return [
			'homepage' => [
<<<<<<< HEAD
				'title' => esc_html__( 'Homepage', 'elementor' ),
=======
				'title' => __( 'Homepage', 'elementor' ),
>>>>>>> dist
				'url' => home_url(),
				'icon' => 'home-heart',
				'keywords' => [ 'home', 'page' ],
			],
			'wordpress-dashboard' => [
<<<<<<< HEAD
				'title' => esc_html__( 'Dashboard', 'elementor' ),
=======
				'title' => __( 'Dashboard', 'elementor' ),
>>>>>>> dist
				'icon' => 'dashboard',
				'url' => admin_url(),
				'keywords' => [ 'dashboard', 'wordpress' ],
			],
			'wordpress-menus' => [
<<<<<<< HEAD
				'title' => esc_html__( 'Menus', 'elementor' ),
=======
				'title' => __( 'Menus', 'elementor' ),
>>>>>>> dist
				'icon' => 'wordpress',
				'url' => admin_url( 'nav-menus.php' ),
				'keywords' => [ 'menu', 'wordpress' ],
			],
			'wordpress-themes' => [
<<<<<<< HEAD
				'title' => esc_html__( 'Themes', 'elementor' ),
=======
				'title' => __( 'Themes', 'elementor' ),
>>>>>>> dist
				'icon' => 'wordpress',
				'url' => admin_url( 'themes.php' ),
				'keywords' => [ 'themes', 'wordpress' ],
			],
			'wordpress-customizer' => [
<<<<<<< HEAD
				'title' => esc_html__( 'Customizer', 'elementor' ),
=======
				'title' => __( 'Customizer', 'elementor' ),
>>>>>>> dist
				'icon' => 'wordpress',
				'url' => admin_url( 'customize.php' ),
				'keywords' => [ 'customizer', 'wordpress' ],
			],
			'wordpress-plugins' => [
<<<<<<< HEAD
				'title' => esc_html__( 'Plugins', 'elementor' ),
=======
				'title' => __( 'Plugins', 'elementor' ),
>>>>>>> dist
				'icon' => 'wordpress',
				'url' => admin_url( 'plugins.php' ),
				'keywords' => [ 'plugins', 'wordpress' ],
			],
			'wordpress-users' => [
<<<<<<< HEAD
				'title' => esc_html__( 'Users', 'elementor' ),
=======
				'title' => __( 'Users', 'elementor' ),
>>>>>>> dist
				'icon' => 'wordpress',
				'url' => admin_url( 'users.php' ),
				'keywords' => [ 'users', 'profile', 'wordpress' ],
			],
		];
	}
}
