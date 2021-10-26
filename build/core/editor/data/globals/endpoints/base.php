<?php
namespace Elementor\Core\Editor\Data\Globals\Endpoints;

<<<<<<< HEAD
use Elementor\Data\V2\Base\Endpoint;
use Elementor\Data\V2\Base\Exceptions\Data_Exception;
use Elementor\Data\V2\Base\Exceptions\Error_404;
use Elementor\Plugin;

abstract class Base extends Endpoint {
	protected function register() {
		parent::register();

		$args = [
			'id_arg_type_regex' => '[\w]+',
		];

		$this->register_item_route( \WP_REST_Server::READABLE, $args );
		$this->register_item_route( \WP_REST_Server::CREATABLE, $args );
		$this->register_item_route( \WP_REST_Server::DELETABLE, $args );
=======
use Elementor\Data\Base\Endpoint;
use Elementor\Plugin;
use Elementor\Core\Utils\Exceptions;

abstract class Base extends Endpoint {
	public static function get_format() {
		return '{id}';
	}

	protected function register() {
		parent::register();

		$this->register_item_route();
		$this->register_item_route( \WP_REST_Server::CREATABLE );
		$this->register_item_route( \WP_REST_Server::DELETABLE );
>>>>>>> dist
	}

	public function get_items( $request ) {
		return $this->get_kit_items();
	}

<<<<<<< HEAD
	/**
	 * @inheritDoc
	 * @throws \Elementor\Data\V2\Base\Exceptions\Error_404
	 */
=======
>>>>>>> dist
	public function get_item( $id, $request ) {
		$items = $this->get_kit_items();

		if ( ! isset( $items[ $id ] ) ) {
<<<<<<< HEAD
			throw new Error_404( __( 'The Global value you are trying to use is not available.', 'elementor' ),
				'global_not_found'
=======
			return new \WP_Error(
				'global_not_found',
				__( 'The Global value you are trying to use is not available.', 'elementor' ),
				[ 'status' => Exceptions::NOT_FOUND ]
>>>>>>> dist
			);
		}

		return $items[ $id ];
	}

	public function create_item( $id, $request ) {
		$item = $request->get_body_params();

		if ( ! isset( $item['title'] ) ) {
<<<<<<< HEAD
			return new Data_Exception( __( 'Invalid title', 'elementor' ), 'invalid_title' );
=======
			return new \WP_Error( 'invalid_title', 'Invalid title' );
>>>>>>> dist
		}

		$kit = Plugin::$instance->kits_manager->get_active_kit();

		$item['id'] = $id;

		$db_item = $this->convert_db_format( $item );

		$kit->add_repeater_row( 'custom_' . $this->get_name(), $db_item );

		return $item;
	}

	abstract protected function get_kit_items();

	/**
	 * @param array $item frontend format.
	 * @return array backend format.
	 */
	abstract protected function convert_db_format( $item );
}
