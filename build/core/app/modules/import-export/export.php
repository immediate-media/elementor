<?php
namespace Elementor\Core\App\Modules\ImportExport;

use Elementor\Core\App\Modules\ImportExport\Directories\Root;
<<<<<<< HEAD
use Elementor\Plugin;
=======
>>>>>>> dist

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

class Export extends Iterator {

	/**
	 * @var \ZipArchive
	 */
	private $zip_archive;

<<<<<<< HEAD
	private $archive_file_name;

=======
>>>>>>> dist
	final public function run() {
		ob_start();

		$this->init_zip_archive();

		$root_directory = new Root( $this );

		$manifest_data = $root_directory->run_export();

<<<<<<< HEAD
		/**
		 * Manifest data from exported kit.
		 *
		 * Filters the manifest data of any exported kit.
		 *
		 * @param array  $manifest_data Manifest data.
		 * @param Export $this          The export instance.
		 */
=======
>>>>>>> dist
		$manifest_data = apply_filters( 'elementor/kit/export/manifest-data', $manifest_data, $this );

		$this->set_current_archive_path( '' );

		$this->add_json_file( 'manifest', $manifest_data );

		$this->zip_archive->close();

<<<<<<< HEAD
		return [
			'manifest' => $manifest_data,
			'file_name' => $this->archive_file_name,
		];
=======
		$file_name = $this->get_archive_file_name();

		$downloaded_file_name = 'elementor-kit-' . $manifest_data['name'] . '.zip';

		// Clear any output before sending the file
		ob_end_clean();

		header( 'Content-type: application/zip' );

		header( 'Content-Disposition: attachment; filename=' . $downloaded_file_name );

		header( 'Content-length: ' . filesize( $file_name ) );

		readfile( $file_name );

		unlink( $file_name );

		die;
>>>>>>> dist
	}

	public function add_json_file( $name, $content, $json_flags = null ) {
		$this->add_file( $name . '.json', wp_json_encode( $content, $json_flags ) );
	}

	public function add_file( $file_name, $content ) {
		$this->zip_archive->addFromString( $this->get_archive_file_path( $file_name ), $content );
	}

	private function init_zip_archive() {
		$zip_archive = new \ZipArchive();

<<<<<<< HEAD
		$this->temp_dir = Plugin::$instance->uploads_manager->create_unique_dir();

		$this->archive_file_name = $this->temp_dir . 'kit.zip';

		$zip_archive->open( $this->archive_file_name, \ZipArchive::CREATE | \ZipArchive::OVERWRITE );

		$this->zip_archive = $zip_archive;
	}
=======
		$zip_archive->open( $this->get_archive_file_name(), \ZipArchive::CREATE | \ZipArchive::OVERWRITE );

		$this->zip_archive = $zip_archive;
	}

	private function get_archive_file_name() {
		return $this->get_temp_dir() . 'elementor-temp-kit.zip';
	}
>>>>>>> dist
}
