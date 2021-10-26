<?php
namespace Elementor\Core\Debug\Classes;

abstract class Inspection_Base {

	/**
	 * @return bool
	 */
	abstract public function run();

	/**
	 * @return string
	 */
	abstract public function get_name();

	/**
	 * @return string
	 */
	abstract public function get_message();

	/**
	 * @return string
	 */
	public function get_header_message() {
<<<<<<< HEAD
		return esc_html__( 'The preview could not be loaded', 'elementor' );
=======
		return __( 'The preview could not be loaded', 'elementor' );
>>>>>>> dist
	}

	/**
	 * @return string
	 */
	abstract public function get_help_doc_url();
}
