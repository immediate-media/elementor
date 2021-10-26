<?php

namespace Elementor\Core\App\Modules\ImportExport\Directories;

<<<<<<< HEAD
use Elementor\TemplateLibrary\Source_Local;
=======
use Elementor\Modules\LandingPages\Module as Landing_Pages_Module;
>>>>>>> dist

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

class Content extends Base {

	protected function get_name() {
		return 'content';
	}

	protected function get_default_sub_directories() {
<<<<<<< HEAD
		$post_types = get_post_types_by_support( 'elementor' );
=======
		$post_types = [ 'page', 'post', Landing_Pages_Module::CPT ];
>>>>>>> dist

		$sub_directories = [];

		foreach ( $post_types as $post_type ) {
<<<<<<< HEAD
			if ( Source_Local::CPT === $post_type ) {
				continue;
			}

=======
>>>>>>> dist
			$sub_directories[] = new Post_Type( $this->iterator, $this, $post_type );
		}

		return $sub_directories;
	}
}
