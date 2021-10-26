<?php
namespace Elementor\Core\DocumentTypes;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

class Page extends PageBase {

	/**
	 * Get Properties
	 *
	 * Return Document Configuration Properties.
	 *
	 * @return array $properties
	 */
	public static function get_properties() {
		$properties = parent::get_properties();

		$properties['cpt'] = [ 'page' ];
		$properties['support_kit'] = true;

		return $properties;
	}

<<<<<<< HEAD
	public static function get_type() {
=======
	/**
	 * Get Name
	 *
	 * @access public
	 */
	public function get_name() {
>>>>>>> dist
		return 'wp-page';
	}

	/**
	 * Get Title
	 *
	 * @access public
	 * @static
	 */
	public static function get_title() {
<<<<<<< HEAD
		return esc_html__( 'Page', 'elementor' );
	}

	public static function get_plural_title() {
		return __( 'Pages', 'elementor' );
=======
		return __( 'Page', 'elementor' );
>>>>>>> dist
	}
}
