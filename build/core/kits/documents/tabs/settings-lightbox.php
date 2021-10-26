<?php

namespace Elementor\Core\Kits\Documents\Tabs;

use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

class Settings_Lightbox extends Tab_Base {

	public function get_id() {
		return 'settings-lightbox';
	}

	public function get_title() {
<<<<<<< HEAD
		return esc_html__( 'Lightbox', 'elementor' );
=======
		return __( 'Lightbox', 'elementor' );
>>>>>>> dist
	}

	public function get_group() {
		return 'settings';
	}

	public function get_icon() {
		return 'eicon-lightbox-expand';
	}

	public function get_help_url() {
		return 'https://go.elementor.com/global-lightbox';
	}

	protected function register_tab_controls() {
		$this->start_controls_section(
			'section_' . $this->get_id(),
			[
				'label' => $this->get_title(),
				'tab' => $this->get_id(),
			]
		);

		$this->add_control(
			'global_image_lightbox',
			[
<<<<<<< HEAD
				'label' => esc_html__( 'Image Lightbox', 'elementor' ),
				'type' => Controls_Manager::SWITCHER,
				'default' => 'yes',
				'description' => esc_html__( 'Open all image links in a lightbox popup window. The lightbox will automatically work on any link that leads to an image file.', 'elementor' ),
=======
				'label' => __( 'Image Lightbox', 'elementor' ),
				'type' => Controls_Manager::SWITCHER,
				'default' => 'yes',
				'description' => __( 'Open all image links in a lightbox popup window. The lightbox will automatically work on any link that leads to an image file.', 'elementor' ),
>>>>>>> dist
				'frontend_available' => true,
			]
		);

		$this->add_control(
			'lightbox_enable_counter',
			[
<<<<<<< HEAD
				'label' => esc_html__( 'Counter', 'elementor' ),
=======
				'label' => __( 'Counter', 'elementor' ),
>>>>>>> dist
				'type' => Controls_Manager::SWITCHER,
				'default' => 'yes',
				'frontend_available' => true,
			]
		);

		$this->add_control(
			'lightbox_enable_fullscreen',
			[
<<<<<<< HEAD
				'label' => esc_html__( 'Fullscreen', 'elementor' ),
=======
				'label' => __( 'Fullscreen', 'elementor' ),
>>>>>>> dist
				'type' => Controls_Manager::SWITCHER,
				'default' => 'yes',
				'frontend_available' => true,
			]
		);

		$this->add_control(
			'lightbox_enable_zoom',
			[
<<<<<<< HEAD
				'label' => esc_html__( 'Zoom', 'elementor' ),
=======
				'label' => __( 'Zoom', 'elementor' ),
>>>>>>> dist
				'type' => Controls_Manager::SWITCHER,
				'default' => 'yes',
				'frontend_available' => true,
			]
		);

		$this->add_control(
			'lightbox_enable_share',
			[
<<<<<<< HEAD
				'label' => esc_html__( 'Share', 'elementor' ),
=======
				'label' => __( 'Share', 'elementor' ),
>>>>>>> dist
				'type' => Controls_Manager::SWITCHER,
				'default' => 'yes',
				'frontend_available' => true,
			]
		);

		$this->add_control(
			'lightbox_title_src',
			[
<<<<<<< HEAD
				'label' => esc_html__( 'Title', 'elementor' ),
				'type' => Controls_Manager::SELECT,
				'options' => [
					'' => esc_html__( 'None', 'elementor' ),
					'title' => esc_html__( 'Title', 'elementor' ),
					'caption' => esc_html__( 'Caption', 'elementor' ),
					'alt' => esc_html__( 'Alt', 'elementor' ),
					'description' => esc_html__( 'Description', 'elementor' ),
=======
				'label' => __( 'Title', 'elementor' ),
				'type' => Controls_Manager::SELECT,
				'options' => [
					'' => __( 'None', 'elementor' ),
					'title' => __( 'Title', 'elementor' ),
					'caption' => __( 'Caption', 'elementor' ),
					'alt' => __( 'Alt', 'elementor' ),
					'description' => __( 'Description', 'elementor' ),
>>>>>>> dist
				],
				'default' => 'title',
				'frontend_available' => true,
			]
		);

		$this->add_control(
			'lightbox_description_src',
			[
<<<<<<< HEAD
				'label' => esc_html__( 'Description', 'elementor' ),
				'type' => Controls_Manager::SELECT,
				'options' => [
					'' => esc_html__( 'None', 'elementor' ),
					'title' => esc_html__( 'Title', 'elementor' ),
					'caption' => esc_html__( 'Caption', 'elementor' ),
					'alt' => esc_html__( 'Alt', 'elementor' ),
					'description' => esc_html__( 'Description', 'elementor' ),
=======
				'label' => __( 'Description', 'elementor' ),
				'type' => Controls_Manager::SELECT,
				'options' => [
					'' => __( 'None', 'elementor' ),
					'title' => __( 'Title', 'elementor' ),
					'caption' => __( 'Caption', 'elementor' ),
					'alt' => __( 'Alt', 'elementor' ),
					'description' => __( 'Description', 'elementor' ),
>>>>>>> dist
				],
				'default' => 'description',
				'frontend_available' => true,
			]
		);

		$this->add_control(
			'lightbox_color',
			[
<<<<<<< HEAD
				'label' => esc_html__( 'Background Color', 'elementor' ),
=======
				'label' => __( 'Background Color', 'elementor' ),
>>>>>>> dist
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'.elementor-lightbox' => 'background-color: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'lightbox_ui_color',
			[
<<<<<<< HEAD
				'label' => esc_html__( 'UI Color', 'elementor' ),
=======
				'label' => __( 'UI Color', 'elementor' ),
>>>>>>> dist
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'.elementor-lightbox' => '--lightbox-ui-color: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'lightbox_ui_color_hover',
			[
<<<<<<< HEAD
				'label' => esc_html__( 'UI Hover Color', 'elementor' ),
=======
				'label' => __( 'UI Hover Color', 'elementor' ),
>>>>>>> dist
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'.elementor-lightbox' => '--lightbox-ui-color-hover: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'lightbox_text_color',
			[
<<<<<<< HEAD
				'label' => esc_html__( 'Text Color', 'elementor' ),
=======
				'label' => __( 'Text Color', 'elementor' ),
>>>>>>> dist
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'.elementor-lightbox' => '--lightbox-text-color: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'lightbox_icons_size',
			[
<<<<<<< HEAD
				'label' => esc_html__( 'Toolbar Icons Size', 'elementor' ),
=======
				'label' => __( 'Toolbar Icons Size', 'elementor' ),
>>>>>>> dist
				'type' => Controls_Manager::SLIDER,
				'selectors' => [
					'.elementor-lightbox' => '--lightbox-header-icons-size: {{SIZE}}{{UNIT}}',
				],
				'separator' => 'before',
			]
		);

		$this->add_control(
			'lightbox_slider_icons_size',
			[
<<<<<<< HEAD
				'label' => esc_html__( 'Navigation Icons Size', 'elementor' ),
=======
				'label' => __( 'Navigation Icons Size', 'elementor' ),
>>>>>>> dist
				'type' => Controls_Manager::SLIDER,
				'selectors' => [
					'.elementor-lightbox' => '--lightbox-navigation-icons-size: {{SIZE}}{{UNIT}}',
				],
				'separator' => 'before',
			]
		);

		$this->end_controls_section();
	}
}
