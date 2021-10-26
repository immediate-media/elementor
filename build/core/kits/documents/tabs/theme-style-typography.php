<?php

namespace Elementor\Core\Kits\Documents\Tabs;

use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

class Theme_Style_Typography extends Tab_Base {

	public function get_id() {
		return 'theme-style-typography';
	}

	public function get_title() {
<<<<<<< HEAD
		return esc_html__( 'Typography', 'elementor' );
=======
		return __( 'Typography', 'elementor' );
>>>>>>> dist
	}

	public function get_group() {
		return 'theme-style';
	}

	public function get_icon() {
		return 'eicon-typography-1';
	}

	public function get_help_url() {
		return 'https://go.elementor.com/global-theme-style-typography';
	}

	public function register_tab_controls() {
		$this->start_controls_section(
			'section_typography',
			[
<<<<<<< HEAD
				'label' => esc_html__( 'Typography', 'elementor' ),
=======
				'label' => __( 'Typography', 'elementor' ),
>>>>>>> dist
				'tab' => $this->get_id(),
			]
		);

		$this->add_default_globals_notice();

		$this->add_control(
			'body_heading',
			[
				'type' => Controls_Manager::HEADING,
<<<<<<< HEAD
				'label' => esc_html__( 'Body', 'elementor' ),
=======
				'label' => __( 'Body', 'elementor' ),
>>>>>>> dist
			]
		);

		$this->add_control(
			'body_color',
			[
<<<<<<< HEAD
				'label' => esc_html__( 'Text Color', 'elementor' ),
=======
				'label' => __( 'Text Color', 'elementor' ),
>>>>>>> dist
				'type' => Controls_Manager::COLOR,
				'dynamic' => [],
				'selectors' => [
					'{{WRAPPER}}' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
<<<<<<< HEAD
				'label' => esc_html__( 'Typography', 'elementor' ),
=======
				'label' => __( 'Typography', 'elementor' ),
>>>>>>> dist
				'name' => 'body_typography',
				'selector' => '{{WRAPPER}}',
			]
		);

		$this->add_responsive_control(
			'paragraph_spacing',
			[
<<<<<<< HEAD
				'label' => esc_html__( 'Paragraph Spacing', 'elementor' ),
=======
				'label' => __( 'Paragraph Spacing', 'elementor' ),
>>>>>>> dist
				'type' => Controls_Manager::SLIDER,
				'selectors' => [
					'{{WRAPPER}} p' => 'margin-bottom: {{SIZE}}{{UNIT}}',
				],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
					'em' => [
						'min' => 0.1,
						'max' => 20,
					],
					'vh' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'size_units' => [ 'px', 'em', 'vh' ],
			]
		);

		//Link Selectors
		$link_selectors = [
			'{{WRAPPER}} a',
		];

		$link_hover_selectors = [
			'{{WRAPPER}} a:hover',
		];

		$link_selectors = implode( ',', $link_selectors );
		$link_hover_selectors = implode( ',', $link_hover_selectors );

		$this->add_control(
			'link_heading',
			[
				'type' => Controls_Manager::HEADING,
<<<<<<< HEAD
				'label' => esc_html__( 'Link', 'elementor' ),
=======
				'label' => __( 'Link', 'elementor' ),
>>>>>>> dist
				'separator' => 'before',
			]
		);

		$this->start_controls_tabs( 'tabs_link_style' );

		$this->start_controls_tab(
			'tab_link_normal',
			[
<<<<<<< HEAD
				'label' => esc_html__( 'Normal', 'elementor' ),
=======
				'label' => __( 'Normal', 'elementor' ),
>>>>>>> dist
			]
		);

		$this->add_control(
			'link_normal_color',
			[
<<<<<<< HEAD
				'label' => esc_html__( 'Color', 'elementor' ),
=======
				'label' => __( 'Color', 'elementor' ),
>>>>>>> dist
				'type' => Controls_Manager::COLOR,
				'dynamic' => [],
				'selectors' => [
					$link_selectors => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
<<<<<<< HEAD
				'label' => esc_html__( 'Typography', 'elementor' ),
=======
				'label' => __( 'Typography', 'elementor' ),
>>>>>>> dist
				'name' => 'link_normal_typography',
				'selector' => $link_selectors,
			]
		);

		$this->end_controls_tab();

		$this->start_controls_tab(
			'tab_link_hover',
			[
<<<<<<< HEAD
				'label' => esc_html__( 'Hover', 'elementor' ),
=======
				'label' => __( 'Hover', 'elementor' ),
>>>>>>> dist
			]
		);

		$this->add_control(
			'link_hover_color',
			[
<<<<<<< HEAD
				'label' => esc_html__( 'Color', 'elementor' ),
=======
				'label' => __( 'Color', 'elementor' ),
>>>>>>> dist
				'type' => Controls_Manager::COLOR,
				'dynamic' => [],
				'selectors' => [
					$link_hover_selectors => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
<<<<<<< HEAD
				'label' => esc_html__( 'Typography', 'elementor' ),
=======
				'label' => __( 'Typography', 'elementor' ),
>>>>>>> dist
				'name' => 'link_hover_typography',
				'selector' => $link_hover_selectors,
			]
		);

		$this->end_controls_tab();

		$this->end_controls_tabs();

		// Headings.
<<<<<<< HEAD
		$this->add_element_controls( esc_html__( 'H1', 'elementor' ), 'h1', '{{WRAPPER}} h1' );
		$this->add_element_controls( esc_html__( 'H2', 'elementor' ), 'h2', '{{WRAPPER}} h2' );
		$this->add_element_controls( esc_html__( 'H3', 'elementor' ), 'h3', '{{WRAPPER}} h3' );
		$this->add_element_controls( esc_html__( 'H4', 'elementor' ), 'h4', '{{WRAPPER}} h4' );
		$this->add_element_controls( esc_html__( 'H5', 'elementor' ), 'h5', '{{WRAPPER}} h5' );
		$this->add_element_controls( esc_html__( 'H6', 'elementor' ), 'h6', '{{WRAPPER}} h6' );
=======
		$this->add_element_controls( __( 'H1', 'elementor' ), 'h1', '{{WRAPPER}} h1' );
		$this->add_element_controls( __( 'H2', 'elementor' ), 'h2', '{{WRAPPER}} h2' );
		$this->add_element_controls( __( 'H3', 'elementor' ), 'h3', '{{WRAPPER}} h3' );
		$this->add_element_controls( __( 'H4', 'elementor' ), 'h4', '{{WRAPPER}} h4' );
		$this->add_element_controls( __( 'H5', 'elementor' ), 'h5', '{{WRAPPER}} h5' );
		$this->add_element_controls( __( 'H6', 'elementor' ), 'h6', '{{WRAPPER}} h6' );
>>>>>>> dist

		$this->end_controls_section();
	}

	private function add_element_controls( $label, $prefix, $selector ) {
		$this->add_control(
			$prefix . '_heading',
			[
				'type' => Controls_Manager::HEADING,
				'label' => $label,
				'separator' => 'before',
			]
		);

		$this->add_control(
			$prefix . '_color',
			[
<<<<<<< HEAD
				'label' => esc_html__( 'Color', 'elementor' ),
=======
				'label' => __( 'Color', 'elementor' ),
>>>>>>> dist
				'type' => Controls_Manager::COLOR,
				'dynamic' => [],
				'selectors' => [
					$selector => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
<<<<<<< HEAD
				'label' => esc_html__( 'Typography', 'elementor' ),
=======
				'label' => __( 'Typography', 'elementor' ),
>>>>>>> dist
				'name' => $prefix . '_typography',
				'selector' => $selector,
			]
		);
	}
}
