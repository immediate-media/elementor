<?php
namespace Elementor\Core\DocumentTypes;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

class Post extends PageBase {

	public static function get_properties() {
		$properties = parent::get_properties();

		$properties['support_kit'] = true;
<<<<<<< HEAD
		$properties['cpt'] = [ 'post' ];
=======
>>>>>>> dist

		return $properties;
	}

<<<<<<< HEAD
	public static function get_type() {
=======
	/**
	 * @access public
	 */
	public function get_name() {
>>>>>>> dist
		return 'wp-post';
	}

	/**
	 * @access public
	 * @static
	 */
	public static function get_title() {
<<<<<<< HEAD
		return esc_html__( 'Post', 'elementor' );
	}

	public static function get_plural_title() {
		return __( 'Posts', 'elementor' );
=======
		return __( 'Post', 'elementor' );
>>>>>>> dist
	}
}
